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

		echo $this->db->last_query();
		
    }





	public function addstagedetails(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('addstagedetails');
    }
	public function stagedetaillist(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('stagedetaillist');
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

	public function adduser(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('adduser');
    }
	
	public function userlist(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('userlist');
    }

}
?>