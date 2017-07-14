<?php
class Noticeboard extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('noticeboard_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        //$data['employee'] = $this->news_model->get_news();
        $data['title'] = 'Add noticeboard';

        $this->load->view('templates/header', $data);
        $this->load->view('noticeboard/index', $data);
        $this->load->view('templates/footer');
}
        
        public function view($slug = NULL)
{
        $data['noticeboard_item'] = $this->news_model->get_news($slug);

        if (empty($data['noticeboard_item']))
        {
                show_404();
        }

        $data['title'] = $data['noticeboard_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('noticeboard/view', $data);
        $this->load->view('templates/footer');
}


public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New noticeboard';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('noticeboard/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('noticeboard/success');
    }
}

}