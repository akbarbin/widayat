<?php

class Galleries extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('galleries_model');
  }

  public function index() {
    $data['galleries'] = $this->galleries_model->get_galleries();
    $this->load->view('layout/admin', $data);
  }

  public function create() {
    $data['options_select'] = $this->options_select();

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Judul', 'required');
    if (empty($_FILES['gallery_image']['name'])) {
      $this->form_validation->set_rules('gallery_image', 'Gambar', 'required');
    }

    $config['upload_path'] = './uploads/galleries/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2000';
    $this->load->library('upload', $config);

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('layout/admin', $data);
    } else {
      // FIX ME: change into method
      if (!$this->upload->do_upload('gallery_image')) {
        $data = array('error' => $this->upload->display_errors());
        $this->load->view('layout/admin', $data);
        $this->session->set_flashdata('error', 'Gallery baru berhasil dibuat.');
      } else {
        $this->galleries_model->set_galleries();
        $data = array('upload_data' => $this->upload->data());
        $this->session->set_flashdata('succes', 'Gallery baru berhasil dibuat.');
        redirect('admin/galleries');
      }
    }
  }

  public function edit($id) {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['galleries_item'] = $this->galleries_model->get_galleries($id);
    $data['options_select'] = $this->options_select();
    if (empty($_FILES['gallery_image']['name'])) {
      $this->form_validation->set_rules('gallery_image', 'Gambar', 'required');
    }

    $config['upload_path'] = './uploads/galleries/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2000';
    $this->load->library('upload', $config);


    if (empty($data['galleries_item'])) {
      show_404();
    }

    $this->form_validation->set_rules('title', 'Title', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('layout/admin', $data);
    } else {
      // FIX ME: change into method
      if (!$this->upload->do_upload('gallery_image')) {
        $data = array('error' => $this->upload->display_errors());
        $this->load->view('layout/admin', $data);
        $this->session->set_flashdata('error', 'Gallery belum berhasil diubah.');
      } else {
        $this->galleries_model->update_galleries($id);
        $data = array('upload_data' => $this->upload->data());
        $this->session->set_flashdata('succes', 'Gallery baru berhasil diubah.');
        redirect('admin/galleries');
      }
    }
  }

  public function show($slug) {
    $data['galleries_item'] = $this->galleries_model->get_galleries($slug);
    if (empty($data['galleries_item'])) {
      show_404();
    }

    $data['title'] = $data['galleries_item']['title'];

    $this->load->view('layout/admin', $data);
  }

  public function destroy($id) {
    $this->db->delete('galleries', array('id' => $id));
    redirect('admin/galleries');
  }

  public function options_select() {
    $options = array(
        'nonactive' => 'Non Aktif',
        'active' => 'Aktif'
    );
    return $options;
  }

}
