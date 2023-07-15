<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientApi extends CI_Controller {

    public $permission;
    public function __construct() {
        
        parent::__construct(); 
		$this->load->library("session");
		$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
        $this->load->helper("security");
		$this->load->library('user_agent');
        $this->load->library('master');
		//$this->load->library('upload');
		$this->load->database();
	    $this->load->model("Master_model"); 

        $this->$permission = $this->Master_model->headerAuth();

        //if($permission == 0){
            //$response = array('code'=>401, 'status' => 'error', 'message' => 'Unauthorised Access');
            //return $this->output->set_status_header(401)->set_content_type('application/json')->set_output(json_encode($response));
            //return $this->output->set_status_header(401);
            //exit;
        //}

    }



    public function get_name($tbl=NULL,$col=NULL,$id=NULL)
    {
        $name = $this->Master_model->getNameById($tbl,$col,$id); 
        return $name;
    }
    
    public function login(){
        
        $data = array();
        $login_content = file_get_contents('php://input');
        $json_data = json_decode($login_content, true);
        $json_data = array_map('xss_clean', $json_data);

        $login_id = $json_data['login_id'];
        $login_password = $json_data['login_password'];

        $where_arr = array("login_id"=>$login_id, "login_password"=>$login_password, "status"=>1);
        $res1 = $this->Master_model->getFilterAll("tbl_client_login", $where_arr);
        if($res1){

            $data['client_login'] = $res1[0];

            /**Generate Access Token */ 
            $id = $res1[0]->id;
            $res2 = $this->Master_model->getCustom("select access_token from tbl_access_token where client_login_id = $id");

            if(empty($res2))
            {
                $token = $this->master->genToken($id, "client");
                $frm_data = array("client_login_id"=>$id, "access_token"=>$token, "create_date"=>date("Y-m-d H:i:s"));
                $res3 = $this->Master_model->saveData("tbl_access_token", $frm_data);
               
                $data['client_login']->access_token = $token;
            }
            else{
                $data['client_login']->access_token = $res2[0]->access_token;
            }            

            $response = array('code' => 200, 'status' => 'success', 'message' => 'Successfully login');

        }
        else{

            $response = array('code' => 300, 'status' => 'error', 'message' => 'Invalid User Id OR Password');

        }

        $merg_res = array_merge($data, $response);
        $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));
      
    }

    public function dashboard(){
              
        if($this->$permission == 0){       
            return $this->output->set_status_header(401);
            exit;
        }   






        $data = array();
        
        $input_res = $this->Master_model->jsonData();
        $booking_id = $input_res['booking_id'];



              $curr_date = date("Y-m-d");  
              $fupdate_new = date('Y-m-d', strtotime($curr_date.' + 60 day'));
               
              // $curr_date = date("Y-m-d");  
                          
              $qry = "SELECT * from bkf_stage_details where id <> 0";
              $qry .= " and DATE(end_date) BETWEEN '$curr_date' and '$fupdate_new'"; 
              $qry .= " and booking_id = ".$input_res['booking_id'] ." and pending_amt > 0";  

              $data['notification'] = $this->Master_model->getCustom($qry);

              if($data['notification']){
                $data['is_due'] = true;
              }else
              {
                $data['is_due'] = false;
              }


        
        $qry = "";
        $qry .= "SELECT d.create_date AS aggrement_date, d.site_id, a.id AS booking_id,a.client_name,a.email_id,a.mobile_no,a.permanent_addr, DATE_FORMAT(a.create_date, '%d, %M %Y') AS booking_date, b.final_amt AS project_cost, ";
        $qry .= "DATE_FORMAT(a.aggrement_date, '%d, %M %Y') AS aggrement_date,DATE_FORMAT(c.aggr_period, '%d, %M %Y') AS aggr_period, DATE_FORMAT(c.work_start_on, '%d, %M %Y') AS start_date, c.comp_period AS end_date ";
        $qry .= "FROM bkf_booking_form a LEFT JOIN bkf_booking_transaction b ON a.id = b.booking_id LEFT JOIN bkf_commitment c ON a.id = c.booking_id LEFT JOIN bkf_aggrement_form AS d ON a.id = d.booking_id ";
		    $qry .= "where a.id = $booking_id";  

        $data['client_info'] = $this->Master_model->getCustom($qry)[0];

        if($data['client_info']){

          $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
        }
        else{
          $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
        }

        $merg_res = array_merge($data, $response);
        $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));
        
    }
public function notification()
{
          
        if($this->$permission == 0){       
            return $this->output->set_status_header(401);
            exit;
        }   






        $data = array();
        
        $input_res = $this->Master_model->jsonData();
        $booking_id = $input_res['booking_id'];


              $curr_date = date("Y-m-d");  
              $fupdate_new = date('Y-m-d', strtotime($curr_date.' + 60 day'));
               
              // $curr_date = date("Y-m-d");  
                          
              $qry = "SELECT * from bkf_stage_details where id <> 0";
              $qry .= " and DATE(end_date) BETWEEN '$curr_date' and '$fupdate_new'"; 
              $qry .= " and booking_id = ".$input_res['booking_id'] ." and pending_amt > 0";  

              $data['notification_data'] = $this->Master_model->getCustom($qry);

              if($data['notification_data']){
                $data['is_due'] = true;
             
                $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
              }
              else{
                $data['is_due'] = false;
                $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
              }

              $merg_res = array_merge($data, $response);
              $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));


}

public function addonView(){

    if($this->$permission == 0){       
        return $this->output->set_status_header(401);
        exit;
    }   
    $data = array();
    
    $input_res = $this->Master_model->jsonData();
    $booking_id = $input_res['booking_id'];
    
    $qry = "";
    $qry .= "SELECT * FROM tbl_cost_calculator_new ";
    
    $qry .= "where booking_id = $booking_id";  

    $data['result'] = $this->Master_model->getCustom($qry)[0];

    if($data['result']){
      $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
    }
    else{
      $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
    }

    $merg_res = array_merge($data, $response);
    $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

  }



  public function facilityView(){

    if($this->$permission == 0){       
        return $this->output->set_status_header(401);
        exit;
    }   
    $data = array();
    
    $input_res = $this->Master_model->jsonData();
    $booking_id = $input_res['booking_id'];
    
    $qry = "";
    $qry .= "SELECT * FROM bkf_facility_worktag ";
    
    $qry .= "where cat_id = 1";  

    $data['result'] = $this->Master_model->getCustom($qry);

    if($data['result']){
      $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
    }
    else{
      $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
    }

    $merg_res = array_merge($data, $response);
    $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

  }



public function attach_doc(){

       if($this->$permission == 0){       
        return $this->output->set_status_header(401);
        exit;
    }   
    $data = array();
    
    $input_res = $this->Master_model->jsonData();
    $booking_id = $input_res['booking_id'];
    
    $qry = "SELECT * FROM bkf_atttach_doc where booking_id = $booking_id";
    $data['result'] = $this->Master_model->getCustom($qry)[0];

    if($data['result']){
      $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
    }
    else{
      $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
    }

    $merg_res = array_merge($data, $response);
    $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

}


public function stageView(){

  if($this->$permission == 0){       
      return $this->output->set_status_header(401);
      exit;
  }   
  $data = array();
  
  $input_res = $this->Master_model->jsonData();
  $booking_id = $input_res['booking_id'];
  
  $qry = "";
  $qry .= "SELECT a.*, b.stage_name FROM bkf_stage_details a LEFT JOIN bkf_work_stages b ON a.stage_id = b.id ";
  
  $qry .= "where a.booking_id = $booking_id";  

  $data['result'] = $this->Master_model->getCustom($qry);
 
  if($data['result']){
    $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
  }
  else{
    $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
  }

  $merg_res = array_merge($data, $response);
  $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

}

public function paymentHistory(){

  if($this->$permission == 0){       
      return $this->output->set_status_header(401);
      exit;
  }   
  $data = array();
  
  $input_res = $this->Master_model->jsonData();
  $booking_id = $input_res['booking_id'];
  
  $qry = "";
  $qry .= "SELECT a.*, b.stage_name FROM bkf_stage_payment_history a LEFT JOIN bkf_work_stages b ON a.stage_id = b.id ";
  
  $qry .= "where a.booking_id = $booking_id";  

  $data['result'] = $this->Master_model->getCustom($qry);
 
  if($data['result']){
    $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
  }
  else{
    $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
  }

  $merg_res = array_merge($data, $response);
  $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

}



public function teamList(){

  if($this->$permission == 0){       
      return $this->output->set_status_header(401);
      exit;
  }   
  $data = array();
  
  $input_res = $this->Master_model->jsonData();
  $booking_id = $input_res['booking_id'];
  

    $qry2 = "";
    $qry2 .= "SELECT a.id, a.user_name, a.mobile, a.designation, b.user_type FROM tbl_users a ";
    $qry2 .= "LEFT JOIN tbl_user_type b ON a.user_type = b.id WHERE a.status = 1 ";
    $qry2 .= "AND  FIND_IN_SET(a.id, (SELECT my_team FROM bkf_aggrement_form WHERE booking_id = ".$booking_id.")) ";
    $qry2 .= " order by a.user_name asc";
    $data['result'] = $this->Master_model->getCustom($qry2);

  if($data['result']){
    $response = array('code' => 200, 'status' => 'success', 'message' => 'Success');
  }
  else{
    $response = array('code' => 300, 'status' => 'error', 'message' => 'Data  Not Availble');
  }

  $merg_res = array_merge($data, $response);
  $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

}



}
?>

