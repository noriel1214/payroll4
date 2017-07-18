<?php
class Expense_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_expense($expense_id = FALSE)
{
        if ($expense_id === FALSE)
        {
                $query = $this->db->get('pr_expense');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_expense', array('expense_id' => $expense_id));
        return $query->row_array();
}

public function set_expense()
{
    $this->load->helper('url');


    $data = array(
        'expense_id' => $this->input->post('expense_id'),
        'expense_title' => $this->input->post('expense_title'),
        'expense_desc' => $this->input->post('expense_desc'),
        'expense_amt' => $this->input->post('expense_amt'),
        'expense_date' => $this->input->post('expense_date')
    );

    return $this->db->replace('pr_expense', $data);
}

        
}