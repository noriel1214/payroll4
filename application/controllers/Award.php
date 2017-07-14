<?php
class Award extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('award_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        //$data['employee'] = $this->news_model->get_news();
        $data['title'] = 'Add award';

        $this->load->view('templates/header', $data);
        $this->load->view('award/index', $data);
        $this->load->view('templates/footer');
}
        
        public function view($slug = NULL)
{
        $data['award_item'] = $this->news_model->get_news($slug);

        if (empty($data['award_item']))
        {
                show_404();
        }

        $data['title'] = $data['award_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('award/view', $data);
        $this->load->view('templates/footer');
}


public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New award';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('award/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('award/success');
    }
}

}