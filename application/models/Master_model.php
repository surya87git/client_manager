<?php error_reporting(0);
class Master_model extends CI_Model {
        
        public function getMulticol($tbl, $col_arr, $where_arr)
        {
             $this->db->select($col_arr);
             $this->db->where($where_arr);
             $query = $this->db->get($tbl);
             return  $query->result();
        }
        public function getMax($tbl)
        {
              $this->db->select_max('id', 'maxid');
              $query = $this->db->get($tbl);
              return $query->result(); 
        }
        public function getSingleval()
        {
            $this->db->select_max('id', 'maxid');
            $query = $this->db->get($tbl);
            return $query->result();     
        }
        public function savePayment($form_data)
        {
             $this->db->insert('tbl_payment_voucher', $form_data);
             return ($this->db->affected_rows() != 1) ? false : true;
        }
        public function saveData($tbl, $form_data = NULL)
        {               
              $this->db->insert($tbl, $form_data);
             return $this->db->last_query();
              //echo ($this->db->affected_rows() != 1) ? false : true;
        } 

        public function updateData($tbl, $form_data)
        {
            $this->db->where('id', $form_data['id']);
            $this->db->update($tbl, $form_data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }

        public function updateArr($tbl, $form_data, $where_arr)
        {
            $this->db->where($where_arr);
            $this->db->update($tbl, $form_data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }

        public function getFilterAll($tbl, $where_arr)
        {
                $this->db->where($where_arr);     
                //$this->db->order_by('type', 'asc');
                $query = $this->db->get($tbl);
                return $query->result();   
        }
        
        public function getAll($tbl)
        {
                if($tbl == "tbl_country")
                {
                   $this->db->order_by('id', 'asc');      
                }
                else
                {
                   $this->db->order_by('id', 'desc');     
                }
                
                $query = $this->db->get($tbl);
                return $query->result();
        }

        public function getDataById($tbl, $id)
        {
                $this->db->where('id', $id);
                $query = $this->db->get($tbl);
                return $query->result();
        }

        public function getNameById($tbl,$col,$id)
        {
                $this->db->select("$col");    
                $this->db->where('id', $id);
                $query = $this->db->get($tbl);
                $res = $query->result();
                return $res[0]->$col;
        }

        public function delData($tbl, $id=NULL)
        {              
                $this->db->where('id', $id);
                $this->db->delete($tbl);
                return ($this->db->affected_rows() != 1) ? false : true;
        }

        public function delByCol($req_id, $cat_id)
        {    
                $where = array(
                 "req_id" => $req_id,
                 "cat_id" => $cat_id
                );

                $this->db->where($where);
                $this->db->delete("tbl_approval_list");
                return ($this->db->affected_rows() != 1) ? false : true;
        }

       public function getLocation($vnum = NULL)
        {
                $query = $this->db->query("SELECT a.client_name, b.site_location FROM tbl_receipt_voucher a LEFT JOIN tbl_site b ON a.site_name=b.site_name WHERE a.voucher_num = $vnum"); 
                $res = $query->result_array();
                return $res[0]["site_location"] ?? "";
        }

        public function getCustom($qry = NULL)
        {
                $query = $this->db->query($qry); 
                $res = $query->result();
                return $res;
        }
        public function countArr($qry = NULL)
        {
                $query = $this->db->query($qry); 
                $res = $query->result();
                return $res[0]->cnt;
                // return $res;
        }


        public function headerAuth(){

           $authHeader = $this->input->get_request_header('Authorization', TRUE);;
           
           $token = str_replace('Bearer ', '', $authHeader);

           $query = $this->db->query("select count(id) as cnt from tbl_access_token where access_token = '$token' and status = 1");
           $res = $query->result();
           
           $query = $this->db->query("select count(id) as cnt from tbl_access_token where access_token = '$token' and status = 1"); 
           $res = $query->result();                    
           return $res[0]->cnt;

          //return $query->num_rows();
           
        }

        public function jsonData()
        {
            $input_content = file_get_contents('php://input');
            $response_data = json_decode($input_content, true);
            $response_data = array_map('xss_clean', $response_data);
            return $response_data;
        }
        
}

?>