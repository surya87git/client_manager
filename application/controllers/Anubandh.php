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
			$qry = "SELECT * FROM bkf_aggrement_column where id = $id";
			$data['row_data'] = $this->Master_model->getCustom($qry);
		}
		
		$qry = "SELECT * FROM bkf_aggrement_col_head where id <> 0 and status = 1";
		$data['col_head'] = $this->Master_model->getCustom($qry);

		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('anubandh_column', $data);
	}
	public function anubandh_column_list()
	{
		$qry = "SELECT * FROM bkf_aggrement_column where id <> 0 and status = 1 order by column_name asc";
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
			$res = $this->Master_model->updateData("bkf_aggrement_column", $frm_data);

			if($res){
			  echo "~~~2~~~";
			}
			else{
			  echo "~~~0~~~";
			}  
			
		}
		else{

			$res = $this->Master_model->saveData("bkf_aggrement_column", $frm_data);

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
	}

	public function ajax_make_anubandh(){
		
		$booking_id = $this->input->post('booking_id');
		$column = $this->input->post('column');		
		$column_encode = json_encode($column);
		$column_id = $this->input->post("column_id") ?? "";
					
		$frm_data = array(			
			"booking_id" => $this->input->post("booking_id") ?? "",
			"column_data" => $column_encode,			
			"create_date" => date("Y-m-d H:i:s"),
			"ip"=> $this->input->ip_address(),	
		  );

		  $qry = "SELECT count(id) as cnt FROM bkf_client_aggrement_column where booking_id = $booking_id";
		  $res = $this->Master_model->getCustom($qry);
		  $r_count = $res[0]->cnt;

		  if($r_count > 0){

			$where_arr = array("booking_id" => $booking_id);
			$res = $this->Master_model->updateArr("bkf_client_aggrement_column", $frm_data, $where_arr);

			if($res){
				echo "~~~2~~~";
			}
			else{
				echo "~~~0~~~";
			}  
			  
		  }
		  else{
  
			$res = $this->Master_model->saveData("bkf_client_aggrement_column", $frm_data);

			if($res){
				echo "~~~1~~~";
			}
			else{
				echo "~~~0~~~";
			}
		}
	}
	public function make_anubandh()
	{
		$data['booking_id'] = $this->uri->segment(3);
		$data['client_name'] = "Make Anubandh Column";

		$qry = "SELECT column_name FROM bkf_aggrement_column where id <> 0 and status = 1 group by column_name order by column_name asc ";
		$data['column_name'] = $this->Master_model->getCustom($qry);

		$qry = 'SELECT count(id) as cnt FROM bkf_client_aggrement_column where booking_id = 4';
		$res = $this->Master_model->getCustom($qry);
		$data['r_count'] = $res[0]->cnt;
		
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('make_anubandh', $data);
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