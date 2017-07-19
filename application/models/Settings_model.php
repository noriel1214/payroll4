<?php
class Settings_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
public function get_settings()
{
    $query = $this->db->get('pr_settings');
    return $query->result_array();
}

public function set_settings()
{
    $this->load->helper('url');

    $data = array(
        'msg_id' => $this->input->post('msg_id'),
        'msg_subject' => $this->input->post('msg_subject'),
        'msg_msg' => $this->input->post('msg_msg'),
        'msg_recipient' => $this->input->post('msg_recipient'),
        'msg_sender' => $this->input->post('msg_sender')
    );

    return $this->db->replace('pr_settings', $data);
}

        
}