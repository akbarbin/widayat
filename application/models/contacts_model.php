<?php

class Contacts_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_contacts($slug = FALSE) {
    if ($slug === FALSE) {
      $query = $this->db->get('contacts');
      return $query->result_array();
    }

    $query = $this->db->get_where('contacts', array('slug' => $slug));
    return $query->row_array();
  }

  public function set_contacts() {
    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'phone_number' => $this->input->post('phone_number'),
        'content' => $this->input->post('content')
    );
    return $this->db->insert('contacts', $data);
  }

  public function update_contacts() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $slug_id = $this->uri->segment(3);
    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text')
    );
    $this->db->where('slug', $slug_id);
    $this->db->update('contacts', $data);
  }

  //created by: Muhamad Akbar Bin Widayat
  //Sending email to me
  public function sending_email_to_me() {
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'muhamadakbarbin@gmail.com',
        'smtp_pass' => 'akbarb1n',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1'
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from($_POST['email'], $_POST['name']);
    $this->email->to('irhmwidayat@gmail.com');
    $this->email->bcc('muhamadakbarbw@gmail.com');

    $this->email->subject('Contact Widayat');
    $this->email->message($_POST['content']);
    if (!$this->email->send()) {
      // Generate error
      print_r($this->email->print_debugger());
      die();
    }
  }

}
