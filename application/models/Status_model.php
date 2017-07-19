<?php
class Status_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_status()
{

                $query = $this->db->get('pr_status');
                return $query->result_array();
  
}


        
}