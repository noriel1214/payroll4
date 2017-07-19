<?php
class Application_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_application($status_id = FALSE)
{

       // $query = $this->db->get_where('vw_application', array('status_id' => $status_id));
        
$this->db->select('a.*,b.status_name, c.position_name');
$this->db->from('pr_application a,pr_status b, pr_vacancy c');
$this->db->where('a.status_id = b.status_id',NULL,FALSE);
$this->db->where('a.position_id = c.vacancy_id',NULL,FALSE);
$query = $this->db->get();
return $query->result_array();        
        
     
}

public function set_application()
{
    $this->load->helper('url');

    

    $data = array(
        'application_id' => $this->input->post('application_id'),
        'position_id' => $this->input->post('position_id'),
        'application_date' => $this->input->post('application_date'),
        'status_id' => $this->input->post('status_id'),
        'applicant_name' => $this->input->post('applicant_name')            
    );

    return $this->db->replace('pr_application', $data);
}

        
}