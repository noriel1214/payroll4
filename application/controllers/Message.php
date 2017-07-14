<?php
class Message extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('message_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        //$data['employee'] = $this->news_model->get_news();
        $data['title'] = 'Add message';

        $this->load->view('templates/header', $data);
        $this->load->view('message/index', $data);
        $this->load->view('templates/footer');
}
        
        public function view($slug = NULL)
{
        $data['message_item'] = $this->news_model->get_news($slug);

        if (empty($data['message_item']))
        {
                show_404();
        }

        $data['title'] = $data['message_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('message/view', $data);
        $this->load->view('templates/footer');
}


public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New message';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('message/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('message/success');
    }
}

}