<?php
class Employee extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('employee_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        $data['employee'] = $this->employee_model->get_employee();
        $data['title'] = 'Add Employee';

        $this->load->view('templates/header', $data);
        $this->load->view('employee/index', $data);
        $this->load->view('templates/footer');
}
       


public function create($emp_id=0)
{   
    $input_method=$this->input->method() === 'post';
    
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New Employee';

    $this->form_validation->set_rules('firstname', 'First Name', 'required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required');

    if(!$input_method)
    {
        $data['employee_item'] = $this->employee_model->get_employee($emp_id);
    }else{
         $preservedata = array(
        'emp_id' => $this->input->post('emp_id'),
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        );
       $data['employee_item']=$preservedata;
    }
    
    if ($this->form_validation->run() === FALSE)
    {
       
        $this->load->view('templates/header', $data);
        $this->load->view('employee/create', $data);
        $this->load->view('templates/footer');
    }
    else
    {
        $this->employee_model->set_employee();
         $data['employee'] = $this->employee_model->get_employee();
        $this->load->view('templates/header', $data);
        $this->load->view('employee/index');
        $this->load->view('templates/footer');
    }
}


}