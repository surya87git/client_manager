<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anubandh extends CI_Controller {


	public function __construct()
	 {
		parent::__construct(); 
		 //$this->load->library("session");
		$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('user_agent');
		$this->load->database();
	    $this->load->model("Master_model");    
	}	 
	public function index()
	{		
		//$this->load->view('dashboard');
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('add_anubandh');
	}
/****-------------Anubandh Column----------------------------- */
	public function anubandh_column()
	{
		$data = array(); 
		$id =$this->uri->segment(3) ?? "";
		if($id)
		{
			$qry = "SELECT * FROM anu_aggrement_column where id = $id";
			$data['row_data'] = $this->Master_model->getCustom($qry);
		}
		
		$qry = "SELECT * FROM anul_anubandh_col_head where id <> 0 and status = 1";
		$data['col_head'] = $this->Master_model->getCustom($qry);

		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('anubandh_column', $data);
	}
	public function anubandh_column_list()
	{
		$qry = "SELECT * FROM anu_aggrement_column where id <> 0 and status = 1 order by column_name asc";
		$data['column_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('anubandh_column_list', $data);
	}
   public function ajax_anubandh_column()
	{
		//$id = $this->input->post("id");

		$frm_data = array(			
		  "column_name" => $this->input->post("column_name") ?? "",
		  "column_desc" => $this->input->post("column_desc") ?? "",			
		  "create_date" => date("Y-m-d H:i:s"),
		  "ip"=> $this->input->ip_address(),	
		);
		$column_id = $this->input->post("column_id") ?? "";
		if($column_id != ""){

			$frm_data['id'] = $column_id;
			$res = $this->Master_model->updateData("anu_aggrement_column", $frm_data);

			if($res){
			  echo "~~~2~~~";
			}
			else{
			  echo "~~~0~~~";
			}  
			
		}
		else{

			$res = $this->Master_model->saveData("anu_aggrement_column", $frm_data);

			if($res){
				echo "~~~1~~~";
			}
			else{
				echo "~~~0~~~";
			}

		}	
	}

/****-------------End Anubandh Column----------------------------- */

	public function client_booking()
	{
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('booking');
		//$this->load->view('foooter');
	}



	public function add_anubandh()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('add_anubandh');
	}
	
	public function makeanubadh()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('makeanubadh');
	}
	
	public function anubadh_agreement_list()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('anubadh_agreement_list');
	}
	public function booking_form()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('booking_form');
	}
	public function loginuser()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('loginuser');
	}
	public function anubandh_details()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('anubandh_details');
	}

}
