<?php
class Leave extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('leave_model');
           
                $this->load->helper('url_helper');
        }

public function index()
{
    $this->load->helper('form');
    $this->load->library('form_validation');
    
        $data['leave'] = $this->leave_model->get_leave();
        $data['title'] = 'Add Leave';

        $this->load->view('templates/header', $data);
        $this->load->view('leave/index', $data);
        $this->load->view('templates/footer');
}


public function create()
{
     $input_method=$this->input->method() === 'post';
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New leave';

    $this->form_validation->set_rules('reason', 'Reason', 'required');
    
        if(!$input_method)
    {
        $data['leave_item'] = $this->leave_model->get_leave($leave_id);
    }else{
        $preservedata = array(
       'leave_id' => $this->input->post('leave_id'),
        'leave_start_date' => $this->input->post('leave_start_date'),
        'leave_end_date' => $this->input->post('leave_end_date'),
        'leave_reason' => $this->input->post('leave_reason'),
        'leave_status_id' => $this->input->post('leave_status_id')
        );
                 
        $data['vacancy_item'] = $preservedata;
    }  

  if ($this->form_validation->run() === FALSE)
    {
      //////////////////////To be continued.......
         $data['leave'] = $this->leave_model->get_leave();
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