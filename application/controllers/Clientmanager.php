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
		
		$booking_id = $this->uri->segment(3) ?? "";
		$stage_id = $this->uri->segment(4) ?? "";
		if($booking_id != "" && $stage_id != "")
		{	
			$qry = "SELECT * FROM bkf_stage_details where stage_id = $stage_id";
			$data['sdata'] = $this->Master_model->getCustom($qry)[0];
			$data['booking_id'] = $booking_id;
			$data['stage_id'] = $stage_id;			
		}

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_stage_details', $data);

    }

	public function ajax_stage_details(){

		//print_r($this->input->post());
		$booking_id = $this->input->post("booking_id");
		$stage_id = $this->input->post("stage_id");
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
			"payable_date" => $payable_date,
			"payment_status" =>  $this->input->post("payment_status"),	
			"create_by" => $_COOKIE['employee_name'] ?? "",		
			"ip"=> $this->input->ip_address()	
		);

		//$qry = "SELECT * FROM bkf_stage_details where booking_id = $booking_id";
		$qry = "SELECT * FROM bkf_stage_details where stage_id = $stage_id";
		$res = $this->Master_model->getCustom($qry);

		if($res){
			$sid = $res[0]->id;
			$frm_data['id'] = $sid;
			$frm_data['update_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_stage_details", $frm_data);
			if($res){
				echo "~~~2~~~$booking_id~~~";
			}
			else{
				echo "~~~0~~~";
			}  			
		}
		else{

			$frm_data['create_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("bkf_stage_details", $frm_data);
			$id = $this->db->insert_id();

			if($res){
				echo "~~~1~~~$id~~~";
			}
			else{
				echo "~~~0~~~";
			}			
		}

		echo $this->db->last_query();

	}

	public function stage_detail_list(){
         
		$qry = "SELECT * FROM bkf_stage_details where booking_id = 4";
		$data['stage_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('stage_detail_list', $data);
    }

	public function stagepayment(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('stagepayment');
    }

	public function viewgallery(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('viewgallery');
    }

	public function addteam(){

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('addteam');
    }
	
	public function userlist(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('userlist');
    }
	public function project_list(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('project_list');
    }
	public function manage_facilities(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_facilities');
    }

	public function manage_team(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_team');
    }

	public function get_name($tbl=NULL,$col=NULL,$id=NULL)
	{
		$name = $this->Master_model->getNameById($tbl,$col,$id); 
		return $name;
	}
}
?>