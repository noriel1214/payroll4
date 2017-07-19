<?php
class Award extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('award_model');
                $this->load->model('employee_model');
                $this->load->helper('url_helper');
        }

public function index($award_id=0)
{
    $this->load->helper('form');
    $this->load->library('form_validation');
    
        $data['award'] = $this->award_model->get_award();
        $data['award_item']=$this->award_model->get_award($award_id);
        $data['employee'] = $this->employee_model->get_employee();
        $data['title'] = 'Add Award';

        $this->load->view('templates/header', $data);
        $this->load->view('award/index', $data);
        $this->load->view('templates/footer');
        
}
       
public function create()
{
 
     
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New Award';

  
    $this->form_validation->set_rules('award_title', 'Award Title', 'required');


        $preservedata = array(
       'award_id' => $this->input->post('award_id'),
        'award_title' => $this->input->post('award_title'),
        'award_date' => $this->input->post('award_date'),
        'award_amt' => $this->input->post('award_amt'),
        'gift' => $this->input->post('gift'),
        'emp_awarded' => $this->input->post('emp_awarded'),
        );
                 
        $data['award_item'] = $preservedata;
   
    if ($this->form_validation->run() === FALSE)
    {
         $data['award'] = $this->award_model->get_award();
        $this->load->view('templates/header', $data);
        $this->load->view('award/index', $data);
        $this->load->view('templates/footer');

    }
    else
    {
        $this->award_model->set_award();
        $data['award'] = $this->award_model->get_award();
        
        //initialize
        

    $emptyaward = array(
        'award_id' => '',
        'award_title' => '',
        'award_date' => '',
        'award_amt' =>'',
        'gift' => '',
        'emp_awarded' => ''
    );
                 
        $data['award_item'] = $emptyaward;
        
        $this->load->view('templates/header', $data);
        $this->load->view('award/index');
        $this->load->view('templates/footer');
    }
}
}