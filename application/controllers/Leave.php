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
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New leave';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('leave/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('leave/success');
    }
}

}