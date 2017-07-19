<?php
class Employee_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_employee($emp_id = FALSE)
{
        if ($emp_id === FALSE)
        {
                $query = $this->db->get('pr_employee');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_employee', array('emp_id' => $emp_id));
        return $query->row_array();
}

   public function get_employee_by_dept($dept_id)
{
        $query = $this->db->get_where('pr_employee', array('dept_id' => $dept_id));
        return $query->result_array();
}

public function set_employee()
{
    $this->load->helper('url');


    $data = array(
        'emp_id' => $this->input->post('emp_id'),
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'dept_id' => $this->input->post('dept_id'),
    );

    return $this->db->replace('pr_employee', $data);
}

public function delete_employee($emp_id)
{
      $this->db->where('emp_id', $emp_id);
      return $this->db->delete('pr_employee'); 
}
        
}