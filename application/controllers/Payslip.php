<?php
class Payslip extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('payslip_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        //$data['employee'] = $this->news_model->get_news();
        $data['title'] = 'Add payslip';

        $this->load->view('templates/header', $data);
        $this->load->view('payslip/index', $data);
        $this->load->view('templates/footer');
}
        
        public function view($slug = NULL)
{
        $data['payslip_item'] = $this->news_model->get_news($slug);

        if (empty($data['payslip_item']))
        {
                show_404();
        }

        $data['title'] = $data['payslip_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('payslip/view', $data);
        $this->load->view('templates/footer');
}


public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add a New payslip';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('payslip/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('payslip/success');
    }
}

}