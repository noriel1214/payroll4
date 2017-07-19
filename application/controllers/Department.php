<?php
class Department extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('department_model');
                $this->load->helper('url_helper');
        }

public function index($dept_id=0)
{
        $this->load->helper('form');
        $this->load->library('form_validation');
    
       $data['department'] = $this->department_model->get_department();
       
       //initialize empty department for create modal
        $data['department_item'] = $this->department_model->get_department($dept_id);
       
        $data['title'] = 'Add Department';

        $this->load->view('templates/header', $data);
        $this->load->view('department/index', $data);
        $this->load->view('templates/footer');
}
        
public function create($dept_id = 0)
{
     $input_method=$this->input->method() === 'post';
     
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New Department';

    $this->form_validation->set_rules('dept_name', 'Department Name', 'required');
    $this->form_validation->set_rules('dept_designation', 'Department Designation', 'required');

    if(!$input_method)
    {
        $data['department_item'] = $this->department_model->get_department($dept_id);
    }else{
        $preservedata = array(
        'dept_id' => $this->input->post('dept_id'),
        'dept_name' => $this->input->post('dept_name'),
        'dept_designation' => $this->input->post('dept_designation'),
        );
                 
        $data['department_item'] = $preservedata;
    }    
    
    if ($this->form_validation->run() === FALSE)
    {
         $data['department'] = $this->department_model->get_department();
        $this->load->view('templates/header', $data);
        $this->load->view('department/index', $data);
        $this->load->view('templates/footer');

    }
    else
    {
        $this->department_model->set_department();
        $data['department'] = $this->department_model->get_department();
        
        //initialize
        

        $emptydept = array(
        'dept_id' => '',
        'dept_name' => '',
        'dept_designation' => ''
        );
                 
        $data['department_item'] = $emptydept;
        
        $this->load->view('templates/header', $data);
        $this->load->view('department/index');
        $this->load->view('templates/footer');
    }
}

}