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
        'emp_id' => $this->input->post('emp_id'),
        'dept_id' => $this->input->post('dept_id'),
        'pay_month' => $this->input->post('pay_month'),
        'pay_year' => $this->input->post('pay_year'),

    );

    return $this->db->replace('pr_leave', $data);
}

        
}