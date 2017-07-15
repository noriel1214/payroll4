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


public function create($leave_id = 0)
{
     $input_method=$this->input->method() === 'post';
     //1. Load form and validation helpers
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New leave';
    //2. set validation rules
    $this->form_validation->set_rules('leave_reason', 'Reason', 'required');
    
    // 3. If this is not a post, this is an existing leave record for edit.
        if($this->input->method() !== 'post')
    {
        // 3a. Retrieve existing leave
        $data['leave_item'] = $this->leave_model->get_leave($leave_id);
    }else{
        // 3b. This is a post, preserve the values for creating a new leave
        $preservedata = array(
       'leave_id' => $this->input->post('leave_id'),
        'leave_start_date' => $this->input->post('leave_start_date'),
        'leave_end_date' => $this->input->post('leave_end_date'),
        'leave_reason' => $this->input->post('leave_reason'),
        'leave_status_id' => $this->input->post('leave_status_id')
        );
                 
        $data['leave_item'] = $preservedata;
    }  

    
  if ($this->form_validation->run() === FALSE)
    {
      //4. This is not valid, retrieve all leaves to be displayed to the main (background) list.
         $data['leave'] = $this->leave_model->get_leave();
        $this->load->view('templates/header', $data);
        $this->load->view('leave/index', $data);
        $this->load->view('templates/footer');

    }
    else
    {
        //5. Leave is valid, save it to the database, or update existing record using replace()
        $this->leave_model->set_leave();
        $data['leave'] = $this->leave_model->get_leave();
        
        //initialize
        $emptyleave = array(
       'leave_id' => '',
        'leave_start_date' => '',
        'leave_end_date' => '',
        'leave_reason' => '',
        'leave_status_id' => ''
        );      
        $data['leave_item'] = $emptyleave;
        
        $this->load->view('templates/header', $data);
        $this->load->view('leave/index', $data);
        $this->load->view('templates/footer');
    }
}

public function update($leave_status_id, $leave_id)
{
    
        $this->leave_model->update_leave_status($leave_status_id, $leave_id);
        $data['leave'] = $this->leave_model->get_leave();
        
        //initialize
        $emptyleave = array(
        'leave_id' => 0,
        'leave_start_date' => '',
        'leave_end_date' => '',
        'leave_reason' => '',
        'leave_status_id' => 1
        );    
        
        $data['leave_item'] = $emptyleave;
        
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $this->load->view('templates/header', $data);
        $this->load->view('leave/index', $data);
        $this->load->view('templates/footer');
}

}