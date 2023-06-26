<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientApi extends CI_Controller {

    public $permission;
    public function __construct() {
        
        parent::__construct(); 
		$this->load->library("session");
		$this->load->helper('cookie');
		$this->load->helper("form");
		$this->load->helper("url");
        $this->load->helper("security");
		$this->load->library('user_agent');
        $this->load->library('master');
		//$this->load->library('upload');
		$this->load->database();
	    $this->load->model("Master_model"); 

        $this->$permission = $this->Master_model->headerAuth();

        //if($permission == 0){
            //$response = array('code'=>401, 'status' => 'error', 'message' => 'Unauthorised Access');
            //return $this->output->set_status_header(401)->set_content_type('application/json')->set_output(json_encode($response));
            //return $this->output->set_status_header(401);
            //exit;
        //}

    }
    
    public function login(){
        
        $data = array();
        $login_content = file_get_contents('php://input');
        $json_data = json_decode($login_content, true);
        $json_data = array_map('xss_clean', $json_data);

        $login_id = $json_data['login_id'];
        $login_password = $json_data['login_password'];

        $where_arr = array("login_id"=>$login_id, "login_password"=>$login_password, "status"=>1);
        $res1 = $this->Master_model->getFilterAll("tbl_client_login", $where_arr);
        if($res1){

            $data['client_login'] = $res1[0];

            /**Generate Access Token */ 
            $id = $res1[0]->id;
            $res2 = $this->Master_model->getCustom("select access_token from tbl_access_token where client_login_id = $id");

            if(empty($res2))
            {
                $token = $this->master->genToken($id, "client");
                $frm_data = array("client_login_id"=>$id, "access_token"=>$token, "create_date"=>date("Y-m-d H:i:s"));
                $res3 = $this->Master_model->saveData("tbl_access_token", $frm_data);
               
                $data['client_login']->access_token = $token;
            }
            else{
                $data['client_login']->access_token = $res2[0]->access_token;
            }            

            $response = array('code' => 200, 'status' => 'success', 'message' => 'Successfully login');

        }
        else{

            $response = array('code' => 300, 'status' => 'success', 'message' => 'Invalid User Id OR Password');

        }

        $merg_res = array_merge($data, $response);
        $this->output->set_content_type('application/json')->set_output(json_encode($merg_res));

      
    }

    public function get_user_data()
    {
       

        $jsonPayload = file_get_contents('php://input');
        $data = json_decode($jsonPayload, true);

        $res = $this->headerAuth();

        print_r($res);

        if (!$validToken) {
            $response = array('status' => 'error', 'message' => 'Invalid token');
            $this->output->set_content_type('application/json')->set_output(json_encode($response));
            return;
        }

        // Fetch user data from the database
        $userData = $this->Master->getUserData();

        if ($userData) {
            $response = array('status' => 'success', 'data' => $userData);
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to fetch user data');
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function dashboard(){
              
        if($this->$permission == 0){       
            return $this->output->set_status_header(401);
            exit;
        }   

        $data = array();
        
        $input_res = $this->Master_model->jsonData();
        $booking_id = $input_res['booking_id'];
        
		$qry = "SELECT a.* FROM bkf_booking_form a where booking_id = $booking_id";       
        $data['client_info'] = $this->Master_model->getCustom($qry);

    }

}

?>