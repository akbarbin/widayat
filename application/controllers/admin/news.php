<?php

class News extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('text');
  }

  public function index() {
    $data['news'] = $this->news_model->get_news();
    $data['popular_news'] = $this->news_model->popular_news();
    $data['title'] = 'News archive';
    $this->load->view('layout/admin', $data);
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Judul', 'required');
    $this->form_validation->set_rules('text', 'Deskripsi', 'required');
    if (empty($_FILES['news_image']['name'])) {
      $this->form_validation->set_rules('news_image', 'Gambar', 'required');
    }

    $config['upload_path'] = './uploads/news/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2000';
    $this->load->library('upload', $config);

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('layout/admin', $data);
    } else {
      // FIX ME: change into method
      if (!$this->upload->do_upload('news_image')) {
        $data = array('error' => $this->upload->display_errors());
        $this->load->view('layout/admin', $data);
        $this->session->set_flashdata('error', 'Artikel baru berhasil dibuat.');
      } else {
        $this->news_model->set_news();
        $data = array('upload_data' => $this->upload->data());
        $this->session->set_flashdata('succes', 'Artikel baru berhasil dibuat.');
        redirect('admin/news');
      }
    }
  }

  public function edit($slug) {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['news_item'] = $this->news_model->get_news($slug);

    if (empty($data['news_item'])) {
      show_404();
    }

    $this->form_validation->set_rules('title', 'Judul', 'required');
    $this->form_validation->set_rules('text', 'Deskripsi', 'required');
    if (empty($_FILES['news_image']['name'])) {
      $this->form_validation->set_rules('news_image', 'Gambar', 'required');
    }

    $config['upload_path'] = './uploads/news/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2000';
    $this->load->library('upload', $config);

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('layout/admin', $data);
    } else {
      // FIX ME: change into method
      if (!$this->upload->do_upload('news_image')) {
        $data = array('error' => $this->upload->display_errors());
        $this->load->view('layout/admin', $data);
        $this->session->set_flashdata('error', 'Artikel baru berhasil diubah.');
      } else {
        $this->news_model->update_news();
        $data = array('upload_data' => $this->upload->data());
        $this->session->set_flashdata('succes', 'Artikel baru berhasil diubah.');
        redirect('admin/news');
      }
    }
  }

  public function show($slug) {
    $data['news_item'] = $this->news_model->get_news($slug);
    if (empty($data['news_item'])) {
      show_404();
    }
    $data['title'] = $data['news_item']['title'];
    $this->load->view('layout/admin', $data);
  }

  public function destroy($slug) {
    $this->db->delete('news', array('slug' => $slug));
    redirect('admin/news');
  }

}
