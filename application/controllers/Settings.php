<?php
class Settings extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('settings_model');
                $this->load->helper('url_helper');
        }

public function index()
{
        $data['settings'] = $this->settings_model->get_settings();
        $data['title'] = 'System Settings';
    $this->load->helper('form');
    $this->load->library('form_validation');
    
        $this->load->view('templates/header', $data);
        $this->load->view('settings/index', $data);
        $this->load->view('templates/footer');
}

public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'System Settings';

    $this->form_validation->set_rules('system_name', 'System Name', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('settings/index');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_settings();
        $data['settings'] = $this->settings_model->get_settings();
        $this->load->view('templates/header', $data);
        $this->load->view('settings/index');
        $this->load->view('templates/footer');
    }
}

}