<?php
class Application extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('application_model');
                $this->load->model('vacancy_model');
                 $this->load->model('status_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['application'] = $this->application_model->get_application();
        $data['vacancy'] = $this->vacancy_model->get_vacancy();
        $data['status'] = $this->status_model->get_status();
        
          //initialize empty department for create modal
        //$data['application_item'] = $this->application_model->get_application($status_id);
        
        $data['title'] = 'Add application';

        $this->load->view('templates/header', $data);
        $this->load->view('application/index', $data);
        $this->load->view('templates/footer');
}


public function create($application_id = 0)
{
    $input_method=$this->input->method() === 'post';
    
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New application';
    
     $this->form_validation->set_rules('applicant_name', 'Applicant Name', 'required');

   if(!$input_method)
    {
        $data['application_item'] = $this->application_model->get_application($application_id);
    }
    else
    {
        $preservedata = array(
       'application_id' => $this->input->post('application_id'),
        'applicant_name' => $this->input->post('applicant_name'),
        'position_id' => $this->input->post('position_id'),
        'application_date' => $this->input->post('application_date'),
          'status_id' => $this->input->post('status_id')  
        );
                 
        $data['application_item'] = $preservedata;
    }    
    
    if ($this->form_validation->run() === FALSE)
    {
         $data['application'] = $this->application_model->get_application();
        $this->load->view('templates/header', $data);
        $this->load->view('application/index', $data);
        $this->load->view('templates/footer');

    }
    else
    {
        $this->application_model->set_application();
        $data['application'] = $this->application_model->get_application();
        
        //initialize
        

        $emptyvacancy = array(
       'application_id' => '',
        'applicant_name' => '',
        'position_id' => '',
        'application_date' => '',
          'status_id' => ''
        );
                 
        $data['application_item'] = $emptyvacancy;
        
       $data['vacancy'] = $this->vacancy_model->get_vacancy();
        $data['status'] = $this->status_model->get_status();
                
        
        $this->load->view('templates/header', $data);
        $this->load->view('application/index');
        $this->load->view('templates/footer');
    }
}

}