<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingApi extends CI_Controller {


	public function __construct()
	 {
		parent::__construct(); 
		 //$this->load->library("session");
		//$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('user_agent');
		//$this->load->library('upload');
		$this->load->database();
	    $this->load->model("Master_model");    
	}	 

/***--------Booking Form START---------------------------------*/	
	public function index()
	{			
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('booking');
	}
	public function ajax_client_info()
	{
		
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";


		$p_hno = $this->input->post("p_hno");
		$p_street = $this->input->post("p_street");
		$p_landmark = $this->input->post("p_landmark");
		$p_city = $this->input->post("p_city");
		$p_state = $this->input->post("p_state");
		$p_pincode = $this->input->post("p_pincode");

		$p_addr_arr = array(
			"p_hno"=>$p_hno,
			"p_street"=>$p_street,
			"p_landmark"=>$p_landmark,
			"p_city"=>$p_city,
			"p_street"=>$p_street,
			"p_state"=>$p_state,
			"p_pincode"=>$p_pincode,
		);

		$r_hno = $this->input->post("r_hno");
		$r_street = $this->input->post("r_street");
		$r_landmark = $this->input->post("r_landmark");
		$r_city = $this->input->post("r_city");
		$r_state = $this->input->post("r_state");
		$r_pincode = $this->input->post("r_pincode");

		$r_addr_arr = array(
			"r_hno"=>$r_hno,
			"r_street"=>$r_street,
			"r_landmark"=>$r_landmark,
			"r_city"=>$r_city,
			"r_street"=>$r_street,
			"r_state"=>$r_state,
			"r_pincode"=>$r_pincode,
		);

		$o_hno = $this->input->post("o_hno");
		$o_street = $this->input->post("o_street");
		$o_landmark = $this->input->post("o_landmark");
		$o_city = $this->input->post("o_city");
		$o_state = $this->input->post("o_state");
		$o_pincode = $this->input->post("o_pincode");
		
		$o_addr_arr = array(
			"o_hno"=>$o_hno,
			"o_street"=>$o_street,
			"o_landmark"=>$o_landmark,
			"o_city"=>$o_city,
			"o_street"=>$o_street,
			"o_state"=>$o_state,
			"o_pincode"=>$o_pincode,
		);

        $permanent_addr = json_encode($p_addr_arr);
		$present_addr = json_encode($r_addr_arr);
		$office_addr = json_encode($o_addr_arr);

		$frm_data = array(

			"booking_amt"=>$this->input->post("booking_amt") ?? "",
			"client_name"=>$this->input->post("client_name") ?? "",
			"spouse_name"=>$this->input->post("spouse_name") ?? "",
			"age"=>$this->input->post("age") ?? "",
			"gender"=>$this->input->post("gender") ?? "",
			"mobile_no"=>$this->input->post("mobile_no") ?? "",
			"email_id"=>$this->input->post("email_id") ?? "",
			"pan_no"=>$this->input->post("pan_no") ?? "",
			"aadhar_no"=>$this->input->post("aadhar_no") ?? "",
			"occupation"=>$this->input->post("occupation") ?? "",

			"permanent_addr"=> $permanent_addr,
			"present_addr"=> $present_addr,
			"office_addr"=>$office_addr,

			"create_date"=> date("Y-m-d H:i:s"),
			"ip" => $this->input->ip_address()
		);
		
		$res = $this->Master_model->saveData("bkf_booking_form", $frm_data);
		$booking_id= $this->db->insert_id();
		if($booking_id)
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="$booking_id" ;
		}
		echo json_encode($data);
	}

	public function ajax_decision_maker()
	{

		
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$d_hno = $this->input->post("d_hno");
		$d_street = $this->input->post("d_street");
		$d_landmark = $this->input->post("d_landmark");
		$d_city = $this->input->post("d_city");
		$d_state = $this->input->post("d_state");
		$d_pincode = $this->input->post("d_pincode");

		$d_addr_arr = array(
			"d_hno"=>$d_hno,
			"d_street"=>$d_street,
			"d_landmark"=>$d_landmark,
			"d_city"=>$d_city,
			"d_street"=>$d_street,
			"d_state"=>$d_state,
			"d_pincode"=>$d_pincode,
		);

		$d_addr_json = json_encode($d_addr_arr);

		$frm_data = array(
			"booking_id"=>$this->input->post("booking_id") ?? "",
			"d_name"=>$this->input->post("dm_name") ?? "",
			"d_relation"=>$this->input->post("d_relation") ?? "",			
			"d_mobile_no"=>$this->input->post("d_mobile_no") ?? "",
			"d_email_id"=>$this->input->post("d_email_id") ?? "",
			"d_pan_no"=>$this->input->post("d_pan_no") ?? "",
			"d_aadhar_no"=>$this->input->post("d_aadhar_no") ?? "",
			"d_addr"=>$d_addr_json,
		);

		$res = $this->Master_model->saveData("bkf_decision_maker", $frm_data);

		if($res)
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		echo json_encode($data);
	}
	
	public function ajax_client_payee()
	{

		
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";


		$p_hno = $this->input->post("p_hno");
		$p_street = $this->input->post("p_street");
		$p_landmark = $this->input->post("p_landmark");
		$p_city = $this->input->post("p_city");
		$p_state = $this->input->post("p_state");
		$p_pincode = $this->input->post("p_pincode");

		$p_addr_arr = array(

			"p_hno"=>$p_hno,
			"p_street"=>$p_street,
			"p_landmark"=>$p_landmark,
			"p_city"=>$p_city,
			"p_street"=>$p_street,
			"p_state"=>$p_state,
			"p_pincode"=>$p_pincode,
			
		);

		$p_addr_json = json_encode($p_addr_arr);

		$frm_data = array(
			"booking_id"=>$this->input->post("booking_id") ?? "",
			"payee_name"=>$this->input->post("payee_name") ?? "",
			"p_relation"=>$this->input->post("p_relation") ?? "",			
			"p_mobile_no"=>$this->input->post("p_mobile_no") ?? "",
			"p_email_id"=>$this->input->post("p_email_id") ?? "",
			"p_pan_no"=>$this->input->post("p_pan_no") ?? "",
			"p_aadhar_no"=>$this->input->post("p_aadhar_no") ?? "",
			"p_addr"=>$p_addr_json,

		);

		$res = $this->Master_model->saveData("bkf_client_payee", $frm_data);
		if($res)
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		echo json_encode($data);

	}

	public function ajax_booking_transaction()
	{
		
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

				
		$frm_data = array(

			"booking_id"=>$this->input->post("booking_id") ?? "",
			"offer_amt"=>$this->input->post("offer_amt") ?? "",			
			"quotation_type"=>$this->input->post("quotation_type") ?? "",
			"final_rate"=>$this->input->post("final_rate") ?? "",
			"final_amt"=>$this->input->post("final_amt") ?? "",
			"final_amt_in_word"=>$this->input->post("final_amt_in_word") ?? "",
			"paid_booking_amt"=>$this->input->post("paid_booking_amt") ?? "",
			"payment_mode"=>$this->input->post("payment_mode") ?? "",
			"upi_id"=>$this->input->post("upi_id") ?? "",
			"cheque_no"=> $this->input->post("cheque_no") ?? "",
			"cheque_data"=> date("Y-m-d"),
			"trans_id"=>$this->input->post("trans_id") ?? "",
			"funding_mode"=>$this->input->post("funding_mode") ?? "",			
			"self_amt"=>$this->input->post("self_amt") ?? "",
			"bank_name"=>$this->input->post("bank_name") ?? "",
			"loan_amt"=>$this->input->post("loan_amt") ?? "",
			"loan_acc_no"=>$this->input->post("loan_acc_no") ?? "",

			"create_date" => date("Y-m-d H:i:s"),
			"ip"=>$this->input->post("ip") ?? "",
		);

		$res = $this->Master_model->saveData("bkf_booking_transaction", $frm_data);

		if($res)
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		echo json_encode($data);

	}

	public function ajax_attached_document()
	{
		
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";



			$frm_arr = array();
			if($this->input->post('chk_adhar_copy') == "true")
			{
				$adhar_copy = $_FILES['adhar_copy']['name'];
				$tmp_name = $_FILES['adhar_copy']['tmp_name'];			
				$ad_c = $this->file_upload($adhar_copy, $tmp_name, 'adhar');
				if($ad_c != "")
				{
					$frm_arr['adhar_copy'] = $ad_c;
					$frm_arr['chk_adhar_copy'] = $this->input->post('chk_adhar_copy');					
				}
			}
			
			if($this->input->post('chk_pancard_copy') == "true")
			{
				$pancard_copy = $_FILES['pancard_copy']['name'];
				$tmp_name = $_FILES['pancard_copy']['tmp_name'];			
				$pan_c = $this->file_upload($pancard_copy, $tmp_name,'pan');

				if($pan_c != "")
				{
					$frm_arr['pancard_copy'] = $pan_c;
					$frm_arr['chk_pancard_copy'] = $this->input->post('chk_pancard_copy');					
				}
			}

			if($this->input->post('chk_electric_bill') == "true")
			{
				$electric_bill = $_FILES['electric_bill']['name'];
				$tmp_name = $_FILES['electric_bill']['tmp_name'];			
				$elec_c = $this->file_upload($electric_bill, $tmp_name, 'ebill');

				if($elec_c != "")
				{
					$frm_arr['electric_bill'] = $elec_c;
					$frm_arr['chk_electric_bill'] = $this->input->post('chk_electric_bill');					
				}
			}

			if($this->input->post('chk_registry_copy') == "true")
			{
				$registry_copy = $_FILES['registry_copy']['name'];
				$tmp_name = $_FILES['registry_copy']['tmp_name'];			
				$reg_c = $this->file_upload($registry_copy, $tmp_name, 'regis');

				if($reg_c != "")
				{
					$frm_arr['registry_copy'] = $reg_c;
					$frm_arr['chk_registry_copy'] = $this->input->post('chk_registry_copy');					
				}
			}

			if($this->input->post('chk_b_one_copy') == "true")
			{
				$b_one_copy = $_FILES['b_one_copy']['name'];
				$tmp_name = $_FILES['b_one_copy']['tmp_name'];			
				$bo_c = $this->file_upload($b_one_copy, $tmp_name,'b_one');

				if($bo_c != "")
				{
					$frm_arr['b_one_copy'] = $bo_c;
					$frm_arr['chk_b_one_copy'] = $this->input->post('chk_b_one_copy');					
				}
			}

			if($this->input->post('chk_khasra_map') == "true")
			{
				$khasra_map = $_FILES['khasra_map']['name'];
				$tmp_name = $_FILES['khasra_map']['tmp_name'];			
				$khs_c = $this->file_upload($khasra_map, $tmp_name,'khasra');

				if($khs_c != "")
				{
					$frm_arr['khasra_map'] = $khs_c;
					$frm_arr['chk_khasra_map'] = $this->input->post('chk_khasra_map');					
				}
			}

			if($this->input->post('chk_approved_tncp') == "true")
			{
				$approved_tncp = $_FILES['approved_tncp']['name'];
				$tmp_name = $_FILES['approved_tncp']['tmp_name'];			
				$tncp_c = $this->file_upload($approved_tncp, $tmp_name, 'tncp');

				if($tncp_c != "")
				{
					$frm_arr['approved_tncp'] = $tncp_c;
					$frm_arr['chk_approved_tncp'] = $this->input->post('chk_approved_tncp');					
				}
			}

			if($this->input->post('chk_tax_receipt') == "true")
			{
				$tax_receipt = $_FILES['tax_receipt']['name'];
				$tmp_name = $_FILES['tax_receipt']['tmp_name'];			
				$tax_c = $this->file_upload($tax_receipt, $tmp_name, 'tax');

				if($tax_c != "")
				{
					$frm_arr['tax_receipt'] = $tax_c;
					$frm_arr['chk_tax_receipt'] = $this->input->post('chk_tax_receipt');					
				}
			}

			if($this->input->post('chk_any_other') == "true")
			{
				$any_other = $_FILES['any_other']['name'];
				$tmp_name = $_FILES['any_other']['tmp_name'];			
				$oth_c = $this->file_upload($any_other, $tmp_name,'other');

				if($oth_c != "")
				{
					$frm_arr['any_other'] = $oth_c;
					$frm_arr['chk_any_other'] = $this->input->post('chk_any_other');					
				}
			}
			
			/*$frm_data1 = array(

				"adhar_copy"=>$ad_c,
				"pancard_copy"=>$pan_c,			
				"electric_bill"=>$elec_c,
				"registry_copy"=>$reg_c,
				"b_one_copy"=>$bo_c,
				"khasra_map"=>$khs_c,
				"approved_tncp"=>$tncp_c,				
				"tax_receipt"=>$tax_c,
				"any_other"=>$oth_c,		
				
				"chk_adhar_copy"=>$this->input->post('chk_adhar_copy'),
				"chk_pancard_copy"=>$this->input->post('chk_pancard_copy'),			
				"chk_electric_bill"=>$this->input->post('chk_electric_bill'),
				"chk_registry_copy"=>$this->input->post('chk_registry_copy'),
				"chk_b_one_copy"=>$this->input->post('chk_b_one_copy'),
				"chk_khasra_map"=>$this->input->post('chk_khasra_map'),
				"chk_approved_tncp"=>$this->input->post('chk_approved_tncp'),				
				"chk_tax_receipt"=>$this->input->post('chk_tax_receipt'),
				"chk_any_other"=>$this->input->post('chk_any_other'),
  
				"create_date" => date("Y-m-d H:i:s"),
				"ip"=> $this->input->ip_address(),
			); */
			$frm_arr['booking_id'] = $this->input->post("booking_id") ?? "";


			$frm_arr['create_date'] = date("Y-m-d H:i:s");
			$frm_arr['ip'] = $this->input->ip_address();

			$res = $this->Master_model->saveData("bkf_atttach_doc", $frm_arr);


		
		if($res)
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		// print_r($this->input->post());
		echo json_encode($data);

	}


	public function file_upload($file_name, $tmp_name, $doc_type)
	{

		$f_name = explode(".", $file_name);
		$imgpdf_file =  $doc_type."_".time().'.'.$f_name[1];		
		$destination = 'assets/uploads/'.$imgpdf_file;
		if(move_uploaded_file($tmp_name, $destination))
		{
			return $imgpdf_file;
		}
		else
		{
			return '';
		}
		
	}
	public function ajax_plot_details()
	{

		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";


		$frm_data = array(

			"booking_id" => $this->input->post("booking_id") ?? "",
			"plot_location" => $this->input->post("plot_location") ?? "",			
			"plot_no" => $this->input->post("plot_no") ?? "",
			"plot_size" => $this->input->post("plot_size") ?? "",
			"plot_facing" => $this->input->post("plot_facing") ?? "",
			"num_road" => $this->input->post("num_road") ?? "",
			"plot_depth"=>$this->input->post("plot_depth") ?? "",
			"create_date" => date("Y-m-d H:i:s"),
			"ip"=> $this->input->ip_address(),	
			);  
	
			$res = $this->Master_model->saveData("bkf_plot_details", $frm_data);
	
			if($res)
			{
				
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] = "";

			}
			echo json_encode($data);
			
	}
	public function ajax_attached_doc()
	{
		echo "qwertyuioplkjhfdsazxcvbnm";
	}
/***--------Booking Form END--------------------------------------*/

	public function booking_list()
	{
			$data['status'] = 'Error';
			$data['code'] = 300;
			$data['message'] ="" ;

		// $qry = "SELECT  FROM tbl_users where user_type != 1 order by user_name asc";
	   // $data['user_list'] = $this->Master_model->getCustom($qry2);

		$data['result'] = $this->Master_model->getAll("bkf_booking_form");

		// $this->load->view('header');
		// $this->load->view('top_sidebar');
		// $this->load->view('booking_list',  $data);
		if($data['result'])
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		echo json_encode($data);
	}
	
	public function loginuser()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('loginuser');
	}
}
