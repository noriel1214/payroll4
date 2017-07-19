<?php
class Message extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('message_model');
                $this->load->model('employee_model');
                $this->load->helper('url_helper');
        }

public function index($msg_id = 0)
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['message'] = $this->message_model->get_message();
    $data['message_item'] = $this->message_model->get_message($msg_id);
    $data['employee'] = $this->employee_model->get_employee();
    
    $data['title'] = 'Private Messaging';

    $this->load->view('templates/header', $data);
    $this->load->view('message/index', $data);
    $this->load->view('templates/footer');
    
}
        
public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('msg_recipient', 'Recipient', 'required');

    $preservedata = array(
        'msg_id' => $this->input->post('msg_id'),
        'msg_subject' => $this->input->post('msg_subject'),
        'msg_recipient' => $this->input->post('msg_recipient'),
        'msg_sender' => $this->input->post('msg_sender'),
        'msg_msg' => $this->input->post('msg_msg')
    );
                 
        $data['message_item'] = $preservedata;
        
    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('message/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_message();
        $data['message'] = $this->message_model->get_message();
        $emptymessage = array(
        'msg_id' => '',
        'msg_subject' => '',
        'msg_recipient' => '',
        'msg_sender' => '',
        'msg_msg' => ''
        );
                 
        $data['message_item'] = $emptymessage;
        
        $this->load->view('templates/header', $data);
        $this->load->view('message/index');
        $this->load->view('templates/footer');
    }
}

}