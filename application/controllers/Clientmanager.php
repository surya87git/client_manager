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

	public function addstages(){
         
		$this->load->view('header');
		$this->load->view('top_sidebar');
		$this->load->view('addstages');
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

}
?>