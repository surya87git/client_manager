<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	 {
		parent::__construct(); 
		//$this->load->library("session");
		//$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('user_agent');
		$this->load->database();
	    $this->load->model("Master_model");    
	}

	public function ajax_client_review()
	{
		$booking_id = $this->input->post("bk_id");
		$client_review = $this->input->post("client_review") ?? "";
		$chk_accept = $this->input->post("chk_accept") ?? "";
		$payment_mode = $this->input->post("payment_mode") ?? "";
		$trans_id = $this->input->post("trans_id") ?? "";
		$cheque_no = $this->input->post("cheque_no") ?? "";

		$frm_data = array(			
			"id" => $booking_id,	
			"client_review" => $client_review,
			"client_verify" => 'yes',
			"client_verify_date" => date("Y-m-d H:i:s"),
			"update_date" => date("Y-m-d H:i:s"),
		);
		
		$frm_trans = array(	
			"chk_accept" => $chk_accept,
			"payment_mode" => $payment_mode,
			"trans_id" => $trans_id,
			"cheque_no" => $cheque_no,
			"payment_date" => date("Y-m-d H:i:s"),			
			"update_date" => date("Y-m-d H:i:s")
		);

		if($booking_id != ""){
			
			$where_arr_trans = array("booking_id" => $booking_id);
			$res = $this->Master_model->updateArr("bkf_booking_transaction", $frm_trans, $where_arr_trans);		
			//echo "----->".$this->db->last_query();
			if($res){						
				$where_arr = array("id" => $booking_id);
				$res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);
			  	echo "~~~1~~~";								
			}
			else{
			  echo "~~~0~~~";
			}
		}
		else{
			echo "~~~0~~~";	
		}
	}

	public function client_review()
	{
		$encode_data = urldecode($this->uri->segment(3));
		$new_data = json_decode(base64_decode($encode_data));
		$booking_id = $new_data->id ?? "";

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $data['client_info'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_decision_maker where booking_id = $booking_id";
        $data['dec_maker'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_client_payee where booking_id = $booking_id";
        $data['payee'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_booking_transaction where booking_id = $booking_id";
        $data['trans_detail'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_plot_details where booking_id = $booking_id";
        $data['plot_detail'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_atttach_doc where booking_id = $booking_id";
        $data['attach_doc'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_commitment where booking_id = $booking_id";
		$data['commit'] = $this->Master_model->getCustom($qry);
		
		$qry = "SELECT * FROM bkf_commitment_list where id <> 0 and status = 1";
		$data['commitment_list'] = $this->Master_model->getCustom($qry);
		
		$this->load->view('client_review',$data);

	}	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	public function expired_link()
	{
		$this->load->view('header');
		$this->load->view('expired_link');	
		$this->load->view('footer');	
	}	
	public function booking_link_request()
	{
		$booking_id = $this->input->post("booking_id");
		
		$frm_data = array("link_request" => 1);			
		$where_arr = array("id" => $booking_id);
		$res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);
		
		if($res){
			echo "~~~1~~~";
		}
		else{
			echo "~~~0~~~";
		}
		
	}
}