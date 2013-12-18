<?php

class News extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
  }

  public function index() {
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'News archive';

    $this->load->view('shared/header');
    $this->load->view('news/index', $data);
    $this->load->view('shared/footer');
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Judul', 'required');
    $this->form_validation->set_rules('text', 'Deskripsi', 'required');
    if (empty($_FILES['news_image']['name'])) {
      $this->form_validation->set_rules('userfile', 'Document', 'required');
    }

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '200';
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('news_image')) {
      $data = array('error' => $this->upload->display_errors());
    } else {
      $data = array('upload_data' => $this->upload->data());
    }

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('shared/header');
      $this->load->view('admin/news/create', $data);
      $this->load->view('shared/footer');
    } else {
      $this->news_model->set_news();
      redirect('admin/news');
    }
  }

  public function edit($slug) {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['news_item'] = $this->news_model->get_news($slug);

    if (empty($data['news_item'])) {
      show_404();
    }

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'text', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('shared/header');
      $this->load->view('news/edit', $data);
      $this->load->view('shared/footer');
    } else {
      $this->news_model->update_news();
      redirect('news');
    }
  }

  public function show($slug) {
    $data['news_item'] = $this->news_model->get_news($slug);

    if (empty($data['news_item'])) {
      show_404();
    }

    $data['title'] = $data['news_item']['title'];

    $this->load->view('shared/header');
    $this->load->view('news/show', $data);
    $this->load->view('shared/footer');
  }

  public function destroy($slug) {
    $this->db->delete('news', array('slug' => $slug));
    redirect('news');
  }

}
