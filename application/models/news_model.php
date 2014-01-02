<?php

class News_model extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->helper('date');
  }

  public function get_news($slug = FALSE) {
    if ($slug === FALSE) {
      $query = $this->db->get('news');
      return $query;
    }

    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  /* Get news on home page */

  public function get_news_home() {
    $query = $this->db->query('SELECT * FROM news LIMIT 2');
    return $query;
  }

  public function set_news() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $location = "uploads/news/" . $_FILES['news_image']['name'];
    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'news_image' => $location,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('news', $data);
  }

  public function update_news() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $slug_id = $this->uri->segment(4);
    $location = "uploads/news/" . $_FILES['news_image']['name'];
    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'news_image' => $location,
        'updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('slug', $slug_id);
    $this->db->update('news', $data);
  }

  public function total_read_count($slug = FALSE) {
    $query = $this->db->get_where('news', array('slug' => $slug));
    $data_news = $query->row_array();
    $add_total_read = $data_news['total_read'] + 1;
    $data = array(
        'total_read' => $add_total_read
    );
    $this->db->where('slug', $slug);
    $this->db->update('news', $data);
  }

  public function popular_news() {
    $popular_news = $this->db->query("SELECT * FROM `news` ORDER BY total_read DESC LIMIT 5");
    return $popular_news;
  }

}
