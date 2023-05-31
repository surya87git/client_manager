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

	public function login()
	{
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$email 		= $this->input->post("email");
		$password 	= $this->input->post("password");

		$qry = "SELECT * FROM employee_master WHERE email = '".$email."' AND password  = '".$password."'";

		$result = $this->Master_model->getCustom($qry);

		if($result)
		{
			$data['status']  = 'Successfully';
			$data['code'] 	 = 200;
			$data['message'] = $result[0]->id;
		}else
		{
			$data['message'] = "Please check Email or Password";
		}
		echo json_encode($data);
	} 

/***--------Booking Form START---------------------------------*/

	public function index()
	{
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('booking');
	}

/***--------Start Client info --------------------------------------*/
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
				"create_by"=>$this->input->post("create_by") ?? "",

				"permanent_addr"=> $permanent_addr,
				"present_addr"=> $present_addr,
				"office_addr"=>$office_addr,

				"create_date"=> date("Y-m-d H:i:s"),
				"ip" => $this->input->ip_address()
			);


			$booking_id = $this->input->post("bid") ?? "";




			if($booking_id == "" )
			{

				$mobile = $this->input->post("mobile_no");
				$sql = "SELECT * FROM `bkf_booking_form` WHERE mobile_no =  $mobile";
				$res = $this->Master_model->getCustom($sql);

				if(!$res)
				{			
					$res = $this->Master_model->saveData("bkf_booking_form", $frm_data);
					$booking_id= $this->db->insert_id();
					if($booking_id)
					{
						$data['status'] = 'Successfully';
						$data['code'] = 200;
						$data['message'] ="$booking_id" ;


					}
				}else {
						// echo 'else';
								$data['status'] = 'Already Exist';
								$data['code'] = 202;
								$data['message'] ="" ;

					}

			}else
			{
				$frm_data["id"] = $this->input->post("bid");
				$frm_data["update_date"] = date("Y-m-d H:i:s");
				$res = $this->Master_model->updateData("bkf_booking_form", $frm_data);
				
				$data['status'] = 'Successfully Updated';
				$data['code'] = 201;
			}
		
		
		echo json_encode($data);

	}
/***--------End Client info --------------------------------------*/
/***--------Start Decision Maker --------------------------------------*/

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
			"create_by"=>$this->input->post("create_by") ?? "",
			"d_addr"=>$d_addr_json,
		);

		$booking_id = $this->input->post("id") ?? "";
		if($booking_id == "")
		{
			$res = $this->Master_model->saveData("bkf_decision_maker", $frm_data);

			if($res)
			{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;
			}
		}else
		{
			$frm_data["id"] = $this->input->post("id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_decision_maker", $frm_data);
			
			$data['status'] = 'Successfully Updated';
			$data['code'] = 201;
		}
		echo json_encode($data);
	}
/***--------End Decision Maker --------------------------------------*/
/***--------Start Client Payee --------------------------------------*/
	
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
			"create_by"=>$this->input->post("create_by") ?? "",
			"p_addr"=>$p_addr_json,

		);		

		$booking_id = $this->input->post("id") ?? "";

		if($booking_id == "")
		{
			$res = $this->Master_model->saveData("bkf_client_payee", $frm_data);
			if($res)
			{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;
			}

		}else
		{
			$frm_data["id"] = $this->input->post("id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_client_payee", $frm_data);

			$data['status'] = 'Successfully Updated';
			$data['code'] = 201;
		}
		echo json_encode($data);
	}
/***--------End Client Payee --------------------------------------*/
/***--------Start Booking Transaction --------------------------------------*/

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
			// "upi_id"=>$this->input->post("upi_id") ?? "",
			// "cheque_no"=> $this->input->post("cheque_no") ?? "",
			// "cheque_data"=> date("Y-m-d"),
			"payment_link"=>$this->input->post("payment_link") ?? "",
			"funding_mode"=>$this->input->post("funding_mode") ?? "",			
			"self_amt"=>$this->input->post("self_amt") ?? "",
			"bank_name"=>$this->input->post("bank_name") ?? "",
			"loan_amt"=>$this->input->post("loan_amt") ?? "",
			"loan_acc_no"=>$this->input->post("loan_acc_no") ?? "",

			"create_by"=>$this->input->post("create_by") ?? "",

			"create_date" => date("Y-m-d H:i:s"),
			"ip"=>$this->input->post("ip") ?? "",
		);



		$booking_id = $this->input->post("id") ?? "";

		if($booking_id == "")
		{

			$res = $this->Master_model->saveData("bkf_booking_transaction", $frm_data);
			if($res)
			{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;
			}

		}else
		{
			$frm_data["id"] = $this->input->post("id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_booking_transaction", $frm_data);
			
			$data['status'] = 'Successfully Updated';
			$data['code'] = 201;
		}

		echo json_encode($data);
	}
/***--------End Booking Transaction--------------------------------------*/
/***--------Start Attached Document --------------------------------------*/

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
					$frm_arr['chk_adhar_copy'] = "yes";					
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
					$frm_arr['chk_pancard_copy'] = "yes";					
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
					$frm_arr['chk_electric_bill'] = "yes";					
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
					$frm_arr['chk_registry_copy'] = "yes";					
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
					$frm_arr['chk_b_one_copy'] = "yes";					
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
					$frm_arr['chk_khasra_map'] = "yes";					
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
					$frm_arr['chk_approved_tncp'] = "yes";					
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
					$frm_arr['chk_tax_receipt'] = "yes";					
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
					$frm_arr['chk_any_other'] = "yes";	
					$frm_arr['other_name'] = $this->input->post('other_name');					
				}
			}
			
			
			$frm_arr['booking_id'] = $this->input->post("booking_id") ?? "";

			$frm_arr["create_by"]= $this->input->post("create_by") ?? "";


			$frm_arr['create_date'] = date("Y-m-d H:i:s");
			$frm_arr['ip'] = $this->input->ip_address();

		// print_r($this->input->post());




		
		$booking_id = $this->input->post("id") ?? "";

		if($booking_id == "")
		{

			$res = $this->Master_model->saveData("bkf_atttach_doc", $frm_arr);	
			if($res)
			{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;
			}
		}else
		{
			$frm_arr["id"] = $this->input->post("id");
			$frm_arr["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateData("bkf_atttach_doc", $frm_arr);
			// $data['message'] =$this->db->last_query();
			
			$data['status'] = 'Successfully Updated';
			$data['code'] = 201;
		}



		echo json_encode($data);
	}
/***--------End Attached Document --------------------------------------*/
/***--------Start File Upload --------------------------------------*/


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
/***--------End File Upload  --------------------------------------*/
/***--------Start Plot Details --------------------------------------*/

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
			"create_by"=>$this->input->post("create_by") ?? "",
			"create_date" => date("Y-m-d H:i:s"),
			"ip"=> $this->input->ip_address(),	
			);  
	


				
			$booking_id = $this->input->post("id") ?? "";

			if($booking_id == "")
			{
					$res = $this->Master_model->saveData("bkf_plot_details", $frm_data);
					if($res)
					{
						$data['status'] = 'Successfully';
						$data['code'] = 200;
						$data['message'] = "";
					}

			}else
			{
				$frm_data["id"] = $this->input->post("id");
				$frm_data["update_date"] = date("Y-m-d H:i:s");
				$res = $this->Master_model->updateData("bkf_plot_details", $frm_data);
				
				$data['status'] = 'Successfully Updated';
				$data['code'] = 201;
			}


			echo json_encode($data);			
	}
/***--------End Plot Details --------------------------------------*/
/***--------Start ajax_attached_doc --------------------------------------*/

	public function ajax_attached_doc()
	{
		echo "qwertyuioplkjhfdsazxcvbnm";
	}

/***--------End ajax_attached_doc --------------------------------------*/

/***--------Booking Form END---------------------------------*/

/***--------Start Decision Maker --------------------------------------*/
	public function booking_list()
	{
			$data['status'] = 'Error';
			$data['code'] = 300;
			$data['message'] ="" ;

		 $qry = "SELECT bkf_booking_form.*,bkf_booking_transaction.`final_amt` FROM bkf_booking_form LEFT JOIN `bkf_booking_transaction`  ON  bkf_booking_form.id = bkf_booking_transaction.`booking_id` ORDER BY bkf_booking_form.id DESC";

		$data['result'] = $this->Master_model->getCustom($qry);

		if($data['result'])
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		echo json_encode($data);
	}
/***--------End Booking  List --------------------------------------*/
/***--------Start Booking Details--------------------------------------*/

	public function booking_details()
	{
		$data['status'] = "Successfully"; 
		$data['code']=200;


		$booking_id = $this->uri->segment(3);

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $data['result']['client_info'] = $this->Master_model->getCustom($qry)[0];

		$qry = "SELECT * FROM bkf_decision_maker where booking_id = $booking_id";
        $data['result']['dec_maker'] = $this->Master_model->getCustom($qry)[0];

		$qry = "SELECT * FROM bkf_client_payee where booking_id = $booking_id";
        $data['result']['payee'] = $this->Master_model->getCustom($qry)[0];

		$qry = "SELECT * FROM bkf_booking_transaction where booking_id = $booking_id";
        $data['result']['trans_detail'] = $this->Master_model->getCustom($qry)[0];

		$qry = "SELECT * FROM bkf_plot_details where booking_id = $booking_id";
        $data['result']['plot_detail'] = $this->Master_model->getCustom($qry)[0];

		$qry = "SELECT * FROM bkf_atttach_doc where booking_id = $booking_id";
        $data['result']['attach_doc'] = $this->Master_model->getCustom($qry)[0];

		echo json_encode($data);
	}	
/***--------End Booking Details --------------------------------------*/
/***--------Start Login User --------------------------------------*/
	public function loginuser()
	{
		$this->load->view('new_header/header');
		$this->load->view('top_sidebar');
		$this->load->view('loginuser');
	}
/***--------End Login User --------------------------------------*/
/***--------Start Commitment List--------------------------------------*/

	public function commitment_list()
	{

			$data['status'] = 'Error';
			$data['code'] = 300;
			$data['message'] ="" ;

		$qry = "SELECT * FROM bkf_commitment_list ";
        $data['result']= $this->Master_model->getCustom($qry);
        
		if($data['result'])
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}

		echo json_encode($data);
	}
/***--------End Commitment List--------------------------------------*/
/***--------Start Add Commitment --------------------------------------*/

	public function addCommitment()
	{
		
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$aggr_period = $this->input->post('aggr_period');
		$aggr_period = date('Y-m-d',strtotime($aggr_period));

		$comp_period = $this->input->post('comp_period');
		$comp_period = date('Y-m-d',strtotime($comp_period));

		$work_start_on = $this->input->post('work_start_on');
		$work_start_on = date('Y-m-d',strtotime($work_start_on));

		$frm_data = array(
						'booking_id'=>$this->input->post('booking_id'),
						'commitment'=>$this->input->post('commitment'),
						'aggr_period'=>$aggr_period,
						'comp_period'=>$comp_period,
						'work_start_on'=>$work_start_on,
						'sba'=>$this->input->post('sba'),
						'est_cost'=>$this->input->post('est_cost'),
					);
		$booking_id = $this->input->post('booking_id');
		$qry = "SELECT * FROM bkf_commitment where booking_id = $booking_id";

		$da = $this->Master_model->getCustom($qry);


		if(!$da)
		{

			$frm_data["create_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->saveData("bkf_commitment", $frm_data);
			if($res)
			{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] = "";
			}

		}else
		{

			$where_arr["booking_id"] = $this->input->post("booking_id");
			$frm_data["update_date"] = date("Y-m-d H:i:s");
			$res = $this->Master_model->updateArr("bkf_commitment", $frm_data,$where_arr);
			
			$data['status'] = 'Successfully Updated';
			$data['code'] = 201;

		}

		echo json_encode($data);
	}

/***--------End Add Commitment --------------------------------------*/
/***--------Start Get Commitment --------------------------------------*/
	public function getCommit()
	{
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$booking_id=$this->input->post('booking_id');

		 $qry = "SELECT * FROM bkf_commitment where booking_id = $booking_id";

		$data['result'] = $this->Master_model->getCustom($qry);

		if($data['result'])
		{
			$data['status'] = 'Successfully';
			$data['code'] = 200;
			$data['message'] ="" ;
		}
		echo json_encode($data);
	}
/***--------End Get Commitment--------------------------------------*/
/***--------Start Dashboard--------------------------------------*/

	public function dashboard()
	{
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$id = $this->input->post("id");

		$qry = "SELECT SUM(booking_amt) AS bamt , COUNT(id) AS bkng_total  FROM `bkf_booking_form` WHERE `admin_verify` = 'yes' ";
		$data['booking_details'] = $this->Master_model->getCustom($qry)[0];

		$qry = "SELECT employee_name FROM `employee_master` WHERE `id` = $id ";
		$data['name'] = $this->Master_model->getCustom($qry)[0]->employee_name;


			if($data['booking_details'])
			{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;
			}
			echo json_encode($data);
	}
/***--------End Dashboard--------------------------------------*/

/***--------Start Profile--------------------------------------*/

	public function profile()
	{
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$id = $this->input->post("id");

		

		$qry = "SELECT * FROM `employee_master` WHERE `id` = $id ";
		$data['result'] = $this->Master_model->getCustom($qry)[0];


			if($data['result'])
			{
				$emp_id = $data['result']->emp_type;

				$qry = "SELECT emp_type FROM `employee_type_master` WHERE `id` = $emp_id ";
				$data['result']->designation = $this->Master_model->getCustom($qry)[0]->emp_type;

				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;
			}
			echo json_encode($data);
	}
/***--------End Dashboard--------------------------------------*/

	public function ajax_truncate()
	{		

		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";

		$id = $this->input->post('id');
		$source = $this->input->post('source');

		$frm_data = array();
		$frm_data["id"] = $id;
		$frm_data["status"] = 0;

		$re = $this->Master_model->delData($source, $id);	
		if($re)
		{
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['message'] ="" ;			
		}else
		{

			$data['status'] = 'Error';
			$data['code'] = 300;
			$data['message'] = "";
		}
			echo json_encode($data);
		

	}
	public function ajax_client_data()
	{	
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";			

		$client_mob = $this->input->post("client_mob");

			$qry = "SELECT *, DATE_FORMAT(create_date,'%d %M %Y, %h:%i:%s %p') AS create_date FROM tbl_cost_calculator_new where client_mob = $client_mob ORDER BY id desc";
			$calc_list = $this->Master_model->getCustom($qry);
			$html = "";
			if($calc_list)
			{
				// echo json_encode($calc_list, true);
				$data['status'] = 'Successfully';
				$data['code'] = 200;
				$data['result'] = $calc_list;
			}
			else
			{
				$data['status'] = 'error';
				$data['code'] = 202;
				$data['message'] = "no data  found";	
			}
		echo json_encode($data);
	}

}
