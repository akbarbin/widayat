<?php

class Success_teams extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('success_teams_model');
  }

  public function index() {
    $data['success_teams'] = $this->success_teams_model->get_success_teams();
    $data['title'] = 'Success teams';

    $this->load->view('layout/admin', $data);
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a success_teams item';

    $this->form_validation->set_rules('name', 'Nama', 'required');
    $this->form_validation->set_rules('address', 'Alamat', 'required');
    $this->form_validation->set_rules('position', 'Jabatan', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('layout/admin', $data);
    } else {
      $this->success_teams_model->set_success_teams();
      $this->session->set_flashdata('succes', 'Team baru berhasil dibuat.');
      redirect('admin/success_teams');
    }
  }

  public function edit($slug) {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['success_teams_item'] = $this->success_teams_model->get_success_teams($slug);

    if (empty($data['success_teams_item'])) {
      show_404();
    }

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'text', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('layout/admin', $data);
    } else {
      $this->success_teams_model->update_success_teams();
      redirect('success_teams');
    }
  }

  public function show($slug) {
    $data['success_teams_item'] = $this->success_teams_model->get_success_teams($slug);
    if (empty($data['success_teams_item'])) {
      show_404();
    }
    $data['title'] = $data['success_teams_item']['title'];
    $this->load->view('layout/admin', $data);
  }

  public function destroy($slug) {
    $this->db->delete('success_teams', array('slug' => $slug));
    redirect('success_teams');
  }

}
