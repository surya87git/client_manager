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
			"payable_date" => $payable_date,
			"payment_status" =>  $this->input->post("payment_status"),	
			"create_by" => $_COOKIE['employee_name'] ?? "",		
			"ip"=> $this->input->ip_address()	
		);

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

		echo $this->db->last_query();
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
		
		//print_r($this->input->post());

		$sid = $this->input->post("sid");
		$stage_id = $this->input->post("stage_id");
		$booking_id = $this->input->post("booking_id");

		$payable_amt = $this->input->post("payable_amt");		
		$total_paid_amt = $this->input->post("total_paid_amt");
		$paid_amt = $this->input->post("paid_amt");


		$refrence_no = $this->input->post("refrence_no");
		$received_as = $this->input->post("received_as");
		$received_by = $this->input->post("received_by");
		
		$frm_data = array(		
			"stage_id" => $stage_id,	
			"booking_id" => $booking_id,
			"payable_amt" => $payable_amt,			
			"paid_amt" => $paid_amt,			
			"refrence_no" => $refrence_no,
			"received_as" => $received_as,
			"refrence_no" =>  $refrence_no,	
			"create_by" => $_COOKIE['employee_name'] ?? "",		
			"ip"=> $this->input->ip_address()	
		);



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