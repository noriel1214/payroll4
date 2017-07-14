<?php
class LeaveStatus_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_leave()
        {
            $query = $this->db->get('pr_leave_status');
            return $query->result_array();
        }


        
}