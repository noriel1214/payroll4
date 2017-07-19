<?php
class Notice extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('notice_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        //$data['employee'] = $this->news_model->get_news();
        $data['title'] = 'Add notice';

        $this->load->view('templates/header', $data);
        $this->load->view('notice/index', $data);
        $this->load->view('templates/footer');
}
        
        public function view($slug = NULL)
{
        $data['notice_item'] = $this->news_model->get_news($slug);

        if (empty($data['notice_item']))
        {
                show_404();
        }

        $data['title'] = $data['notice_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('notice/view', $data);
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