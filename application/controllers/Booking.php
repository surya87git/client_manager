<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {


	public function __construct()
	 {
		parent::__construct(); 
		$this->load->library("session");
		$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('user_agent');
		//$this->load->library('upload');
		$this->load->database();
	    $this->load->model("Master_model"); 
		
		//$this->check_login();
	}	 

	public function check_login()
	{
		if(!isset($_COOKIE['emp_id'])){
          redirect("/booking/login/");
        }

		// if (! $this->session->userdata('logged_in'))  
		// {     
		// 	redirect('/login'); // tried with & without '/'
		// }
	}
/***--------Booking Form START---------------------------------*/	
	public function index()
	{			
		if(!isset($_COOKIE['emp_id'])){
            redirect("/booking/login/");
        }

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('booking');
	}
	public function ajax_edit_client_info()
	{
		//print_r($_REQUEST);
		$booking_id = $this->input->post("booking_id");
		$type = $this->input->post("type");

		if($type == "client_info"){

			$frm_data = array(
				"client_name"=>$this->input->post("client_name") ?? "",
				"spouse_name"=>$this->input->post("spouse_name") ?? "",
				"age"=>$this->input->post("age") ?? "",
				"gender"=>$this->input->post("gender") ?? "",
				"mobile_no"=>$this->input->post("mobile_no") ?? "",
				"email_id"=>$this->input->post("email_id") ?? "",
				"pan_no"=>$this->input->post("pan_no") ?? "",
				"aadhar_no"=>$this->input->post("aadhar_no") ?? ""
				//"occupation"=>$this->input->post("occupation") ?? "",
			);	
		}
		elseif($type == "permanent_addr"){

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
			$permanent_addr = json_encode($p_addr_arr);
			$frm_data = array(
				"permanent_addr"=>$permanent_addr,
			);
		}
		elseif($type == "present_addr"){

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
			$present_addr = json_encode($r_addr_arr);
			$frm_data = array(
				"present_addr"=>$present_addr,
			);
		}
		elseif($type == "office_addr"){

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
			$office_addr = json_encode($o_addr_arr);
			$frm_data = array(
				"office_addr"=>$office_addr,
			);
		}

		if($booking_id != "")
		{			
			$frm_data["id"] = $this->input->post("booking_id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_booking_form", $frm_data);
			echo "~~~1~~~";
		}
		else
		{
		  echo "~~~0~~~";
		}

		//echo $this->db->last_query();
	}

	public function ajax_quick_booking()
	{
		$booking_id = $this->input->post("bid"); 
		$calc_id = $this->input->post("calc_id") ?? "";
		$booking_link = $this->input->post("booking_link") ?? "";
		
		$frm_data = array(
			"calc_id"=>$calc_id,
			"booking_amt"=>$this->input->post("booking_amt") ?? "",
			"client_name"=>$this->input->post("client_name") ?? "",
			"mobile_no"=>$this->input->post("mobile_no") ?? "",
			"email_id"=>$this->input->post("email_id") ?? "",
			"pan_no"=>$this->input->post("pan_no") ?? "",
			"aadhar_no"=>$this->input->post("aadhar_no") ?? "",
			"booking_link"=> $booking_link
		);
		
		if($booking_id == "")
		{		
			$current_date = date("Y-m-d H:i:s");
			$frm_data["create_by"] = $_COOKIE['employee_name'] ?? "";
			$frm_data["create_date"] = $current_date;
			$frm_data["ip"] = $this->input->ip_address();
			$res = $this->Master_model->saveData("bkf_booking_form", $frm_data);
			$last_id = $this->db->insert_id();

			$f_data = array("booking_id"=>$last_id, "booking_date"=>$current_date);
			$where_arr = array("id"=>$calc_id);
			$res = $this->Master_model->updateArr("tbl_cost_calculator_new", $f_data, $where_arr);		
			if($res){



			}
			echo "~~~1~~~".$last_id."~~~";
		}
		else
		{
			$frm_data["id"] = $this->input->post("bid");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_booking_form", $frm_data);
			echo "~~~2~~~0~~~";
		}
	}
	public function ajax_quick_transaction()
	{
		$booking_id = $this->input->post("booking_id") ?? "";
		$trans_id = $this->input->post("trans_id") ?? "";
		$frm_data = array(
			"booking_id" => $booking_id,
			"paid_booking_amt" => $this->input->post("paid_booking_amt") ?? "",
			"payment_mode" => $this->input->post("payment_mode") ?? "",		
			"trans_id" => $trans_id,
			"payment_date" => date("Y-m-d H:i:s"),
			"create_date" => date("Y-m-d H:i:s"),
			"ip" => $this->input->ip_address(),								
		);
		if($trans_id != "" && $booking_id != "")
		{
			$res = $this->Master_model->saveData("bkf_booking_transaction", $frm_data);
			$last_id = $this->db->insert_id();
			if($res)
			{
				echo "~~~1~~~".$last_id."~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}
		else
		{
			echo "~~~0~~~";
		}

	}
	public function ajax_client_info()
	{			
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
		$calc_id = $this->input->post("calc_id") ?? "";
		$frm_data = array(
			"calc_id"=> $calc_id,
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
			"office_addr"=>$office_addr
		);
		
		$booking_id = $this->input->post("bid");

		if($booking_id == "")
		{			
			$frm_data["create_by"] = $_COOKIE['employee_name'] ?? "";
			$frm_data["create_date"] = date("Y-m-d H:i:s");
			$frm_data["ip"] = $this->input->ip_address();
			$res = $this->Master_model->saveData("bkf_booking_form", $frm_data);
			$last_id = $this->db->insert_id();
			
			$f_data = array("booking_id"=>$last_id, "booking_date"=>$current_date);
			$where_arr = array("id"=>$calc_id);
			$res = $this->Master_model->updateArr("tbl_cost_calculator_new", $f_data, $where_arr);

			echo "~~~1~~~".$last_id."~~~";
		}
		else
		{
			$frm_data["id"] = $this->input->post("bid");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_booking_form", $frm_data);
			echo "~~~2~~~0~~~";
		}

		//echo $this->db->last_query();

	}

	public function ajax_decision_maker()
	{

		$dec_id = $this->input->post("dec_id") ?? "";
		$booking_id = $this->input->post("booking_id") ?? "";

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
			"booking_id"=>$booking_id,
			"d_name"=>$this->input->post("d_name") ?? "",
			"d_relation"=>$this->input->post("d_relation") ?? "",			
			"d_mobile_no"=>$this->input->post("d_mobile_no") ?? "",
			"d_email_id"=>$this->input->post("d_email_id") ?? "",
			"d_pan_no"=>$this->input->post("d_pan_no") ?? "",
			"d_aadhar_no"=>$this->input->post("d_aadhar_no") ?? "",
			"d_addr"=>$d_addr_json,
		);

		if($dec_id != "" && $booking_id != "")	
		{
			$frm_data["id"] = $this->input->post("dec_id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_decision_maker", $frm_data);
			if($res)
			{
				echo "~~~2~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}
		else
		{
			$frm_data["create_date"] = date("Y-m-d H:i:s");
			$frm_data["ip"] = $this->input->ip_address();
			$res = $this->Master_model->saveData("bkf_decision_maker", $frm_data);
			$last_id = $this->db->insert_id();
			if($res)
			{
				echo "~~~1~~~".$last_id."~~~";
			}
			else
			{
				echo "~~~0~~~";
			}			
		}		
		echo $this->db->last_query();
	}

	public function ajax_client_payee()
	{		
		$booking_id = $this->input->post("booking_id") ?? "";
		$payee_id = $this->input->post("payee_id") ?? "";
		
		$p_hno = $this->input->post("payee_hno");
		$p_street = $this->input->post("payee_street");
		$p_landmark = $this->input->post("payee_landmark");
		$p_city = $this->input->post("payee_city");
		$p_state = $this->input->post("payee_state");
		$p_pincode = $this->input->post("payee_pincode");

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
			"booking_id" => $booking_id,
			"payee_name" => $this->input->post("payee_name") ?? "",
			"p_relation" => $this->input->post("payee_relation") ?? "",			
			"p_mobile_no" => $this->input->post("payee_mobile_no") ?? "",
			"p_email_id" => $this->input->post("payee_email_id") ?? "",
			"p_pan_no" => $this->input->post("payee_pan_no") ?? "",
			"p_aadhar_no" => $this->input->post("payee_aadhar_no") ?? "",
			"p_addr" => $p_addr_json,			
		);

		if($payee_id != "" && $booking_id != "")
		{
			$frm_data["id"] = $this->input->post("payee_id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_client_payee", $frm_data);
			if($res)
			{
				echo "~~~2~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}
		else
		{
			$frm_data["create_date"] = date("Y-m-d H:i:s");
			$frm_data["ip"] = $this->input->ip_address();
			$res = $this->Master_model->saveData("bkf_client_payee", $frm_data);
			$last_id = $this->db->insert_id();
			if($res)
			{
				echo "~~~1~~~".$last_id."~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}

		//echo $this->db->last_query();
	}
	public function ajax_booking_transaction()
	{		
		$booking_id = $this->input->post("booking_id") ?? "";
		$trans_id = $this->input->post("trans_id") ?? "";
		$cheque_data = $this->input->post("cheque_data") ?? "";
		if($cheque_data != ""){
			$cheque_data = date("Y-m-d", strtotime($cheque_data));
		}
		
		$frm_data = array(

			"booking_id" => $this->input->post("booking_id") ?? "",
			"offer_amt" => $this->input->post("offer_amt") ?? "",			
			"quotation_type" => $this->input->post("quotation_type") ?? "",
			"final_rate" => $this->input->post("final_rate") ?? "",
			"final_amt" => $this->input->post("final_amt") ?? "",
			"final_amt_in_word" => $this->input->post("final_amt_in_word") ?? "",
			"paid_booking_amt" => $this->input->post("paid_booking_amt") ?? "",
			"payment_mode" => $this->input->post("payment_mode") ?? "",
			"upi_id" => $this->input->post("upi_id") ?? "",
			"cheque_no"=> $this->input->post("cheque_no") ?? "",
			"cheque_data" => $cheque_data,
			"trans_id" => $this->input->post("trans_id") ?? "",
			"funding_mode" => $this->input->post("funding_mode") ?? "",			
			"self_amt" => $this->input->post("self_amt") ?? "",
			"bank_name" => $this->input->post("bank_name") ?? "",
			"loan_amt" => $this->input->post("loan_amt") ?? "",
			"loan_acc_no" => $this->input->post("loan_acc_no") ?? ""
		);

	if($trans_id != "" && $booking_id != "")
		{
			$frm_data["id"] = $this->input->post("trans_id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_booking_transaction", $frm_data);
			if($res)
			{
				echo "~~~2~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}
		else
		{
			$frm_data["create_date"] = date("Y-m-d H:i:s");
			$frm_data["ip"] = $this->input->ip_address();

			$res = $this->Master_model->saveData("bkf_booking_transaction", $frm_data);
			$last_id = $this->db->insert_id();
			if($res)
			{
				echo "~~~1~~~".$last_id."~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}		

		echo $this->db->last_query();

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

	public function ajax_edit_plot()
	{
		$booking_id = $this->input->post("booking_id") ?? "";
		$plot_id = $this->input->post("plot_id") ?? "";

		$frm_data = array(
						
			"booking_id" => $this->input->post("booking_id") ?? "",
			"plot_location" => $this->input->post("plot_location") ?? "",			
			"plot_no" => $this->input->post("plot_no") ?? "",
			"plot_size" => $this->input->post("plot_size") ?? "",
			"plot_facing" => $this->input->post("plot_facing") ?? "",
			"num_road" => $this->input->post("num_road") ?? "",
			"plot_depth"=>$this->input->post("plot_depth") ?? ""
				
		);  

		if($plot_id != "" && $booking_id != "")
		{
			$frm_data["id"] = $this->input->post("plot_id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");

			$res = $this->Master_model->updateData("bkf_plot_details", $frm_data);
			if($res)
			{
				echo "~~~2~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}
		else
		{
			$frm_data["create_date"] = date("Y-m-d H:i:s");
			$frm_data["ip"] = $this->input->ip_address();

			$res = $this->Master_model->saveData("bkf_plot_details", $frm_data);
			$last_id = $this->db->insert_id();
			if($res)
			{
				echo "~~~1~~~".$last_id."~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}		

		//echo $this->db->last_query();
		
	}

	public function ajax_edit_doc()
	{
		$booking_id = $this->input->post("booking_id") ?? "";
		$attached_id = $this->input->post("attached_id") ?? "";
		
		$frm_arr = array();
		if($this->input->post('chk_adhar_copy') == "yes")
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
		
		if($this->input->post('chk_pancard_copy') == "yes")
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
		if($this->input->post('chk_electric_bill') == "yes")
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

		if($this->input->post('chk_registry_copy') == "yes")
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

		if($this->input->post('chk_b_one_copy') == "yes")
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

		if($this->input->post('chk_khasra_map') == "yes")
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

		if($this->input->post('chk_approved_tncp') == "yes")
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

		if($this->input->post('chk_tax_receipt') == "yes")
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

		if($this->input->post('chk_any_other') == "yes")
		{
			$any_other = $_FILES['any_other']['name'];
			$tmp_name = $_FILES['any_other']['tmp_name'];			
			$oth_c = $this->file_upload($any_other, $tmp_name,'other');

			if($oth_c != "")
			{
				$frm_arr['any_other'] = $oth_c;
				$frm_arr['chk_any_other'] = $this->input->post('chk_any_other');
				$frm_arr['other_name'] = $this->input->post('other_name');					
			}
		}

		if($attached_id != "" && $booking_id != "")
		{
			//$frm_arr["attached_id"] = $this->input->post("attached_id");
		
			$frm_arr["id"] = $this->input->post("attached_id");
			$frm_arr["update_date"] = date("Y-m-d H:i:s");

			$res = $this->Master_model->updateData("bkf_atttach_doc", $frm_arr);
			if($res)
			{
				echo "~~~2~~~";
			}
			else
			{
				echo "~~~0~~~";
			}
		}
		else
		{
			$frm_arr["booking_id"] = $this->input->post("booking_id");
			$frm_arr["create_date"] = date("Y-m-d H:i:s");
			$frm_arr["ip"] = $this->input->ip_address();

			$res = $this->Master_model->saveData("bkf_atttach_doc", $frm_arr);
			$last_id = $this->db->insert_id();

			if($res)
			{
				echo "~~~1~~~".$last_id."~~~";
			}
			else
			{
				echo "~~~0~~~";
			}

		}	
		//echo $this->db->last_query();	
	}

	public function ajax_plot_details()
	{			
		$booking_id = $this->input->post("booking_id") ?? "";
		
		if($this->input->post("hdn_submit"))
		{
			$frm_arr = array();
			if($this->input->post('chk_adhar_copy') == "yes")
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
			
			if($this->input->post('chk_pancard_copy') == "yes")
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

			if($this->input->post('chk_electric_bill') == "yes")
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

			if($this->input->post('chk_registry_copy') == "yes")
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

			if($this->input->post('chk_b_one_copy') == "yes")
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

			if($this->input->post('chk_khasra_map') == "yes")
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

			if($this->input->post('chk_approved_tncp') == "yes")
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

			if($this->input->post('chk_tax_receipt') == "yes")
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

			if($this->input->post('chk_any_other') == "yes")
			{
				$any_other = $_FILES['any_other']['name'];
				$tmp_name = $_FILES['any_other']['tmp_name'];			
				$oth_c = $this->file_upload($any_other, $tmp_name,'other');
				if($oth_c != "")
				{
					$frm_arr['any_other'] = $oth_c;
					$frm_arr['chk_any_other'] = $this->input->post('chk_any_other');
					$frm_arr['other_name'] = $this->input->post('other_name');					
				}
			}
			
			$qry = "SELECT count(*) as cnt_total FROM bkf_atttach_doc where booking_id = $booking_id";
			$res = $this->Master_model->getCustom($qry);
			$attached_cnt = $res[0]->cnt_total;

			if($attached_cnt > 0)
			{

				$frm_arr['id'] = $this->input->post("attached_id") ?? "";
				$res = $this->Master_model->updateData("bkf_atttach_doc", $frm_arr);

				if($res)
				{
					echo "~~~2~~~";
				}
				else
				{
					echo "~~~0~~~";
				}

			}else{
				
				$frm_arr['booking_id'] = $booking_id;
				$res = $this->Master_model->saveData("bkf_atttach_doc", $frm_arr);
				$last_id = $this->db->insert_id();

				if($res)
				{
					echo "~~~1~~~".$last_id."~~~doc~~~";
				}
				else
				{
					echo "~~~0~~~";
				}
			}			

		}else{

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

			$plot_id = $this->input->post("plot_id");
			if($plot_id != "" && $booking_id != "")
			{
				
				$frm_data["id"] = $plot_id;
				$frm_data["update_date"] = date("Y-m-d H:i:s");
				$res = $this->Master_model->updateData("bkf_plot_details", $frm_data);

				if($res)
				{
					echo "~~~2~~~";
				}
				else
				{
					echo "~~~0~~~";
				}
			}
			else
			{
				$res = $this->Master_model->saveData("bkf_plot_details", $frm_data);
				$last_id = $this->db->insert_id();
				if($res)
				{
					echo "~~~1~~~".$last_id."~~~plot~~~";
				}
				else
				{
					echo "~~~0~~~";
				}
			}
		}	
		//echo $this->db->last_query();			
	}

/***--------Booking Form END--------------------------------------*/

	public function booking_list()
	{
		if(!isset($_COOKIE['emp_id'])){
            redirect("/booking/login/");
        }

		$data['booking_list'] = $this->Master_model->getAll("bkf_booking_form");
		
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('booking_list',  $data);
	}

	public function booking_details()
	{
		if(!isset($_COOKIE['emp_id'])){
            redirect("/booking/login/");
        }
		else{
			$data['emp_id'] = $_COOKIE['emp_id'] ?? "";
			$data['emp_name'] = $_COOKIE['employee_name'] ?? "";
			$data['emp_type'] = $_COOKIE['emp_type'] ?? "";
		}

		$booking_id = $this->uri->segment(3);

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $data['client_info'] = $this->Master_model->getCustom($qry);
	
		//echo $this->db->last_query();

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

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('booking_details',  $data);

	}

	public function ajax_client_data()
	{				
		$client_mob = $this->input->post("client_mob");
		if($client_mob != "")
		{
			$qry = "SELECT *, DATE_FORMAT(create_date,'%d %M %Y, %h:%i:%s %p') AS create_date FROM tbl_cost_calculator_new where client_mob = $client_mob ORDER BY id desc";
			$calc_list = $this->Master_model->getCustom($qry);
			$html = "";
			if($calc_list)
			{
				echo json_encode($calc_list, true);
			}
			else
			{
				echo "2";
			}
		}
		else
		{
			echo "0";
		}
	}

	public function ajax_client_full()
	{
		$client_id = $this->input->post("client_id");

		if($client_id != "")
		{
			$qry = "SELECT * FROM tbl_cost_calculator_new where id = $client_id";
			$calc_list = $this->Master_model->getCustom($qry);
				
			if($calc_list)
			{
				echo json_encode($calc_list);
			}
			else
			{
				echo "2";
			}

		}
		else
		{
			echo "0";
		}
	}

	public function ajax_commitment()
	{
		
		$frm_data = array(			
			"commitment" => $this->input->post("commitment"),			
			"create_date" => date("Y-m-d H:i:s"),
			"ip"=> $this->input->ip_address(),	
		);

		$cid = $this->input->post("cid");
		if($cid != ""){

			$frm_data['id'] = $cid;
			$res = $this->Master_model->updateData("bkf_commitment_list", $frm_data);

			if($res){
				echo "~~~2~~~";
			}
			else{
				echo "~~~0~~~";
			}  
			
		}
		else{

			$res = $this->Master_model->saveData("bkf_commitment_list", $frm_data);
		
			if($res){
				echo "~~~1~~~";
			}
			else{
				echo "~~~0~~~";
			}
			
		}
	
		//echo $this->db->last_query();
	 ///$last_id = $this->db->insert_id();

	}

	public function manage_commitment()
	{
		if(!isset($_COOKIE['emp_id'])){
            redirect("/booking/login/");
        }
		
		$qry = "SELECT * FROM bkf_commitment_list where id <> 0 and status = 1";
		$data['commitment_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('manage_commitment', $data);
	}

	public function ajax_add_commitment()
	{
		$commit_arr = $this->input->post("chk_commitment");
		$commit_str = implode(",", $commit_arr);

		$aggr_period = $this->input->post("aggr_period");
		$aggr_period = date("Y-m-d", strtotime($aggr_period));

		$comp_period = $this->input->post("comp_period");
		$comp_period = date("Y-m-d", strtotime($comp_period));
		
		$work_start_on = $this->input->post("work_start_on");
		$work_start_on = date("Y-m-d", strtotime($work_start_on));

		$est_cost = $this->input->post("est_cost");
		$sba = $this->input->post("sba");
		
		$booking_id = $this->input->post("booking_id");
		$frm_data = array(			
			"booking_id" => $booking_id,
			"commitment" => $commit_str,
			"aggr_period" => $aggr_period,
			"comp_period" => $comp_period,
			"work_start_on" => $work_start_on,			
			"sba" => $sba,
			"est_cost" => $est_cost,
			"create_date" => date("Y-m-d H:i:s"),
			"ip"=> $this->input->ip_address(),	
		);

		$qry = "SELECT count(*) as cnt FROM bkf_commitment where booking_id = $booking_id";
		$res = $this->Master_model->getCustom($qry);
		$cnt = $res[0]->cnt;
		if($cnt > 0){

			$where_arr = array("booking_id" => $booking_id);
			$res = $this->Master_model->updateArr("bkf_commitment", $frm_data, $where_arr);	
			if($res){
				echo "~~~2~~~";
			}
			else{
				echo "~~~0~~~";
			}

		}
		else{

			$res = $this->Master_model->saveData("bkf_commitment", $frm_data);
			
			if($res){
				echo "~~~1~~~";
			}
			else{
				echo "~~~0~~~";
			}
		}
		
		//echo $this->db->last_query();

	}
	public function add_commitment()
	{
		//$data['commitment_list'] = $this->Master_model->getAll("bkf_commitment_list");
		$booking_id = $this->uri->segment(3);

		$qry = "SELECT * FROM bkf_commitment where booking_id = $booking_id";
		$data['commit'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_commitment_list where id <> 0 and status = 1";
		$data['commitment_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('add_commitment', $data);
	}

	public function ajax_booking_verify()
	{
		$booking_id = $this->input->post('booking_id') ?? "";
		$verify = $this->input->post('verify') ?? "";
		$type = $this->input->post('type') ?? "";
		
		if($verify == "yes"){
			$curr_date = date("Y-m-d H:i:s");
			$verify_by = $_COOKIE['employee_name'] ?? "";
		}
		else{
			$curr_date = NULL;
			$verify_by = "";
		}

		$frm_data = array(			
		  "id" => $booking_id,				
		  "update_date" => date("Y-m-d H:i:s"),
		);

		if($type == "marketing"){
		  $frm_data['marketing_verify'] = $verify;
		  $frm_data['marketing_verify_date'] = $curr_date;
		}
		elseif($type == "client"){
		  $frm_data['client_verify'] = $verify;
		  $frm_data['client_verify_date'] = $curr_date;
		}
		elseif($type == "admin"){			
		  $frm_data['admin_verify'] = $verify;
		  $frm_data['admin_verify_date'] = $curr_date;

		 if($verify == "yes"){
			$this->generate_booking_pdf($booking_id);
		  }

		}
		elseif($type == "trans"){
			$frm_data['trans_verify'] = $verify;

			$frm_data['trans_verify_by'] = $verify_by;
			$frm_data['trans_verify_date'] = $curr_date;
		}

		$res = $this->Master_model->updateData("bkf_booking_form", $frm_data);
		
		if($res){
			$v_date = date("d M, Y H:i:s");
			echo "~~~1~~~".$v_date."~~~".$verify_by."~~~";
		}
		else{
			echo "~~~0~~~";
		}
		
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


	public function ajax_truncate()
	{					
		$id = $this->input->post('id');
		$source = $this->input->post('source');

		$frm_data = array();
		$frm_data["id"] = $id;
		$frm_data["status"] = 0;

		echo $data = $this->Master_model->delData($source, $id);	
		
		//echo $res = $this->Master_model->updateData("bkf_booking_form", $frm_data);	
	}

	public function ajax_login_user()
	{

			$msg_login = "";		
          //if($this->input->post("submit"))
           // {
                //setcookie("myCookie",'exampleUserName',time()+31556926 ,'/');
                //$exp_time=time()+60*60*24*30;
                
                $exp_time=time()+31556926;
                
                $user_email = $this->input->post("user_email");
                $user_pass = $this->input->post("user_pass");

                $sql = "SELECT * FROM employee_master WHERE status <> 0 and email = '$user_email' and password = '$user_pass'";
                $res = $this->Master_model->getCustom($sql);
                 
                if($res)
                {
                    $emp_id = $res[0]->id;
                    $employee_name = $res[0]->employee_name;
                    $emp_type = $res[0]->emp_type;

                    setcookie("emp_id",$emp_id,$exp_time);
                    setcookie("employee_name",$employee_name,$exp_time);
                    setcookie("emp_type",$emp_type,$exp_time);

                    echo "~~~1~~~Successfully login~~~";
                    //redirect("/booking");
                }
                else
                {
                   echo "~~~0~~~Invalid user id or password~~~";
                }

	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}
    public function logout()
    {   
        $exp_time=time()-60*60*24*30;
        setcookie("emp_id","",$exp_time);
        setcookie("employee_name","",$exp_time);
        setcookie("emp_type","",$exp_time);

        delete_cookie("emp_id", "localhost", "/cost_calc/index.php/booking", "");
        delete_cookie("employee_name", "localhost", "/cost_calc/index.php/booking", "");
        delete_cookie("emp_type", "localhost", "/cost_calc/index.php/booking", "");
        
        redirect("/booking/login/");
        
    }
	public function loginuser()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('loginuser');
	}


/**--------------------------- */

public function client_booking_pdf()
	{
		$booking_id = $this->uri->segment(3);

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

		$calcId = $data['client_info'][0]->calc_id;
		$qry = "SELECT * FROM tbl_cost_calculator_new WHERE id = $calcId";
        $data['work_area'] = $this->Master_model->getCustom($qry);

		$qry = "SELECT * FROM bkf_commitment where booking_id = $booking_id";
        $data['commitment'] = $this->Master_model->getCustom($qry);

    //    echo $data['attach_doc'][0]->chk_adhar_copy;
	// 	echo '<pre>';

    //     print_r($data['attach_doc']);
    //    	$file_name = $data['client_info'][0]->mobile_no.'_'.time().'.pdf';
	// 	exit;

		$file_name = "UKC-".$booking_id.'-'.time().'.pdf';
		
		$frm_data = array();
		$frm_data['booking_file'] = $file_name;

		$where_arr = array("id" => $booking_id);		
		$res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);	
       
    	require_once __DIR__ . '/vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();

        $mpdf->WriteHTML($this->load->view('client_booking_pdf',$data,true));
         //$mpdf->AutoPrint(true);
		
		 // $mpdf->SetJS('this.print();');
		// $mpdf->IncludeJS("print();");
		//$mpdf->Output(); //opens in browser
		//$mpdf->Output($file_name,'D'); // it downloads the file into the user system, with give name 
	   //$mpdf->Output('assets/booking_file/'.$file_name,'F');
	   $mpdf->Output($file_name,'D');

	}

/**----------------------------------*/

public function generate_booking_pdf($booking_id)
	{
		//$booking_id = $this->uri->segment(3);

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

		$calcId = $data['client_info'][0]->calc_id;
		$qry = "SELECT * FROM tbl_cost_calculator_new WHERE id = $calcId";
        $data['work_area'] = $this->Master_model->getCustom($qry);
       
		$file_name = "UKC-".$booking_id.'-'.time().'.pdf';
		
		$frm_data = array();
		$frm_data['booking_file'] = $file_name;

		$where_arr = array("id" => $booking_id);		
		$res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);	
       
    	require_once __DIR__ . '/vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($this->load->view('client_booking_pdf',$data,true));
        
	    if($mpdf->Output('assets/booking_file/'.$file_name,'F'))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	   
		//$mpdf->Output($file_name,'D');

	}

	public function booking_list_2()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('booking_list_2');
	}




}
