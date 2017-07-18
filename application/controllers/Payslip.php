<?php
class Payslip extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('payslip_model');
                $this->load->model('department_model');
                $this->load->model('employee_model');
                $this->load->helper('url_helper');
        }

public function index()
{
    $this->load->helper('form');
    $this->load->library('form_validation');    
        $data['department'] = $this->department_model->get_department();
        $data['employee'] = $this->employee_model->get_employee();
        $data['title'] = 'Add payslip';

        $this->load->view('templates/header', $data);
        $this->load->view('payslip/index', $data);
        $this->load->view('templates/footer');
}

public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');    
        $data['department'] = $this->department_model->get_department();
        $data['employee'] = $this->employee_model->get_employee();
        $data['title'] = 'Add payslip';

        $this->load->view('templates/header', $data);
        $this->load->view('payslip/index', $data);
        $this->load->view('templates/footer');
}

public function create1()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    
        //$deduction_type = $this->input->post('deduction_type');
        //$deduction_amount = $this->input->post('deduction_amount');
         
        //$deduction_count=count($deduction_type);
        
        
    $data['title'] = 'Add a New payslip';

    $this->form_validation->set_rules('dept_id', 'dept_id', 'required');


    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('payslip/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->payslip_model->set_payslip();
        $data['payslip'] = $this->payslip_model->get_payslip();
        
        //initialize
        

        $emptypayslip = array(
       'dept_id' => '',
        'emp_id' => '',
        'pay_month' => '',
        'pay_year' => ''
        );
                 
        $data['payslip_item'] = $emptypayslip;
        
        $this->load->view('templates/header', $data);
        $this->load->view('payslip/list', $data);
        $this->load->view('templates/footer');
    }
}


public function ajax_call()
{
    //check to see people wont go directly
    if ($this->input->method() === 'post' && $this->input->post('dept_id')) 
    {
        $dpto =$this->input->post('dept_id');
        $data["employees"] = $this->employee_model->get_employee_by_dept($dpto);
  
        
           $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->employee_model->get_employee_by_dept($dpto)));

        
 
       
    }
    else 
    {
        redirect('index');
    }
}


}