<?php
class Expense extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('expense_model');
                $this->load->helper('url_helper');
        }

public function index($expense_id = 0)
{
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $data['expense'] = $this->expense_model->get_expense();
        $data['expense_item'] = $this->expense_model->get_expense($expense_id);
        
        $data['title'] = 'Add Expense';

        $this->load->view('templates/header', $data);
        $this->load->view('expense/index', $data);
        $this->load->view('templates/footer');
}
       
public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New Expense';

  
    $this->form_validation->set_rules('expense_title', 'Expense Title', 'required');


    $preservedata = array(
        'expense_id' => $this->input->post('expense_id'),
        'expense_title' => $this->input->post('expense_title'),
        'expense_desc' => $this->input->post('expense_desc'),
        'expense_date' => $this->input->post('expense_date'),
        'expense_amt' => $this->input->post('expense_amt')
    );        
                 
        $data['expense_item'] = $preservedata;
   
    if ($this->form_validation->run() === FALSE)
    {
         $data['expense'] = $this->expense_model->get_expense();
        $this->load->view('templates/header', $data);
        $this->load->view('expense/index', $data);
        $this->load->view('templates/footer');

    }
    else
    {
        $this->expense_model->set_expense();
        $data['expense'] = $this->expense_model->get_expense();
        
        //initialize
        

    $emptyexpense = array(
        'expense_id' => '',
        'expense_title' => '',
        'expense_desc' => '',
        'expense_date' => '',
        'expense_amt' =>'',
    );
                 
        $data['expense_item'] = $emptyexpense;
        
        $this->load->view('templates/header', $data);
        $this->load->view('expense/index');
        $this->load->view('templates/footer');
    }
}
}