<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientmanager extends CI_Controller {


	public function __construct()
	 {
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('user_agent');
		
		$this->load->database();
	    $this->load->model("Master_model");
		 
	 }

    public function add_usertype(){
        
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('addusertype');
    }
/**-----------Manage Stages---------------------------------------------- */
	public function manage_stages(){    

		$qry = "SELECT * FROM bkf_work_stages where status = 1";
		$data['stage_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_stages', $data);
    }

	public function ajax_work_stages()
	{		
		$frm_data = array(			
		  "stage_name" => $this->input->post("stage_name"),			
		  "ip"=> $this->input->ip_address(),	
		);

		$stage_id = $this->input->post("stage_id");
		if($stage_id != ""){

			$frm_data['id'] = $stage_id;
			$frm_data['update_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_work_stages", $frm_data);
			if($res){
				echo "~~~2~~~$stage_id~~~";
			}
			else{
				echo "~~~0~~~";
			}  			
		}
		else{

			$frm_data['create_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("bkf_work_stages", $frm_data);
			$id = $this->db->insert_id();

			if($res){
				echo "~~~1~~~$id~~~";
			}
			else{
				echo "~~~0~~~";
			}
			
		}
			
	}

/**---------Facility and Work Tag--------------------------- */

	public function manage_facility_worktag(){
		
		$qry = "SELECT * FROM bkf_facility_worktag where cat_id = 1 and status = 1";
		$data['facility_list'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_facility_worktag where cat_id = 2 and status = 1";
		$data['worktag_list'] = $this->Master_model->getCustom($qry);

		$id = $this->uri->segment(3);
		if($id){
			$qry = "SELECT cat_id, name FROM bkf_facility_worktag where id = $id";
			$res = $this->Master_model->getCustom($qry)[0];
			$data['id'] = $id;
			$data['cat_id'] = $res->cat_id;
			$data['name'] = $res->name;
		}else{
			$data['id'] = "";
			$data['cat_id'] = "";
			$data['name'] = "";
		}
		


		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_facility_worktag', $data);
    }

	public function ajax_facility_worktag(){
         
		$frm_data = array(			
			"cat_id" => $this->input->post("cat_id"),			
			"name" => $this->input->post("facility"),			
			"ip"=> $this->input->ip_address(),	
		);
		$f_id = $this->input->post("f_id");
		if($f_id != ""){

			$frm_data['id'] = $f_id;
			$frm_data['update_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_facility_worktag", $frm_data);
			if($res){
				echo "~~~2~~~$f_id~~~";
			}
			else{
				echo "~~~0~~~";
			}  			
		}
		else{

			$frm_data['create_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("bkf_facility_worktag", $frm_data);
			$id = $this->db->insert_id();

			if($res){
				echo "~~~1~~~$id~~~";
			}
			else{
				echo "~~~0~~~";
			}
			
		}

		//echo $this->db->last_query();
		
    }

	public function manage_stage_details(){
         
		$qry = "SELECT * FROM bkf_work_stages where status = 1 order by id asc";
		$data['stage_list'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_facility_worktag where cat_id = 2 and status = 1";
		$data['worktag_list'] = $this->Master_model->getCustom($qry);
		
		$data['booking_id'] = $this->uri->segment(3) ?? "";
		$data['sid'] = $this->uri->segment(4) ?? "";
		
		if($data['booking_id'] != "" && $data['sid'] != "")
		{	
			$qry = "SELECT * FROM bkf_stage_details where id = ".$data['sid']."";
			$data['sdata'] = $this->Master_model->getCustom($qry)[0];
		}
		
		//echo $this->db->last_query();

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_stage_details', $data);

    }

	public function ajax_stage_details(){

		//print_r($this->input->post());
		$booking_id = $this->input->post("booking_id") ?? "";
		$stage_id = $this->input->post("stage_id") ?? "";
		$sid = $this->input->post("sid") ?? "";

		$daterange = $this->input->post("daterange");
		$date_arr = explode(" - ", $daterange);
	
		$start_date = date("Y-m-d H:i:s", strtotime($date_arr[0]));
		$end_date = date("Y-m-d H:i:s", strtotime($date_arr[1]));

		$work_tag_arr = $this->input->post("work_tag");
		$work_tag = implode(",", $work_tag_arr);

		$stage_details = $this->input->post("stage_details");
		$payable_amt = $this->input->post("payable_amt");
		$payable_date = $this->input->post("payable_date");
		$payable_date = date("Y-m-d", strtotime($payable_date));
		$payment_status = $this->input->post("payment_status");

		$frm_data = array(			
			"booking_id" => $booking_id,
			"stage_id" => $stage_id,
			"start_date" => $start_date,
			"end_date" => $end_date,
			"work_tag" => $work_tag,
			"stage_details" => $this->input->post("stage_details"),
			"payable_amt" => $this->input->post("payable_amt"),	
			"pending_amt" => $this->input->post("payable_amt"),			
			"payable_date" => $payable_date,
			"payment_status" =>  $this->input->post("payment_status"),	
			"create_by" => $_COOKIE['employee_name'] ?? "",		
			"ip"=> $this->input->ip_address()	
		);

		if($sid != ""){

			$qry = "SELECT * FROM bkf_stage_details where id = $sid";
			$res = $this->Master_model->getCustom($qry);

			if($res){
				$sid = $res[0]->id;
				$frm_data['id'] = $sid;
				$frm_data['update_date'] = date("Y-m-d H:i:s");
				$res = $this->Master_model->updateData("bkf_stage_details", $frm_data);
				if($res){
					echo "~~~2~~~$sid~~~$booking_id~~~";
				}
				else{
					echo "~~~0~~~";
				}  		
			}
			
		}
		else{

			$frm_data['create_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("bkf_stage_details", $frm_data);
			$id = $this->db->insert_id();
			if($res){
				echo "~~~1~~~$id~~~$booking_id~~~";
			}
			else{
				echo "~~~0~~~";
			}	

		}

		//echo $this->db->last_query();
	}

	public function stage_detail_list(){
         
		$data['booking_id'] = $this->uri->segment(3);
		if($data['booking_id'])
		{
			$qry = "SELECT * FROM bkf_stage_details where booking_id = ".$data['booking_id']."";
			$data['stage_list'] = $this->Master_model->getCustom($qry);
		}

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('stage_detail_list', $data);
    }

	public function ajax_stage_payment(){
				
		//print_r($_REQUEST);
		
		$sid = $this->input->post("sid") ?? "";
		$stage_id = $this->input->post("stage_id") ?? "";
		$booking_id = $this->input->post("booking_id") ?? "";

		$payable_amt = $this->input->post("payable_amt") ?? "";		
		$pending_amt = $this->input->post("pending_amt") ?? "";
		$paid_amt = $this->input->post("paid_amt") ?? "";

		$new_pending_amt = $pending_amt - $paid_amt;

		$refrence_no = $this->input->post("refrence_no") ?? "";
		$received_as = $this->input->post("received_as");
		$received_by = $this->input->post("received_by");
		
		$frm_data = array(		
			"stage_id" => $stage_id,	
			"booking_id" => $booking_id,
			"payable_amt" => $payable_amt,			
			"paid_amt" => $paid_amt,
			"pending_amt" => $new_pending_amt,
			"refrence_no" => $refrence_no,
			"received_as" => $received_as,
			"received_by" =>  $received_by,
			"create_by" => $_COOKIE['employee_name'] ?? "",		
			"ip" => $this->input->ip_address()	
		);

		//echo "<pre>";
		//print_r($frm_data);
		//exit;
		//$qry = "SELECT * FROM bkf_stage_details where id = $sid";
		//$res = $this->Master_model->getCustom($qry);

		if($booking_id != ""){

			$frm_data['create_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("bkf_stage_payment_history", $frm_data);
			$id = $this->db->insert_id();
			if($res){
				$frm_data_2 =array("pending_amt" => $new_pending_amt, "update_date" => date("Y-m-d H:i:s"));
				$where_arr = array("stage_id"=>$stage_id);
				$res = $this->Master_model->updateArr("bkf_stage_details", $frm_data_2, $where_arr);
				$id = $this->db->insert_id();

				echo "~~~1~~~$id~~~$booking_id~~~";
			}
			else{
				echo "~~~0~~~";
			}			
		}
		else{
			echo "~~~0~~~";
		}
		echo $this->db->last_query();
	}

	public function ajax_stage_running_status(){
		
		$id = $this->input->post('sid');
		$stage_id = $this->input->post('stage_id');
		$running_status = $this->input->post('running_status');

		$frm_data =array("running_status" => $running_status, "update_date" => date("Y-m-d H:i:s"));
		$where_arr = array("stage_id"=>$stage_id);
		$res = $this->Master_model->updateArr("bkf_stage_details", $frm_data, $where_arr);
		if($res){

			$status = $this->getStatus($running_status);
			echo "~~~2~~~".$status."~~~";
		}
		else{
			echo "~~~0~~~";
		}
		
	}	

	public function payment_history(){

		$data['booking_id'] = $this->uri->segment(3);
		if($data['booking_id'])
		{
			
			$qry = "";
			$qry .= "SELECT a.*,b.stage_name FROM bkf_stage_payment_history a LEFT JOIN bkf_work_stages b ON a.stage_id = b.id where a.booking_id = ".$data['booking_id']." ";
			if($_POST['stage_id']){
			$qry .= "and a.stage_id = ".$_POST['stage_id']." ";
			$data['stage_idCP_'] =$_POST['stage_id'];
			}
			$qry .= "order by id desc";
			
			$data['payment_list'] = $this->Master_model->getCustom($qry);
		}
		
		$qry = "SELECT * FROM bkf_work_stages where status = 1 order by id asc";
		$data['stage_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('payment_history', $data);

	}

	public function getStatus($status){
		
		
		if($status == "Untouched"){
			$html = '<span class="badge badge-label bg-primary"><i class="mdi mdi-circle-medium"></i>Untouched</span>';
		}
		elseif($status == "Running"){
			$html = '<span class="badge badge-label bg-warning"><i class="mdi mdi-circle-medium"></i>Running</span>';
		}
		elseif($status == "Hold"){
			$html = '<span class="badge badge-label bg-secondary"><i class="mdi mdi-circle-medium"></i>Hold</span>';
		}
		elseif($status == "Completed"){
			$html = '<span class="badge badge-label bg-success"><i class="mdi mdi-circle-medium"></i>Completed</span>';
		}
		return $html;
	}

	public function paymenthistory(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('paymenthistory');
    }

	public function viewgallery(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('viewgallery');
    }

	
	public function project_list(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('project_list');
    }
	public function manage_facility(){

		$data['booking_id'] = $this->uri->segment(3);
		
         $qry = "SELECT * FROM bkf_facility_worktag where cat_id = 1 AND status = 1";
			$data['facility_list'] = $this->Master_model->getCustom($qry);
		

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_facility',$data);
    }
    public function ajax_add_facility()
    {

		$facility_arr = $this->input->post("chk_facility");
		$facility_str = implode(",", $facility_arr);
		
		$booking_id = $this->input->post("booking_id");
		$frm_data = array(			
			"booking_id" => $booking_id,
			"my_facility" => $facility_str,
			"update_date" => date("Y-m-d H:i:s"),
		);
			$where_arr = array("booking_id" => $booking_id);
			$res = $this->Master_model->updateArr("bkf_aggrement_form", $frm_data, $where_arr);	
			if($res){
				echo "~~~2~~~";
			}
			else{
				echo "~~~0~~~";
			}

		
    }

	public function manage_team(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_team');
    }




	public function addteam(){

		$data['result'] = $this->Master_model->getAll("tbl_employee_type");
   
		$id = $this->uri->segment(3) ?? "";
		if($id!="")
		{
		$data['editData'] = $this->Master_model->getDataById("tbl_employee", $id)[0];
		}
   
	   $this->load->view('header');
	   $this->load->view('top_sidebar');
	   $this->load->view('addteam',$data);
   }
   public function ajax_addteam()
   {

	$id      = $this->input->post("id") ?? "";
	$emp_name      = $this->input->post("emp_name") ?? "";
	$emp_mobile   = $this->input->post("emp_mobile") ?? "";
	$emp_type   = $this->input->post("emp_type") ?? "";

	$frm_data = array(
		"id"=>$id,
		"emp_name"=> $emp_name,
		"emp_mobile"=> $emp_mobile,
		"emp_type"=> $emp_type,
		"create_date"=> date("Y-m-d H:i:s"),
		"ip" => $this->input->ip_address()
		);

	if($frm_data["id"] == ""){

		$frm_data['create_date'] = date("Y-m-d H:i:s");
		$frm_data['ip'] = $this->input->ip_address();               
		$res = $this->Master_model->saveData("tbl_employee", $frm_data);                       
		if($res)
		{
			echo "~~~1~~~";
		}
		else
		{
			echo "~~~0~~~";
		}

	} else {
		
		$frm_data["update_date"] = date("Y-m-d H:i:s");
		$res = $this->Master_model->updateData("tbl_employee", $frm_data);
		if($res)
		{    
			echo "~~~2~~~";
		}
		else
		{
			echo "~~~0~~~";
		}
		//echo $this->db->last_query(); 
	}
				  
     
   }
   
   public function teamlist(){
		
	   $qry = "SELECT * FROM tbl_employee where status = 1 ";
	   $data['result'] = $this->Master_model->getCustom($qry);
   
	   $this->load->view('header');
	   $this->load->view('top_sidebar');
	   $this->load->view('teamlist',$data);
   }

   public function upload_certificate(){

		$qry = "SELECT * FROM bkf_work_stages where status = 1 order by id asc";
		$data['stage_list'] = $this->Master_model->getCustom($qry);

		$data['booking_id'] = $this->uri->segment(3) ?? "";

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('upload_certificate',$data);
}
public function ajax_upload_certificate()
{
		$stage_id = $this->input->post("stage_id") ?? "";
		$c_name = $this->input->post("c_name") ?? "";
		$booking_id = $this->input->post("booking_id") ?? "";

		$frm_data = array(
			'stage_id'=>$stage_id,
			'booking_id'=>$booking_id,
			'certificate_name'=>$c_name,
			'create_date'=>date("Y-m-d H:i:s"),
			'ip'=> $this->input->ip_address()
		);

			$file_name = $_FILES['file_name']['name'];
			$tmp_name = $_FILES['file_name']['tmp_name'];			
			$ad_c = $this->file_upload($file_name, $tmp_name, $c_name."_".$booking_id."_".$stage_id);
			if($ad_c != "")
			{
				$frm_data['file_name'] = $ad_c;				
			}


			$res = $this->Master_model->saveData("bkf_uploaded_certificate", $frm_data);
			if($res)
			{
				echo "~~~1~~~";
			}
			else
			{
				echo "~~~0~~~";
			}

}

   public function certificate_list(){

		$booking_id = $this->uri->segment(3) ?? "";
		$data = array();
		if($booking_id!="")
		{
			$qry = "SELECT * FROM bkf_uploaded_certificate where booking_id = $booking_id AND status = 1 order by id asc";
			$data['uploaded_certificate'] = $this->Master_model->getCustom($qry);
		}

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('upload_certificate',$data);
}




	public function get_name($tbl=NULL,$col=NULL,$id=NULL)
	{
		$name = $this->Master_model->getNameById($tbl,$col,$id); 
		return $name;
	}


	public function file_upload($file_name, $tmp_name, $doc_type)
	{
		$f_name = explode(".", $file_name);
		$imgpdf_file =  $doc_type."_".time().'.'.$f_name[1];		
		$destination = 'assets/uploads/certificate/'.$imgpdf_file;
		if(move_uploaded_file($tmp_name, $destination))
		{
			return $imgpdf_file;
		}
		else
		{
			return '';
		}		
	}
}
?>