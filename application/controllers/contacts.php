<?php

class Contacts extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model( 'contacts_model');
  }

  public function index() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a contacts item';

    $this->form_validation->set_rules('name', 'Title', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('phone_number', 'Nomer Telephone', 'required');
    $this->form_validation->set_rules('content', 'Pesan', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('shared/header');
      $this->load->view('contacts/index', $data);
      $this->load->view('shared/footer');
    } else {
      $this->contacts_model->set_contacts();
      $this->contacts_model->sending_email_to_me();
      redirect('contacts');
    }
  }

}
