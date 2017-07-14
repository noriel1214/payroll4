<?php
class Department_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_department($dept_id = FALSE)
{
        if ($dept_id === FALSE)
        {
                $query = $this->db->get('pr_department');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_department', array('dept_id' => $dept_id));
        return $query->row_array();
}

public function set_department()
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'dept_id' => $this->input->post('dept_id'),
        'dept_name' => $this->input->post('dept_name'),
        'dept_designation' => $this->input->post('dept_designation'),
    );

    return $this->db->replace('pr_department', $data);
}

        
}