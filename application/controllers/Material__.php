<?php 
class Material extends CI_Controller
{
  
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper('cookie');   
        $this->load->database(); 
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->library('user_agent');
        $this->load->model("Master_model");           
    }

    public function index()
    {
        echo "list";        
    }

    public function floor_list()
    {
        $floor_name = array(0=>'Ground Floor', 1=>'1st Floor', 2=>'2nd Floor', 3=>'3rd Floor', 4=>'4th Floor', 5=>'5th Floor', 6=>'6th Floor', 7=>'7th Floor', 8=>'8th Floor', 9=>'9th Floor'); 
        return $floor_name;
    }
    public function ajax_get_floor()
    {
        
        $site_id = $this->input->post('site_id') ?? "";  
        $floor_num = $this->get_name("tbl_master","floor_num", $site_id);

        $data = array();

        for($i=0; $i<=$floor_num; $i++)
        {
            $data[] = $i;
        }

        echo json_encode($data);
    }
    public function ajax_update_stock()
    {
        //print_r($this->input->post());
        $site_id = $this->input->post("site_id");
        $id = $this->input->post("id");
        $mat_qty = $this->input->post("mat_qty");

        $frm_data = array(        
            "mat_qty"=>$mat_qty
        );

        $frm_data["update_date"] = date("Y-m-d H:i:s");
        $where_arr = array("id"=>$id);     
        $res = $this->Master_model->updateArr("tbl_manage_mat_stock", $frm_data, $where_arr);

        echo "~~~2~~~Stock successfully Updated...~~~";
    }

    public function ajax_manage_mat_stock()
    {
        //print_r($this->input->post());
        $site_id = $this->input->post("site_id");
        
        $qry = "select name from tbl_master where id = '$site_id'";
        $exec = $this->Master_model->getCustom($qry);
        $site_name = $exec[0]->name;

        $mat_id = $this->input->post("mat_id");
        $mat_qty = $this->input->post("mat_qty");
        $mat_unit = $this->input->post("mat_unit");
        $mat_name = $this->Master_model->getNameById("tbl_material","mat_name",$mat_id); 
       
        $frm_data = array(
          "site_id"=>$site_id,
          "site_name"=>$site_name,
          "mat_id"=>$mat_id,
          "mat_name"=>$mat_name,
          "mat_unit"=>$mat_unit,   
          "mat_qty"=> $mat_qty,
          "create_by" => $_COOKIE['user_name'],  
          "create_date" => date("Y-m-d H:i:s"),
          "ip" => $this->input->ip_address()
        );
        
        $qry = "select count(*) as total, id, mat_qty from tbl_manage_mat_stock where site_id = '$site_id' and mat_id = '$mat_id'";
        $res = $this->Master_model->getCustom($qry);
        
        $avl_qty = $res[0]->mat_qty;
        $chk_exist = $res[0]->total;

        if($chk_exist == 0)
        {                 
            $res = $this->Master_model->saveData("tbl_manage_mat_stock", $frm_data);

            $frm_data["reached_date"] = date("Y-m-d H:i:s");
            $res2 = $this->Master_model->saveData("tbl_reached_material", $frm_data);

            echo "~~~1~~~Stock successfully saved...~~~";
        }
        else
        {            
           
            $rqty = intval($avl_qty) + intval($mat_qty);

            $update_arr = array(
                "mat_qty" => $rqty,
                "update_date" => date("Y-m-d H:i:s")
            );    

            $where_arr = array("site_id"=>$site_id,"mat_id"=>$mat_id);     
            $res = $this->Master_model->updateArr("tbl_manage_mat_stock", $update_arr, $where_arr);
           
            //echo $this->db->last_query();
          

            $frm_data["reached_date"] = date("Y-m-d H:i:s");
            $res2 = $this->Master_model->saveData("tbl_reached_material", $frm_data);
 

           echo "~~~2~~~Stock successfully Updated...~~~";

        }

    }

    public function manage_material_qty()
    {

        $qry = "SELECT * FROM tbl_master where cat_id=5 ORDER BY name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry);
        $data['material_list'] = $this->Master_model->getAll("tbl_material");

        $this->load->view('header');
		$this->load->view('top-navbar');
        $this->load->view('side-navbar');
        $this->load->view("manage_material_qty", $data);

    }

/**-----------Stage Wise Materials----------------------------*/

    public function stage_wise_material()
    {
        
        $site_id = $this->input->post('site_id') ?? "";
        $data["site_id"] = $site_id;

        $qry = "SELECT * from tbl_material where id <> 0 and is_stage_wise = 1";        
        $qry .= " ORDER BY mat_name asc";

        $data['material_list'] = $this->Master_model->getCustom($qry);

        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);
        
        $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
        $data['stage_list'] = $this->Master_model->getCustom($qry2);

        $this->load->view("stage_wise_material", $data);

    }

    public function ajax_stage_wise_mat()
    {  
         //echo "<pre>";
        //print_r($this->input->post());
        
        $site_id = $this->input->post("sid");
        $site_name = $this->input->post("sname");  

        $mat_id_arr = $this->input->post("mat_id");
        $mat_name_arr = $this->input->post("mat_name");

        $mat_qty_arr = $this->input->post("mat_qty");
        $mat_unit_arr = $this->input->post("mat_unit");
        
        $stage_id = $this->input->post("st_id");
        $stage_name = $this->input->post("st_name");

        $floor_num = $this->input->post("f_num");
        $floor_name = $this->input->post("f_name");

        $reached_qty_arr = $this->input->post("moving_qty");
        $remark_arr = $this->input->post("remark");

        //$reached_date = $this->input->post("cons_date");
       //$reached_date = date("Y-m-d", strtotime($reached_date));

        $create_by = $_COOKIE['user_name'];
		$create_date = date("Y-m-d H:i:s");
    	$ip = $_SERVER["REMOTE_ADDR"];
        
        if($mat_id_arr)
        {
            foreach($mat_id_arr as $key=>$val)
            {
                $frm_data["site_id"] = $site_id;
                $frm_data["site_name"] = $site_name;

                $frm_data["stage_id"] = $stage_id;
                $frm_data["stage_name"] = $stage_name;

                $frm_data["floor_num"] = $floor_num;
                $frm_data["floor_name"] = $floor_name;
                                
                $frm_data["mat_id"] = $mat_id_arr[$key];
                $frm_data["mat_name"] = $mat_name_arr[$key];
                $frm_data["mat_unit"] = $mat_unit_arr[$key];
                $frm_data["mat_qty"] = $reached_qty_arr[$key];

                $frm_data["required_qty"] = $reached_qty_arr[$key];
                
                $frm_data["create_by"] = $create_by;
                $frm_data["create_date"] = $create_date;

                $res = $this->Master_model->saveData("tbl_stage_wise_required_mat", $frm_data);
                
                //echo $this->db->last_query();

/**-----------Update stock--------------------------*/

                /*if($res)
                {
                    $mid = $mat_id_arr[$key];
                    $matqty = $mat_qty_arr[$key];
                    $reachedqty = $reached_qty_arr[$key];

                    $rqty = intval($matqty) + intval($reachedqty);

                    $update_arr = array(
                      "mat_qty" => $rqty,
                      "update_date" => date("Y-m-d H:i:s")
                    );

                    $where_arr = array("site_id"=>$site_id, "mat_id"=>$mid);   
                    $res2 = $this->Master_model->updateArr("tbl_manage_mat_stock", $update_arr, $where_arr);

                }*/

            }

            echo "~~~1~~~Successfully saved...~~~";
        }
        else
        {
           echo "~~~2~~~Successfully Updated...~~~";
        }
    
}

public function stage_wise_material_list()
    {
        
        $site_id = $this->input->get('site_id') ?? "";  
        $floor_name = $this->input->get('floor_name') ?? "";
        $stage_id = $this->input->get('stage_id') ?? "";

        $daterange = $this->input->get('daterange') ?? "";
        
        if(!empty($daterange))
        {
            $dt = explode("-",$daterange);
            $f_date = str_replace("/", "-",$dt[0]);
            $t_date = str_replace("/", "-",$dt[1]); 
        }
        else
        {
            $f_date = "";
            $t_date = ""; 
        }
        
        $qry = "";
        $qry .= "SELECT * FROM tbl_stage_wise_required_mat where id <> 0";
    
        $data["site_id"] = 0;
        $data["floor_name"] = "";
        $data["stage_id"] = 0;

        if($site_id != 0)
        {
            $qry .= " and site_id = $site_id";
            $data["site_id"] = $site_id;
        }

        if($floor_name != "")
        {
           $qry .= " and floor_name = '$floor_name'";
           $data["floor_name"] = $floor_name;
        }

        if($stage_id != 0)
        {
           $qry .= " and stage_id = $stage_id";
           $data["stage_id"] = $stage_id;
        }

        if($f_date !="" && $t_date !="")
        {
            $f_date = date("Y-m-d",strtotime($f_date));
            $t_date = date("Y-m-d",strtotime($t_date));
            $qry .= " and DATE(create_date) BETWEEN '$f_date' and '$t_date'";
            $data["daterange"] = $daterange;
        }

        $qry .= " ORDER BY id desc";

        $data['history_list'] = $this->Master_model->getCustom($qry); 
        
        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);

        $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
        $data['stage_list'] = $this->Master_model->getCustom($qry2);

        $this->load->view("stage_wise_material_list", $data);

    }

public function update_required_material()
{
    
    $site_id = $this->input->get('site_id') ?? "";  
    $floor_name = $this->input->get('floor_name') ?? "";
    $stage_id = $this->input->get('stage_id') ?? "";

    $daterange = $this->input->get('daterange') ?? "";
    
    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }
    
    $qry = "";
    $qry .= "SELECT * FROM tbl_stage_wise_required_mat where id <> 0";

    $data["site_id"] = 0;
    $data["floor_name"] = "";
    $data["stage_id"] = 0;

    if($site_id != 0)
    {
        $qry .= " and site_id = $site_id";
        $data["site_id"] = $site_id;
    }

    if($floor_name != "")
    {
        $qry .= " and floor_name = '$floor_name'";
        $data["floor_name"] = $floor_name;
    }

    if($stage_id != 0)
    {
        $qry .= " and stage_id = $stage_id";
        $data["stage_id"] = $stage_id;
    }

    if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(create_date) BETWEEN '$f_date' and '$t_date'";
        $data["daterange"] = $daterange;
    }

    $qry .= " ORDER BY id desc";

    $data['history_list'] = $this->Master_model->getCustom($qry); 
    
    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
    $data['stage_list'] = $this->Master_model->getCustom($qry2);

    $this->load->view("update_required_material", $data);
}

public function daily_material_request()
{
    $site_id = $this->input->get('site_id') ?? "";        
    $floor_name = $this->input->get('floor_name') ?? "";
    $stage_id = $this->input->get('stage_id') ?? ""; 
        
    $daterange = $this->input->get('daterange') ?? "";

    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }
    
    $qry = "";
    $qry .= "SELECT a.*,b.id as required_id, b.site_id, b.site_name, b.floor_num, b.floor_name, b.stage_id, b.stage_name, b.mat_id, b.mat_name, b.mat_unit, b.mat_qty, b.order_qty";
    $qry .= " FROM tbl_stage_wise_request_mat a LEFT JOIN tbl_stage_wise_required_mat b";
    $qry .= " ON a.required_id = b.id WHERE a.id <> 0";
    
    $data["site_id"] = 0;
    $data["stage_id"] = 0;
    $data["floor_name"] = "";

    if($site_id != 0)
    {
        $qry .= " and b.site_id = $site_id";
        $data["site_id"] = $site_id;
    }
    if($stage_id != 0)
    {
        $qry .= " and b.stage_id = $stage_id";
        $data["stage_id"] = $stage_id;
    }
    if($floor_name != "")
    {
        $qry .= " and floor_name = '$floor_name'";
        $data["floor_name"] = $floor_name;
    }        
    if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(a.create_date) BETWEEN '$f_date' and '$t_date'";
        $data["daterange"] = $daterange;
    }

    $qry .= " ORDER BY a.create_date desc";
    $data['history_list'] = $this->Master_model->getCustom($qry);  

    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
    $data['stage_list'] = $this->Master_model->getCustom($qry2);
    
    $this->load->view("daily_material_request", $data);

}
public function ajax_daily_material_request()
    {
        $site_id_arr = $this->input->post("site_id");
        $required_id_arr = $this->input->post("required_id");
        $request_id_arr = $this->input->post("request_id");
        $order_qty_arr = $this->input->post("moving_qty");
        $order_date = $this->input->post("cons_date");
        $create_by = $_COOKIE['user_name'];
		$create_date = date("Y-m-d H:i:s");
    	$ip = $_SERVER["REMOTE_ADDR"];
        
        if($order_qty_arr)
        {            
            foreach($order_qty_arr as $key=>$val)
            {                             
                $frm_data["site_id"] = $site_id_arr[$key];
                $frm_data["required_id"] = $required_id_arr[$key];
                $frm_data["request_id"] = $request_id_arr[$key];
                $frm_data["order_qty"] = $order_qty_arr[$key];

                $frm_data["order_date"] = $order_date;               

                $frm_data["create_by"] = $create_by;
                $frm_data["create_date"] = $create_date;

                $frm_data["ip"] = $ip;
                $res = $this->Master_model->saveData("tbl_stage_wise_order_mat", $frm_data);

                //echo $this->db->last_query();

/**-----------Update stock--------------------------*/
                if($res)
                {                    
                    $order_qty = $this->get_name("tbl_stage_wise_required_mat","order_qty", $required_id_arr[$key]);
                    $id = $required_id_arr[$key];
                    $new_order_qty = $order_qty_arr[$key];

                    $rqty = intval($order_qty) + intval($new_order_qty);

                    $update_arr = array(
                        "order_qty" => $rqty,
                        "update_date" => date("Y-m-d H:i:s")
                      );

                    $where_arr = array("id"=>$id);   
                    $res2 = $this->Master_model->updateArr("tbl_stage_wise_required_mat", $update_arr, $where_arr);
                }

            }

            echo "~~~1~~~Successfully saved...~~~";
        }
        else
        {
           echo "~~~2~~~Successfully Updated...~~~";
        }    
}

public function receiving_history()
{      
    $site_id = $this->input->get('site_id') ?? "";
    $stage_id = $this->input->get('stage_id') ?? "";
    $floor_name = $this->input->get('floor_name') ?? "";
    $daterange = $this->input->get('daterange') ?? "";
    
    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }
    
    $qry = "";
    $qry .= "SELECT a.*, b.site_name, b.floor_name, b.stage_name, b.mat_name, b.mat_unit, b.required_qty FROM tbl_stage_wise_receive_mat a";
    $qry .= " LEFT JOIN tbl_stage_wise_required_mat b ON a.required_id = b.id";
    $qry .= " where a.id <> 0";

    $data["site_id"] = 0;

    if($site_id != 0)
    {
        $qry .= " and b.site_id = $site_id";
        $data["site_id"] = $site_id;
    } 

    if($stage_id != 0)
    {
        $qry .= " and b.stage_id = $stage_id";
        $data["stage_id"] = $stage_id;
    } 

    if($floor_name != 0)
    {
        $qry .= " and b.floor_name = '$floor_name'";
        $data["floor_name"] = $floor_name;
    } 

    if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(a.create_date) BETWEEN '$f_date' and '$t_date'";
        $data["daterange"] = $daterange;
    }

    $qry .= " ORDER BY a.id desc";

    $data['history_list'] = $this->Master_model->getCustom($qry);
   
    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
    $data['stage_list'] = $this->Master_model->getCustom($qry2);

    $this->load->view("receiving_history", $data);
}

public function stage_wise_stock_material()
{

    $site_id = $this->input->get('site_id') ?? "";
    $stage_id = $this->input->get('stage_id') ?? "";
    $floor_name = $this->input->get('floor_name') ?? "";
    $daterange = $this->input->get('daterange') ?? "";
    
    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }
    
    $qry = "";
    $qry .= "SELECT a.*, b.site_name, b.floor_name, b.stage_name, b.mat_name, b.mat_unit, b.required_qty FROM tbl_stage_wise_receive_mat a";
    $qry .= " LEFT JOIN tbl_stage_wise_required_mat b ON a.required_id = b.id";
    $qry .= " where a.id <> 0";

    $data["site_id"] = 0;

    if($site_id != 0)
    {
        $qry .= " and b.site_id = $site_id";
        $data["site_id"] = $site_id;
    } 

    if($stage_id != 0)
    {
        $qry .= " and b.stage_id = $stage_id";
        $data["stage_id"] = $stage_id;
    } 

    if($floor_name != 0)
    {
        $qry .= " and b.floor_name = $floor_name";
        $data["floor_name"] = $floor_name;
    } 

    if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(a.create_date) BETWEEN '$f_date' and '$t_date'";
        $data["daterange"] = $daterange;
    }

    $qry .= " ORDER BY a.id desc";

    $data['history_list'] = $this->Master_model->getCustom($qry);
   
    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
    $data['stage_list'] = $this->Master_model->getCustom($qry2);

    $this->load->view("stage_wise_stock_material", $data);

} 

public function daily_order_list()
{  

    $site_id = $this->input->get('site_id') ?? "";        
    $floor_name = $this->input->get('floor_name') ?? "";
    $stage_id = $this->input->get('stage_id') ?? "";         
    $daterange = $this->input->get('daterange') ?? "";

    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }
    
    $qry = "";
    $qry .= "SELECT a.*,b.id AS required_id, b.site_id, b.site_name, b.floor_num, b.floor_name, b.stage_id, b.stage_name, b.mat_id, b.mat_name, b.mat_unit,
        b.mat_qty, b.order_qty, c.request_qty, c.create_by AS request_by FROM tbl_stage_wise_order_mat a
        LEFT JOIN tbl_stage_wise_required_mat b ON a.required_id = b.id 
        LEFT JOIN `tbl_stage_wise_request_mat` c ON a.request_id = c.id
        WHERE a.id <> 0";
    
    $data["site_id"] = 0;
    $data["stage_id"] = 0;
    $data["floor_name"] = "";

    if($site_id != 0)
    {
        $qry .= " and b.site_id = $site_id";
        $data["site_id"] = $site_id;
    }
    if($stage_id != 0)
    {
        $qry .= " and b.stage_id = $stage_id";
        $data["stage_id"] = $stage_id;
    }
    if($floor_name != "")
    {
        $qry .= " and floor_name = '$floor_name'";
        $data["floor_name"] = $floor_name;
    }        
    if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(a.create_date) BETWEEN '$f_date' and '$t_date'";
        $data["daterange"] = $daterange;
    }

    $qry .= " ORDER BY a.create_date desc";
    $data['history_list'] = $this->Master_model->getCustom($qry);  

    $qry2 = "SELECT * FROM tbl_master where cat_id = 5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $qry2 = "SELECT * FROM tbl_work_stage where id <> 0 order by id asc";
    $data['stage_list'] = $this->Master_model->getCustom($qry2);
    
    $this->load->view("daily_order_list", $data);

}

/*****========<<<<<END Stage Wise Materials>>>>>============*************/
/************************************************************************/
/************************************************************************/
/************************************************************************/


/**--------------Reached Material START----------------*/

    public function reached_material()
    {     

        $site_id = $this->input->post('site_id') ?? "";
        $qry = "SELECT * from tbl_manage_mat_stock where id <> 0 ";       

        if($this->input->post('site_id'))
        {
            $qry .= " and site_id = $site_id";
            $data["site_id"] = $site_id;
        }
        else
        {
            $data["site_id"] = "";
        }

        $qry .= " ORDER BY site_name asc";

        $data['material_list'] = $this->Master_model->getCustom($qry);

        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);
        
        // $qry2 = "SELECT id,user_name, user_type FROM tbl_users where user_type != 1 order by user_name asc";
       //$data['user_list'] = $this->Master_model->getCustom($qry2);
        
        $this->load->view("reached_material", $data);

    }

    public function ajax_reached_material()
    {
      
        $site_id = $this->input->post("sid");
        $site_name = $this->input->post("sname");    
           
        $mat_id_arr = $this->input->post("mat_id");
        $mat_name_arr = $this->input->post("mat_name");
        $mat_qty_arr = $this->input->post("mat_qty");
        $mat_unit_arr = $this->input->post("mat_unit");
        $reached_qty_arr = $this->input->post("moving_qty");
        $remark_arr = $this->input->post("remark");

        $reached_date = $this->input->post("cons_date");
        $reached_date = date("Y-m-d", strtotime($reached_date));

        $create_by = $_COOKIE['user_name'];
		$create_date = date("Y-m-d H:i:s");
    	$ip = $_SERVER["REMOTE_ADDR"];
        
        if($mat_id_arr)
        {
            foreach($mat_id_arr as $key=>$val)
            {
                $frm_data["site_id"] = $site_id;
                $frm_data["site_name"] = $site_name;
                $frm_data["mat_id"] = $mat_id_arr[$key];
                $frm_data["mat_name"] = $mat_name_arr[$key];
                $frm_data["mat_unit"] = $mat_unit_arr[$key];
                $frm_data["mat_qty"] = $reached_qty_arr[$key];

                $frm_data["reached_date"] = $reached_date;
                $frm_data["remark"] = $remark_arr[$key];
                $frm_data["create_by"] = $create_by;
                $frm_data["create_date"] = $create_date;

                $res = $this->Master_model->saveData("tbl_reached_material", $frm_data);                
                //echo $this->db->last_query();
/**-----------Update stock--------------------------*/
                if($res)
                {
                    $mid = $mat_id_arr[$key];
                    $matqty = $mat_qty_arr[$key];
                    $reachedqty = $reached_qty_arr[$key];
                    $rqty = intval($matqty) + intval($reachedqty);

                    $update_arr = array(
                      "mat_qty" => $rqty,
                      "update_date" => date("Y-m-d H:i:s")
                    );

                    $where_arr = array("site_id"=>$site_id, "mat_id"=>$mid);   
                    $res2 = $this->Master_model->updateArr("tbl_manage_mat_stock", $update_arr, $where_arr);

                }

            }

            echo "~~~1~~~Successfully saved...~~~";
        }
        else
        {
           echo "~~~2~~~Successfully Updated...~~~";
        }
    
}


public function reached_mat_list()
  { 

    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $site_id = $this->input->get('site_id') ?? "";
    $daterange = $this->input->get('daterange') ?? "";

    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }

    $qry = "";
    $qry .= "SELECT * FROM tbl_reached_material where id <> 0";

    if($site_id != "")
    {
        $qry .= " and site_id = $site_id";
        $data["site_id"] = $site_id;
    }
    if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(create_date) BETWEEN '$f_date' and '$t_date'";    
    }

    $qry .= " ORDER BY id desc";

    $data['reached_list'] = $this->Master_model->getCustom($qry);

     $this->load->view("reached_mat_list.php", $data);
    
  }


/**--------------Reached Material END----------------*/

    public function site_wise_stock()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Master_model');
        
        $site_id = $this->input->get('site_id') ?? "";
        $filter = $this->input->get('filter') ?? "";
        
        $filter_qry = "";

        if($filter != "" && $filter == "min_qty")
        {
            $filter_qry = " and a.mat_qty <= b.min_qty and a.mat_qty > 0";
        }
        elseif($filter != "" && $filter == "zero_qty")
        {
            $filter_qry = " and a.mat_qty = 0";        
        }
        
        $qry = "";
        $qry = "SELECT a.id,a.site_id,a.site_name,a.mat_id,a.mat_name,a.mat_unit,a.mat_qty,a.create_date,b.min_qty FROM tbl_manage_mat_stock a";
        $qry .= " LEFT JOIN tbl_material b ON a.mat_id = b.id where a.mat_id <> 0";
        
        if($site_id != "")
        {
           $qry .= " and a.site_id = $site_id";
        }
       
        if($filter_qry != "")
        {
           $qry .= $filter_qry;
        }

        $qry .= " ORDER BY a.site_name asc, a.mat_name asc";

        $data['material_list'] = $this->Master_model->getCustom($qry);

        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);

        $this->load->view('header');
		$this->load->view('top-navbar');
        $this->load->view('side-navbar');
        $this->load->view("site_wise_stock", $data);
    }

    public function moving_material()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Master_model');

        $site_arr = $this->input->post('site_id') ?? "";        
        $qry = "SELECT * from tbl_manage_mat_stock where id <> 0 ";
        
        if($this->input->post('site_id'))
        {
           $site_id = implode(",", $site_arr);
           $qry .= " and site_id IN($site_id)";
           $data["site_arr"] = $site_arr;
        }
        else
        {
           $data["site_arr"] = "";
        }

        $qry .= " ORDER BY site_name asc";

        $data['material_list'] = $this->Master_model->getCustom($qry);

        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);

        $qry2 = "SELECT id,user_name, user_type FROM tbl_users where user_type != 1 order by user_name asc";
        $data['user_list'] = $this->Master_model->getCustom($qry2);

        $this->load->view("moving_material", $data);

    }

    public function ajax_moving_material()
    {
        //echo "<pre>";
          //print_r($this->input->post());
        //echo "</pre>";

        $m_site_id = $this->input->post("m_site_id");

        $qry = "select name from tbl_master where id = '$m_site_id'";
        $exec = $this->Master_model->getCustom($qry);
        $m_site_name = $exec[0]->name;

        $site_id_arr = $this->input->post("site_id");
        $site_name_arr = $this->input->post("site_name");
              
        
        $mat_id_arr = $this->input->post("mat_id");
        $mat_name_arr = $this->input->post("mat_name");
        $mat_qty_arr = $this->input->post("mat_qty");
        $mat_unit_arr = $this->input->post("mat_unit");
        $moving_qty_arr = $this->input->post("moving_qty");

        $handover_from_id = $this->input->post("handover_from");
        $handover_to_id = $this->input->post("handover_to");

        $moving_date = $this->input->post("moving_date");
        
         $create_by = $_COOKIE['user_name'];
        
        $frm_data = array(

          "to_site_id"=>$m_site_id,
          "to_site_name"=>$m_site_name,

          "handover_from_id"=>$handover_from_id,
          "handover_to_id"=>$handover_to_id,

          "moving_date"=>$moving_date,
          "create_by"=>$create_by,
          "create_date"=>date("Y-m-d H:i:s"),
          "ip"=>$this->input->ip_address()
        );

        if($site_id_arr)
        {
       
            foreach($site_id_arr as $key=>$val)
            {

                $frm_data["from_site_id"] = $site_id_arr[$key];
                $frm_data["from_site_name"] = $site_name_arr[$key];

                $frm_data["mat_id"] = $mat_id_arr[$key];
                $frm_data["mat_name"] = $mat_name_arr[$key];
                $frm_data["mat_unit"] = $mat_unit_arr[$key];
                $frm_data["mat_qty"] = $mat_qty_arr[$key];
                $frm_data["moving_qty"] = $moving_qty_arr[$key];

                $res = $this->Master_model->saveData("tbl_moving_history", $frm_data);
                
                //echo $this->db->last_query();
                /**update stock */
                if($res)
                {
                    $sid = $site_id_arr[$key];
                    $mid = $mat_id_arr[$key];

                    $matqty = $mat_qty_arr[$key];
                    $movqty = $moving_qty_arr[$key];
                    $rqty = intval($matqty) - intval($movqty);
                    
                    $update_arr = array(
                        "mat_qty" => $rqty
                    );

                    $where_arr = array("site_id"=>$sid, "mat_id"=>$mid );     
                    $res2 = $this->Master_model->updateArr("tbl_manage_mat_stock", $update_arr, $where_arr);
                
                    /**---------insert in tbl_manage_mat_stock site wise----*/
                       
                        $qry = "select count(*) as total, id, mat_qty as avl_qty from tbl_manage_mat_stock where site_id = '$m_site_id' and mat_id = '$mid'";
                        $res = $this->Master_model->getCustom($qry);
                        $chk_exist = $res[0]->total;
                        $avl_qty = $res[0]->avl_qty;
                
                        if($chk_exist == 0)
                        {
                            $create_by = $_COOKIE['user_name'];

                            $fdata = array(

                                "site_id" => $m_site_id,
                                "site_name" => $m_site_name,
                                "mat_id" => $mat_id_arr[$key],
                                "mat_name" => $mat_name_arr[$key],
                                "mat_unit" => $mat_unit_arr[$key],
                                "mat_qty" => $movqty,
                                "create_by" => $create_by,
                                "create_date"=> date("Y-m-d H:i:s"),
                                "ip"=> $this->input->ip_address()
                            );
    
                            $res = $this->Master_model->saveData("tbl_manage_mat_stock", $fdata);
                            //echo $this->db->last_query();
                            echo "~~~1~~~Stock successfully saved...~~~";
                        
                        }
                        else
                        {
                            $tqty = intval($movqty)+intval($avl_qty);

                            $update_arr2 = array(
                                "mat_qty" => $tqty,
                                "update_date"=> date("Y-m-d H:i:s"),
                            );

                            $where_arr = array("site_id"=>$m_site_id, "mat_id"=>$mid );     
                            $res2 = $this->Master_model->updateArr("tbl_manage_mat_stock", $update_arr2, $where_arr);

                            echo "~~~2~~~Stock successfully updated...~~~";
                        }

    /**--------------------END--------------------------------------*/
                                      
                }

            }

            echo "~~~1~~~Successfully saved...~~~";
        }
        else
        {
           echo "~~~2~~~Successfully Updated...~~~";
        }
    }

/**-------------------Minimum Quantity---------------- */

    public  function min_material()
    {

        $site_id = $this->input->post('site_id') ?? "";

        $qry = "SELECT * from tbl_manage_mat_stock where id <> 0 ";
        
        if($this->input->post('site_id'))
        {
           $qry .= " and site_id = $site_id";
           $data["site_id"] = $this->input->post('site_id');
        }
        else
        {
           $data["site_id"] = "";
        }

        $qry .= " and mat_qty <= min_qty";

        $qry .= " ORDER BY site_name asc";

        $data['material_list'] = $this->Master_model->getCustom($qry);

        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);

        $this->load->view('header');
		$this->load->view('top-navbar');
        $this->load->view('side-navbar');
        $this->load->view("site_wise_min_stock", $data);

    } 

/**----------------END Minimum Quantity---------------- */

    public function moving_history()
    {
        
        $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
        $data['site_list'] = $this->Master_model->getCustom($qry2);
        $site_id = $this->input->get('site_id') ?? "";
        
        $fsite_id = $this->input->get('fsite_id') ?? "";
        $tsite_id = $this->input->get('tsite_id') ?? "";

        $daterange = $this->input->get('daterange') ?? "";
        if(!empty($daterange))
        {
            $dt = explode("-",$daterange);
            $f_date = str_replace("/", "-",$dt[0]);
            $t_date = str_replace("/", "-",$dt[1]); 
        }
        else
        {
            $f_date = "";
            $t_date = ""; 
        }
        
        
        $qry = "";
        $qry .= "SELECT * FROM tbl_moving_history where id <> 0";
    
        $data["fsite_id"] = 0;
        $data["tsite_id"] = 0;

        if($fsite_id != 0)
        {
            $qry .= " and from_site_id = $fsite_id";
            $data["fsite_id"] = $fsite_id;
        }

        if($tsite_id != 0)
        {
            $qry .= " and to_site_id = $tsite_id";
            $data["tsite_id"] = $tsite_id;
        }

        if($f_date !="" && $t_date !="")
        {
            $f_date = date("Y-m-d",strtotime($f_date));
            $t_date = date("Y-m-d",strtotime($t_date));
            $qry .= " and DATE(create_date) BETWEEN '$f_date' and '$t_date'";
            $data["daterange"] = $daterange;
        }

        $qry .= " ORDER BY id desc";
                
        $data['history_list'] = $this->Master_model->getCustom($qry);
       
        $this->load->view("moving_history", $data);
    }



/****----------Material Consuption----------------- */

public function material_consuption()
{
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('Master_model');

    $site_id = $this->input->post('site_id') ?? "";
    
    $qry = "SELECT * from tbl_manage_mat_stock where id <> 0 ";
    
    if($this->input->post('site_id'))
    {
        //$qry .= " and site_id = $site_id";
        //$site_id = implode(",", $site_arr);
        $qry .= " and site_id = $site_id";
        $data["site_id"] = $site_id;
    }
    else
    {
        $data["site_id"] = "";
    }

    $qry .= " ORDER BY site_name asc";

    $data['material_list'] = $this->Master_model->getCustom($qry);

    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $qry2 = "SELECT id,user_name, user_type FROM tbl_users where user_type != 1 order by user_name asc";
    $data['user_list'] = $this->Master_model->getCustom($qry2);

    $this->load->view("material_consuption", $data);

}

public function ajax_material_consuption()
    {
      
        $site_id = $this->input->post("sid");
        $site_name = $this->input->post("sname");
    
           
        $mat_id_arr = $this->input->post("mat_id");
        $mat_name_arr = $this->input->post("mat_name");
        $mat_qty_arr = $this->input->post("mat_qty");
        $mat_unit_arr = $this->input->post("mat_unit");
        $cons_qty_arr = $this->input->post("moving_qty");
        $remark_arr = $this->input->post("remark");

        $cons_date = $this->input->post("cons_date");
        $cons_date = date("Y-m-d", strtotime($cons_date));

        $create_by = $_COOKIE['user_name'];
		$create_date = date("Y-m-d H:i:s");
    	$ip = $_SERVER["REMOTE_ADDR"];
        
        if($mat_id_arr)
        {
            foreach($mat_id_arr as $key=>$val)
            {
                $frm_data["site_id"] = $site_id;
                $frm_data["site_name"] = $site_name;
                $frm_data["mat_id"] = $mat_id_arr[$key];
                $frm_data["mat_name"] = $mat_name_arr[$key];
                $frm_data["mat_unit"] = $mat_unit_arr[$key];
                $frm_data["mat_qty"] = $mat_qty_arr[$key];
                $frm_data["cons_qty"] = $cons_qty_arr[$key];
                $frm_data["cons_date"] = $cons_date;
                $frm_data["remark"] = $remark_arr[$key];
                $frm_data["create_by"] = $create_by;
                $frm_data["create_date"] = $create_date;

                $res = $this->Master_model->saveData("tbl_consuption_history", $frm_data);
                
                //echo $this->db->last_query();

/**-----------Update stock--------------------------*/

                if($res)
                {
                    $mid = $mat_id_arr[$key];
                    $matqty = $mat_qty_arr[$key];
                    $consqty = $cons_qty_arr[$key];

                    $rqty = intval($matqty) - intval($consqty);

                    $update_arr = array(
                      "mat_qty" => $rqty,
                      "update_date" => date("Y-m-d H:i:s")
                    );

                    $where_arr = array("site_id"=>$site_id, "mat_id"=>$mid);   
                    $res2 = $this->Master_model->updateArr("tbl_manage_mat_stock", $update_arr, $where_arr);

                }

            }

            echo "~~~1~~~Successfully saved...~~~";
        }
        else
        {
           echo "~~~2~~~Successfully Updated...~~~";
        }
    
}

public function consuption_history()
  { 

    $qry2 = "SELECT * FROM tbl_master where cat_id=5 order by name asc";
    $data['site_list'] = $this->Master_model->getCustom($qry2);

    $site_id = $this->input->get('site_id') ?? "";
    $daterange = $this->input->get('daterange') ?? "";

    if(!empty($daterange))
    {
        $dt = explode("-",$daterange);
        $f_date = str_replace("/", "-",$dt[0]);
        $t_date = str_replace("/", "-",$dt[1]); 
    }
    else
    {
        $f_date = "";
        $t_date = ""; 
    }

    $qry = "";
    $qry .= "SELECT * FROM tbl_consuption_history where id <> 0";

    if($site_id != "")
    {
        $qry .= " and site_id = $site_id";
        $data["site_id"] = $site_id;
    }
    else
    {
        $data["site_id"] = "";
    }

   if($f_date !="" && $t_date !="")
    {
        $f_date = date("Y-m-d",strtotime($f_date));
        $t_date = date("Y-m-d",strtotime($t_date));
        $qry .= " and DATE(create_date) BETWEEN '$f_date' and '$t_date'";
        $data["daterange"] = $daterange;
    }
    
     $qry .= " ORDER BY id desc";

     $data['history_list'] = $this->Master_model->getCustom($qry);

     $this->load->view("consuption_history", $data);
    
  }



/****----------End material Consuption---------------- */

public function material_manager()
{
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('Master_model');

    if($this->input->post("submit"))
    {
        $mat_name = $this->input->post("mat_name") ?? "";

        $form_data = array(
            "id" => $this->input->post("id") ?? "",
            "mat_name" => $mat_name,
            "mat_unit" => $this->input->post("mat_unit") ?? "",
            "min_qty" => $this->input->post("min_qty") ?? "",
            "is_stage_wise" => $this->input->post("is_stage_wise") ?? ""               
        );

        $qry = "select count(*) as total, id from tbl_material where mat_name = '$mat_name' ";
        $res = $this->Master_model->getCustom($qry);

        $chk_exist = $res[0]->total;
        
        if($form_data["id"] == "")
        {

            if($chk_exist == 0)
            {
               $form_data["create_date"] = date("Y-m-d H:i:s");
               $form_data["ip"] = $this->input->ip_address();
               $res = $this->Master_model->saveData("tbl_material", $form_data);
               echo "~~~1~~~Successfully saved...~~~"; 
            }  
            else
            {
               echo "~~~3~~~Already Exist...~~~"; 
            }  
            
        }
        elseif($form_data["id"] != "")
        {
            $form_data["update_date"] = date("Y-m-d H:i:s");
            $res = $this->Master_model->updateData("tbl_material", $form_data);
            echo "~~~2~~~Successfully Updated...~~~";   
        }
        else
        {
            echo "~~~0~~~Something went wrong...~~~";
        }

    }

    $data = array();

    if(!empty($this->uri->segment(3)))
    {
        $id = $this->uri->segment(3);
        $data['materials'] = $this->Master_model->getDataById("tbl_material", $id);
    }

    $data['material_list'] = $this->Master_model->getAll("tbl_material");
    $data['unit_list'] = $this->Master_model->getAll("tbl_qty_unit");

    // echo $this->db->last_query();
    $this->load->view('header');
    $this->load->view('top-navbar');
    $this->load->view('side-navbar');
    $this->load->view("material_manager", $data);
    //$this->load->view('footer');

    
}

/*******************IMPORTER************************* */

public function import_mat()
{
    require_once __DIR__ . '/vendor/excel/SimpleXLSX.php';

    echo '<h5>Please dont refresh or close the page...</h5>';

    if ( $xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'] ) ) {
	
        $create_by = $_COOKIE['user_id'];
		$create_date = date("Y-m-d H:i:s");
    	$ip = $_SERVER["REMOTE_ADDR"];

		$dim = $xlsx->dimension();
		$cols = $dim[0];
	
        $rcnt = 0;
		foreach ($xlsx->rows() as $k => $r) 
		{		
			$rcnt++;
            if($rcnt > 2)
            {
                $qry = "select count(*) as total, id from tbl_material where mat_name = '$r[1]'";
                $res = $this->Master_model->getCustom($qry);
                $cnt = $res[0]->total;
                
                $html = "";

                if($cnt == 0)
                {
                    $fdata = array(

                        "mat_name" => $r[1],
                        "mat_unit" => $r[2],
                        "min_qty" => $r[3],
                        "create_by" => $create_by,
                        "create_date"=> $create_date,
                        "ip"=> $ip
                    );

                    $res = $this->Master_model->saveData("tbl_material", $fdata);
                    $html .= '<p style="font-size:14px;">Saved--->'.$r[1].'</p>';
                
                }
                else{	
                    
                    $html .= '<p style="font-size:14px;">Already Exist--->'.$r[1].'</p>';
                }

                echo $html;
            }
		}

		echo "Done...";

	} else {
		echo SimpleXLSX::parseError();
	}

}

public function import_mat_qty()
{

    require_once __DIR__ . '/vendor/excel/SimpleXLSX.php';

    echo '<h5>Please dont refresh or close the page...</h5>';

    if($xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'])){

        $site_id = $this->input->post("hdn_site_id");
        $site_name = $this->input->post("hdn_site_name");

        $create_by = $_COOKIE['user_id'];
		$create_date = date("Y-m-d H:i:s");
    	$ip = $_SERVER["REMOTE_ADDR"];

		$dim = $xlsx->dimension();
		$cols = $dim[0];
        $rcnt=0;
		foreach ($xlsx->rows() as $k => $r) 
		{		
            $rcnt++;
            if($rcnt > 3)
            {
                $qry = "select count(*) as total, id from tbl_manage_mat_stock where mat_id = '$r[1]' and site_id = '$site_id'";
                $res = $this->Master_model->getCustom($qry);
                $cnt = $res[0]->total;
                
                $html = "";
                if($cnt == 0)
                {
                    if($r[4] > 0)
                    {
                        $fdata = array(
                            "site_id" => $site_id,
                            "site_name" => $site_name,
                            "mat_id" => $r[1],
                            "mat_name" => $r[2],
                            "mat_unit" => $r[3],
                            "mat_qty" => $r[4],
                            "create_by" => $create_by,
                            "create_date"=> $create_date,
                            "ip"=> $ip
                        );

                        $res = $this->Master_model->saveData("tbl_manage_mat_stock", $fdata);

                        $html .= '<p style="font-size:14px;">Successfully Saved--->'.$r[2].'</p>';
                    }
                }
                else{	
                    //$cat_id = $res_arr['cat_id'];
                    $html .= '<p style="font-size:14px;">Already exist--->'.$r[2].'</p>';
                }
               
                echo $html;
            }
            
		}	
        
        echo "Done...";
    }
    else {
		echo SimpleXLSX::parseError();
	}
}

/*****************MENUS************************* */

public function get_qty_alert()
{
    $qry = "";
    $qry .= "SELECT count(a.id) as cnt_min FROM tbl_manage_mat_stock a";
    $qry .= " LEFT JOIN tbl_material b ON a.mat_id = b.id where a.mat_id <> 0 ";
    $qry .= " and a.mat_qty <= b.min_qty and a.mat_qty > 0";
    
    $min_alert = $this->Master_model->getCustom($qry);

    $qry2 = "";
    $qry2 .= "SELECT count(a.id) as cnt_zero FROM tbl_manage_mat_stock a";
    $qry2 .= " LEFT JOIN tbl_material b ON a.mat_id = b.id where a.mat_id <> 0 ";
    $qry2 .= " and a.mat_qty = 0";
    $zero_alert = $this->Master_model->getCustom($qry2);
    
    $data = array();

    $data["min_alert"] = $min_alert[0]->cnt_min;
    $data["zero_alert"] = $zero_alert[0]->cnt_zero;
        
    //print_r($data);
    return $data;
}

public function get_name($tbl=NULL,$col=NULL,$id=NULL)
{
    $name = $this->Master_model->getNameById($tbl,$col,$id); 
    return $name;
}

public function get_custom($qry)
{       
    $res = $this->Master_model->getCustom($qry);
    return $res;
}

public function getMenu()
{
    $this->load->helper("url");
    $this->load->model('Master_model');   
    $res = $this->Master_model->getAll("tbl_category");
    return $res;//"test function";
}
public function get_alert()
{
    $user_type = $_COOKIE['user_type'];
    $curr_date = date("Y-m-d");
    
    if($user_type == 1)
    {
        $sql = 'SELECT a.req_id as id, b.create_by_name, b.create_date FROM tbl_approval_list a
                LEFT JOIN tbl_request_master b ON a.req_id = b.id 
                WHERE a.manager_appr_status = "Approved" AND a.admin_appr_status = "Pending" GROUP BY a.req_id';
        $req_alert = $this->Master_model->getCustom($sql);

        return $req_alert;
    }
    else
    {
        $sql = "SELECT * FROM tbl_request_master WHERE manager_alert_status = 0 ORDER BY id DESC";        
        $req_alert = $this->Master_model->getCustom($sql);
        return $req_alert;
    }
}

public function delete()
{
    $this->load->helper('url');
    $this->load->model('Master_model');
    $id = $this->input->post('id');
    $source = $this->input->post('source');
    echo $data = $this->Master_model->delData('tbl_'.$source, $id);
}

public function delete_reached_mat()
{
    $id = $this->input->post('id');

    $qry = "select * from tbl_reached_material where id = $id";
    $res = $this->Master_model->getCustom($qry);
          
    $site_id = $res[0]->site_id;
    $mat_name = $res[0]->mat_name;
    $reached_qty = $res[0]->mat_qty;
    
    $qry = "select mat_qty as stock_qty from tbl_manage_mat_stock where site_id = $site_id and mat_name = '$mat_name'";
    $res2 = $this->Master_model->getCustom($qry);
    $stock_qty = $res2[0]->stock_qty;

    $new_mat_qty = intval($stock_qty) - intval($reached_qty);
   
    $frm_data = array(        
      "mat_qty"=>$new_mat_qty
    );

    $frm_data["update_date"] = date("Y-m-d H:i:s");
    
    $where_arr = array("site_id"=>$site_id, "mat_name"=>$mat_name);
    $this->Master_model->updateArr("tbl_manage_mat_stock", $frm_data, $where_arr);

    echo $data = $this->Master_model->delData('tbl_reached_material', $id);
        
}


}

?>