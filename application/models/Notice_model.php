<?php
class Notice_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_notice($notice_id = FALSE)
{
        if ($notice_id === FALSE)
        {
                $query = $this->db->get('pr_notice');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_notice', array('notice_id' => $notice_id));
        return $query->row_array();
}

public function set_notice()
{
    $this->load->helper('url');

    $data = array(
        'notice_id' => $this->input->post('notice_id'),
        'notice_title' => $this->input->post('notice_title'),
        'notice_desc' => $this->input->post('notice_desc'),
        'notice_status' => $this->input->post('notice_status'),
        'notice_date' => $this->input->post('notice_date')
    );

    return $this->db->replace('pr_notice', $data);
}

        
}