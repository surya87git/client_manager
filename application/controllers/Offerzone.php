<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferZone extends CI_Controller {

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
	
	public function api_referral_master()
	{
		//print_r($_FILES);
		//exit;
		$data['status'] = 'Error';
		$data['code'] = 300;
		$data['message'] = "";
		 		
		$length = 6;
		$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';				 
		$ref_code =  substr(str_shuffle($str), 0, $length);
		
		$mobile_no = $this->input->post("mobile_no");


		//$inv_img = 

		$frm_data = array(
			"mobile_no" => $mobile_no,
			"uid"=>$this->input->post("uid") ?? "",
			"inv_no"=>$this->input->post("inv_no") ?? "",
			
			"create_date"=> date("Y-m-d H:i:s")
		);

		$frm_data_2 = array(
			"mobile_no" => $mobile_no,
			"ref_code"=> $ref_code,			
			"create_date"=> date("Y-m-d H:i:s")
		);

		$qry = "SELECT count(id) as cnt FROM tbl_ref_master where mobile_no = $mobile_no";
		$res = $this->Master_model->getCustom($qry);
		$r_count = $res[0]->cnt;

		if($r_count > 0)
		{			
			/*
			$result = $this->Master_model->saveData("tbl_ref_code", $frm_data);				
				if($result)
				{
					$data['status']  = 'Successfully';
					$data['code'] 	 = 200;
					$data['message'] = $result[0]->id;
				}
				else
				{
					$data['message'] = "Something went wrong...";
				}
			*/

			$data['status']  = 'Information';
			$data['code'] 	 = 201;
			$data['message'] = 'Offer already redeem...';
			echo json_encode($data);
		}
		else
		{		

			$tkt = $_FILES['inv_img']['name'];
			$tmp_name = $_FILES['inv_img']['tmp_name'];

			$inv_img = $this->file_upload($tkt, $tmp_name, 'tkt');
			if($inv_img != "")
			{
				$frm_data['inv_img'] = $inv_img;				
			}

			$result = $this->Master_model->saveData("tbl_ref_master", $frm_data);
			$result2 = $this->Master_model->saveData("tbl_ref_code", $frm_data_2);

			if(!empty($result) && !empty($result2))
			{
				$data['status']  = 'Successfully';
				$data['code'] 	 = 200;
				$data['ref_code'] = $ref_code;
			}
			else
			{
				$data['message'] = "Something went wrong...";
			}

			echo json_encode($data);
		}
	}

	public function api_referral_match()
	{
		$ref_code = $this->input->post("ref_code");
	
		$qry = "SELECT count(id) as cnt FROM tbl_ref_code where ref_code = '$ref_code'";
		$res = $this->Master_model->getCustom($qry);
		$r_count = $res[0]->cnt;

		if($r_count > 0)
		{
			$data['status']  = 'Successfully';
			$data['code'] 	 = 200;
			$data['ref_code'] = $ref_code;
		} 
		else
		{
			$data['message'] = "Invalid Referral Code...";
		}

		echo json_encode($data);

	}

	public function file_upload($file_name, $tmp_name, $doc_type)
	{
		$f_name = explode(".", $file_name);
		$imgpdf_file =  $doc_type."_".time().'.'.$f_name[1];		
		$destination = 'assets/offerzone/'.$imgpdf_file;
		if(move_uploaded_file($tmp_name, $destination))
		{
			return $imgpdf_file;
		}
		else
		{
			return '';
		}		
	}

}