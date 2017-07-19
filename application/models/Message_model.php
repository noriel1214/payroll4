<?php
class Message_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_message($msg_id = FALSE)
{
        if ($msg_id === FALSE)
        {
                $query = $this->db->get('pr_message');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_message', array('msg_id' => $msg_id));
        return $query->row_array();
}

public function set_message()
{
    $data = array(
        'msg_id' => $this->input->post('msg_id'),
        'msg_subject' => $this->input->post('msg_subject'),
        'msg_recipient' => $this->input->post('msg_recipient'),
        'msg_sender' => $this->input->post('msg_sender'),
        'msg_msg' => $this->input->post('msg_msg')
    );

    return $this->db->replace('pr_message', $data);
}

        
}