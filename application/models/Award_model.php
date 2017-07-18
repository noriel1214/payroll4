<?php
class Award_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_award($award_id = FALSE)
{
        if ($award_id === FALSE)
        {
                $query = $this->db->get('pr_award');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_award', array('award_id' => $award_id));
        return $query->row_array();
}

public function set_award()
{
    $this->load->helper('url');


    $data = array(
        'award_id' => $this->input->post('award_id'),
        'award_title' => $this->input->post('award_title'),
        'award_date' => $this->input->post('award_date'),
        'award_amt' => $this->input->post('award_amt'),
        'gift' => $this->input->post('gift'),
        'emp_awarded' => $this->input->post('emp_awarded')
    );

    return $this->db->replace('pr_award', $data);
}

        
}