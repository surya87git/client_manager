<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
	public function __construct() {
		parent::__construct(); 
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('user_agent');
		$this->load->database();
		$this->load->model("Master_model"); 
		$this->load->library('email');   
	}	 

	public function send_booking_mail__() {
		
		$this->load->library('email');

		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ukcdesigner.in',
		    'smtp_port' => 587,
		    'smtp_user' => 'info@ukcdesigner.in',
		    'smtp_pass' => 'ukc@441mall',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);		
		
		$booking_id = $this->input->post('booking_id');//$this->uri->segment(3);

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $client_info = $this->Master_model->getCustom($qry);

		$this->email->initialize($config);
		$email = $client_info[0]->email_id ?? "";

		$data['id'] 	= $client_info[0]->id ?? "";
		$data['mobile'] = $client_info[0]->mobile_no ?? "";
		$i = base64_encode(json_encode($data));
		$data['link'] 	= urlencode($i);

		$data['name']	=  $client_info[0]->client_name ?? "";
		$gender	=  $client_info[0]->gender ?? "";

		if(strtolower($gender) == "female")
		{
			$data['gen'] = "Ma'am";
		}
		else
		{
			$data['gen'] = "Sir";
		}

		$frm_data = array("link_request" => 0);
		$where_arr = array("id" => $booking_id);
		$res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);

		$qry = "SELECT * FROM bkf_booking_transaction where booking_id = $booking_id";
        $trans_detail = $this->Master_model->getCustom($qry);

		$data['amount'] =  $trans_detail[0]->paid_booking_amt ?? "";

		$message = $this->load->view('booking_process_mail.php', $data, true);
		$this->email->from('info@ukcdesigner.in', "UK Concept Designer");
		$this->email->to($email);
		$this->email->cc('suryaachandra8@gmail.com');
		$this->email->subject('Booking Verification Mail');
		$this->email->message($message);

		if($this->email->send()){
			echo "~~~0~~~";
		}
		else{
			echo "~~~1~~~";			
		}
		
	}

	public function send_booking_link()
	{


	}

	public function send_booking_mail() {
		
		print_r($_REQUEST);

		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ukcdesigner.in',
		    'smtp_port' => 587,
		    'smtp_user' => 'info@ukcdesigner.in',
		    'smtp_pass' => 'ukc@441mall',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);		
		
		$mail_type = $this->input->post('mail_type');
		$booking_id = $this->input->post('booking_id');

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $client_info = $this->Master_model->getCustom($qry);

		$this->email->initialize($config);
		$email = $client_info[0]->email_id ?? "";

		$data['id'] 	= $client_info[0]->id ?? "";
		$data['mobile'] = $client_info[0]->mobile_no ?? "";
		$i = base64_encode(json_encode($data));
		$data['link'] 	= urlencode($i);
		$data['name']	=  $client_info[0]->client_name ?? "";

		// $frm_data = array("link_request" => 0);
		// $where_arr = array("id" => $booking_id);
		// $res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);

		$qry = "SELECT * FROM bkf_booking_transaction where booking_id = $booking_id";
        $trans_detail = $this->Master_model->getCustom($qry);
		$data['amount'] =  $trans_detail[0]->paid_booking_amt ?? "";

		if($mail_type == "verification"){
			$this->email->subject('Booking Verification Mail');
			$message = $this->load->view('booking_verify_mail.php', $data, true);
		}
		elseif($mail_type == "confirmation" || $mail_type == "link"){
			$this->email->subject('Booking Verification Mail');
			$message = $this->load->view('booking_confirmation_mail.php', $data, true);
		}

		$this->email->from('info@ukcdesigner.in', "UK Concept Designer");
		$this->email->to($email);
		$this->email->cc('suryaachandra8@gmail.com');		
		$this->email->message($message);
		
		$data['status'] = 'Successfully';
		$data['code'] = 200;
		$data['message'] ="";
		
		echo json_encode($data);
		
		/*if($this->email->send()){
			echo "~~~0~~~";
		}
		else{	
			echo "~~~1~~~";			
		}*/
		
	}






	public function send_quick_booking_mail()
	{
		$this->load->library('email');
		$booking_id = $this->input->post('booking_id');
		$is_attachment = 'no';//$this->input->post('is_attachment');
		
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ukcdesigner.in',
		    'smtp_port' => 587,
		    'smtp_user' => 'info@ukcdesigner.in',
		    'smtp_pass' => 'ukc@441mall',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);		



		$frm_data = array("link_request" => 0);
		$where_arr = array("id" => $booking_id);
		$res = $this->Master_model->updateArr("bkf_booking_form", $frm_data, $where_arr);

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $client_info = $this->Master_model->getCustom($qry);
		$email = $client_info[0]->email_id ?? "";
		$booking_file = $client_info[0]->booking_file ?? "";

		$this->email->initialize($config);
		
		$data['id'] = $client_info[0]->id ?? "";
		$data['mobile'] = $client_info[0]->mobile_no ?? "";
		$data['is_attachment']  = $is_attachment;

		$i = base64_encode(json_encode($data));
		$data['link'] = urlencode($i);

		$data['name'] = $client_info[0]->client_name ?? "";
		$data['booking_amt'] =  $client_info[0]->booking_amt ?? "";
		$data['booking_link'] =  $client_info[0]->booking_link ?? "";

		$gender	= $client_info[0]->gender ?? "";

		if(strtolower($gender) == "female")
		{
			$data['gen'] = "Ma'am";
		}
		else
		{
			$data['gen'] = "Sir";
		}
		
		$qry = "SELECT * FROM bkf_booking_transaction where booking_id = $booking_id";
        $trans_detail = $this->Master_model->getCustom($qry);

		$data['amount'] =  $trans_detail[0]->paid_booking_amt ?? "";
		
		$message = $this->load->view('booking_link_mail.php', $data, true);
		$this->email->from('info@ukcdesigner.in', "UK Concept Designer");
		$this->email->to($email);
		$this->email->cc('suryaachandra8@gmail.com');
		$this->email->subject('Booking Payment Link');
		$this->email->message($message);
		
		
		if($this->email->send()){
			echo "~~~0~~~";
		}
		else{
			echo "~~~1~~~";			
		}

	}



	public function send_confirmation_mail()
	{
		$this->load->library('email');
		$booking_id = $this->input->post('booking_id');
		$is_attachment = $this->input->post('is_attachment');
		
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ukcdesigner.in',
		    'smtp_port' => 587,
		    'smtp_user' => 'info@ukcdesigner.in',
		    'smtp_pass' => 'ukc@441mall',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);		

		$qry = "SELECT * FROM bkf_booking_form where id = $booking_id";
        $client_info = $this->Master_model->getCustom($qry);
		$email = $client_info[0]->email_id ?? "";
		$booking_file = $client_info[0]->booking_file ?? "";

		$this->email->initialize($config);
		
		$data['id'] = $client_info[0]->id ?? "";
		$data['mobile'] = $client_info[0]->mobile_no ?? "";
		$data['is_attachment']  = $is_attachment;

		$i = base64_encode(json_encode($data));
		$data['link'] = urlencode($i);

		$data['name'] = $client_info[0]->client_name ?? "";
		$data['booking_link'] =  $client_info[0]->booking_link ?? "";
		$data['booking_amt'] =  $client_info[0]->booking_amt ?? "";

		$gender	= $client_info[0]->gender ?? "";

		if(strtolower($gender) == "female")
		{
			$data['gen'] = "Ma'am";
		}
		else
		{
			$data['gen'] = "Sir";
		}
		
	
		$message = $this->load->view('booking_conf_mail.php', $data, true);
		$this->email->from('info@ukcdesigner.in', "UK Concept Designer");
		$this->email->to($email);
		$this->email->cc('suryaachandra8@gmail.com');
		$this->email->subject('Booking Confirmation Mail');
		$this->email->message($message);
		
		if($is_attachment == "yes")
		{
			//$this->email->attach('https://www.ukcdesigner.in/client_manager/assets/booking_file/'.$booking_file);
			$this->email->attach('http://192.168.1.4/cost_calc/assets/booking_file/'.$booking_file);
		}
		if($this->email->send()){
			echo "~~~0~~~";
		}
		else{
			echo "~~~1~~~";			
		}

	}

	public function temp_mail_view()
	{
		$data['id'] = $this->uri->segment(3);//$this->input->get("id");
		$data['mobile'] = $this->input->post("mobile_no") ?? '08882543708';
		$i = base64_encode(json_encode($data));
		$data['link'] = urlencode($i);
		$data['name'] = $this->input->post("name") ?? "Sri";
		$data['gen'] = $this->input->post("name") ?? "Sir";
		$data['amount'] = $this->input->post("amount") ?? '';
		$this->load->view('booking_process_mail',$data);	
	}
	public function temp_mail_view1()
	{
		$data['id'] = $this->uri->segment(3);//$this->input->get("id");
		$data['mobile'] = $this->input->post("mobile_no") ?? '2147483647';
		$i = base64_encode(json_encode($data));
		$data['link'] = urlencode($i);
		$data['name'] = $this->input->post("name") ?? "Sri";
		$data['gen'] = $this->input->post("name") ?? "Sir";
		$data['amount'] = $this->input->post("amount") ?? '';
		$this->load->view('booking_conf_mail',$data);	
	}
}
