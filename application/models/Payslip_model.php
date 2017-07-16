<?php
class Payslip_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function search_payslip($month, $year)
{
        $query = $this->db->get_where('pr_payslip', array('month' => $month, 'year' =>$year ));
        return $query->row_array();
}

public function set_payslip()
{
    $this->load->helper('url');
    $data = array(
        'payslip_id' => $this->input->post('payslip_id'),
        'emp_id' => $this->input->post('emp_id'),
        'leave_start_date' => $this->input->post('leave_start_date'),
        'leave_end_date' => $this->input->post('leave_end_date'),
        'leave_reason' => $this->input->post('leave_reason'),
        'leave_status_id' => 1,
    );

    return $this->db->replace('pr_leave', $data);
}

        
}