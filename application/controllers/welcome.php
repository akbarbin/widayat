<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Welcome extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   * 	- or -  
   * 		http://example.com/index.php/welcome/index
   * 	- or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
  }

  public function index() {
    $data['news'] = $this->news_model->get_news_home();
    $this->load->view('layout/guest', $data);
  }

  public function profil() {
    $this->load->model('success_teams_model');
    $data['success_teams'] = $this->success_teams_model->get_success_teams();
    $this->load->view('layout/guest', $data);
  }

  public function padangan_isi_hati_nurani() {
    $this->load->view('layout/guest');
  }

  public function gallery() {
    $this->load->model('galleries_model');
    $data['galleries'] = $this->galleries_model->get_galleries();
    $this->load->view('layout/guest', $data);
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */