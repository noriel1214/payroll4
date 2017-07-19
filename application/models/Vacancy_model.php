<?php
class Vacancy_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_vacancy($vacancy_id = FALSE)
{
        if ($vacancy_id === FALSE)
        {
                $query = $this->db->get('pr_vacancy');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_vacancy', array('vacancy_id' => $vacancy_id));
        return $query->row_array();
}

public function set_vacancy()
{
    $this->load->helper('url');

   

    $data = array(
        'vacancy_id' => $this->input->post('vacancy_id'),
        'position_name' => $this->input->post('position_name'),
        'num_of_vac' => $this->input->post('num_of_vac'),
        'apply_last_date' => $this->input->post('apply_last_date')
    );

    return $this->db->replace('pr_vacancy', $data);
}

        
}