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


    public function addfacilitiesworktag(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('addfacilitiesworktag');
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
			$res = $this->Master_model->updateData("tbl_work_stages", $frm_data);
			if($res){
				echo "~~~2~~~$stage_id~~~";
			}
			else{
				echo "~~~0~~~";
			}  			
		}
		else{

			$frm_data['create_date'] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("tbl_work_stages", $frm_data);
			$id = $this->db->insert_id();

			if($res){
				echo "~~~1~~~$id~~~";
			}
			else{
				echo "~~~0~~~";
			}
			
		}
			
	}
	public function manage_stages(){    
		$qry = "SELECT * FROM tbl_work_stages where status = 1";
		$data['stage_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_stages', $data);
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

	public function ajax_trash()
	{					
		$id = $this->input->post('id');
		$source = $this->input->post('source');

		$frm_data = array();
		$frm_data["id"] = $id;
		$frm_data["status"] = 0;

		echo $res = $this->Master_model->updateData($source, $frm_data);		
	}

}
?>