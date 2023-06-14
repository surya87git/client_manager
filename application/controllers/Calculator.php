<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {


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
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('add_anubandh');
	}

    public function calculation_list()
	{				
		$qry = "SELECT * FROM tbl_cost_calculator_new where id <> 0 and status = 1 order by id desc ";
		$data['calc_list'] = $this->Master_model->getCustom($qry);

		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('calculation_list', $data);
	}
	public function new_calculation()
	{				
		//$qry = "SELECT * FROM tbl_cost_calculator_new where id <> 0 and status = 1 order by id desc ";
		//$data['calc_list'] = $this->Master_model->getCustom($qry);
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('new_calculation');
	}


}