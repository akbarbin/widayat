<?php

class News_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_news($slug = FALSE) {
    if ($slug === FALSE) {
      $query = $this->db->get('news');
      return $query->result_array();
    }

    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  /* Get news on home page */

  public function get_news_home() {
    $query = $this->db->query('SELECT * FROM news LIMIT 2');
    return $query->result_array();
  }

  public function set_news() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'news_image' => $this->input->post('news_image')
    );
    return $this->db->insert('news', $data);
  }

  public function update_news() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $slug_id = $this->uri->segment(3);
    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text')
    );
    $this->db->where('slug', $slug_id);
    $this->db->update('news', $data);
  }

}
