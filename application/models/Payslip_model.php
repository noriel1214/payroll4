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
    $allowance_type = $this->input->post("allowance_type", true);
    $allowance_amt = $this->input->post("allowance_amt", true);
    $deduction_type = $this->input->post("deduction_type", true);
    $deduction_amt = $this->input->post("deduction_amt", true);    
    
    $data = array(
        'emp_id' => $this->input->post('emp_id'),
        'dept_id' => $this->input->post('dept_id'),
        'pay_month' => $this->input->post('pay_month'),
        'pay_year' => $this->input->post('pay_year'),

    );
    
    
    $this->db->trans_begin();
    $this->db->replace('pr_payslip', $data);

    for($i=0, $count = count($allowance_type); $i < $count; $i++) {
            $data_allowance =  array(
                'emp_id' => $this->input->post('emp_id'),
                'pay_month' => $this->input->post('pay_month'),
                'pay_year' => $this->input->post('pay_year'),  
                'allowance_type' => $allowance_type[$i],
                'allowance_amt' => $allowance_amt[$i]
            );         
            $this->db->replace('pr_allowance', $data_allowance);
        }
 
        for($i=0, $count = count($deduction_type); $i < $count; $i++) {
            $data_deduction =  array(
                'emp_id' => $this->input->post('emp_id'),
                'pay_month' => $this->input->post('pay_month'),
                'pay_year' => $this->input->post('pay_year'),  
                'deduction_type' => $deduction_type[$i],
                'deduction_amt' => $deduction_amt[$i]
            );         
            $this->db->replace('pr_deduction', $data_deduction);
        }        


    if ($this->db->trans_status() === FALSE)
    {
            $this->db->trans_rollback();
            return FALSE;
    }
    else
    {
            $this->db->trans_commit();
            return TRUE;
    }      
}

public function get_payslip()
{ 
    $this->db->select('p.*, e.firstname, e.lastname, a.allowance_type, a.allowance_amt, d.deduction_type, d.deduction_amt');
    $this->db->from('pr_payslip p');
    $this->db->join('pr_employee e', 'p.emp_id = e.emp_id', 'left outer');
    $this->db->join('pr_allowance a', 'p.emp_id = a.emp_id AND p.pay_month = a.pay_month AND p.pay_year = a.pay_year', 'left outer');
    $this->db->join('pr_deduction d', 'p.emp_id = d.emp_id AND p.pay_month = d.pay_month AND p.pay_year = d.pay_year', 'left outer');
    $query = $this->db->get();
    
    $querystring =$this->db->last_query();
    
    return $query->result_array();  

}
        
}