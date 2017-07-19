<?php
class Notice extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('notice_model');
                $this->load->helper('url_helper');
        }

public function index($notice_id=0)
{
    $this->load->helper('form');
    $this->load->library('form_validation');    
        $data['notice'] = $this->notice_model->get_notice();
        $data['notice_item'] = $this->notice_model->get_notice($notice_id);
        $data['title'] = 'Notice List';

        $this->load->view('templates/header', $data);
        $this->load->view('notice/index', $data);
        $this->load->view('templates/footer');
}

public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New notice';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('notice/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('notice/success');
    }
}

}