<?php
class Vacancy extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('vacancy_model');
                $this->load->helper('url_helper');
        }

public function index($vacancy_id=0)
{
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['vacancy'] = $this->vacancy_model->get_vacancy();
        
   //initialize empty department for create modal
        $data['vacancy_item'] = $this->vacancy_model->get_vacancy($vacancy_id);
       
        $data['title'] = 'Add Vacancy';

        $this->load->view('templates/header', $data);
        $this->load->view('vacancy/index', $data);
        $this->load->view('templates/footer');
}
       


public function create($vacancy_id = 0)
{
     $input_method=$this->input->method() === 'post';
     
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New Vacancy';

  
    $this->form_validation->set_rules('position_name', 'Position Name', 'required');

    if(!$input_method)
    {
        $data['vacancy_item'] = $this->vacancy_model->get_vacancy($vacancy_id);
    }else{
        $preservedata = array(
       'vacancy_id' => $this->input->post('vacancy_id'),
        'position_name' => $this->input->post('position_name'),
        'num_of_vac' => $this->input->post('num_of_vac'),
        'apply_last_date' => $this->input->post('apply_last_date')
        );
                 
        $data['vacancy_item'] = $preservedata;
    }    
    
    if ($this->form_validation->run() === FALSE)
    {
         $data['vacancy'] = $this->vacancy_model->get_vacancy();
        $this->load->view('templates/header', $data);
        $this->load->view('vacancy/index', $data);
        $this->load->view('templates/footer');

    }
    else
    {
        $this->vacancy_model->set_vacancy();
        $data['vacancy'] = $this->vacancy_model->get_vacancy();
        
        //initialize
        

        $emptyvacancy = array(
       'vacancy_id' => '',
        'position_name' => '',
        'num_of_vac' => '',
        'apply_last_date' => ''
        );
                 
        $data['vacancy_item'] = $emptyvacancy;
        
        $this->load->view('templates/header', $data);
        $this->load->view('vacancy/index');
        $this->load->view('templates/footer');
    }
}

}