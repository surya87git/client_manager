<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteMasterApi extends CI_Controller {


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

		$mobile 		= $this->input->post("mobile");
		$password 	= $this->input->post("password");

		$qry = "SELECT * FROM tbl_site_master WHERE mobile = '".$mobile."' AND password  = '".$password."'";

		$result = $this->Master_model->getCustom($qry);

		if($result)
		{
			$data['status']  = 'Successfully';
			$data['code'] 	 = 200;
			$data['result'] = $result;
			$data['message'] = "Successfully fatched";
		}else
		{
			$data['message'] = "Please check Email or Password";
		}
		echo json_encode($data);
	} 
}