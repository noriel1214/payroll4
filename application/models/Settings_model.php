<?php
class Settings_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_settings($setting_id = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('pr_settings');
                return $query->result_array();
        }

        $query = $this->db->get_where('pr_settings', array('setting_id' => $setting_id));
        return $query->row_array();
}

public function set_settings()
{
    $data = array(
        'system_name' => $this->input->post('system_name'),
        'system_title' => $this->input->post('system_title'),
        'system_addr' => $this->input->post('system_addr'),
        'system_phone' => $this->input->post('system_phone'),
        'system_email' => $this->input->post('system_email'),
        'system_name' => $this->input->post('system_name'),
        'system_name' => $this->input->post('system_name')
    );

    return $this->db->insert('settings', $data);
}

        
}