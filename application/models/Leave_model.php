<?php
class Leave_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_leave($leave_id = 0)
{
        if ($leave_id === FALSE)
        {
                $query = $this->db->get('pr_leave');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_leave', array('leave_id' => $leave_id));
        return $query->row_array();
}

public function set_leave()
{
    $this->load->helper('url');
    $data = array(
        'leave_id' => $this->input->post('leave_id'),
        'employee_id' => $this->input->post('employee_id'),
        'leave_start_date' => $this->input->post('leave_start_date'),
        'leave_end_date' => $this->input->post('leave_end_date'),
        'leave_reason' => $this->input->post('leave_reason'),
        'leave_status_id' => $this->input->post('leave_status_id'),
    );

    return $this->db->insert('pr_leave', $data);
}

        
}