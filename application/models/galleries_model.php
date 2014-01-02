<?php

class Galleries_model extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->helper('date');
  }

  public function get_galleries($slug = FALSE) {
    if ($slug === FALSE) {
      $query = $this->db->get_where('galleries', array('status' => 'active'));
      return $query;
    }

    $query = $this->db->get_where('galleries', array('slug' => $slug));
    return $query->row_array();
  }

  public function set_galleries() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $location = "uploads/galleries/" . $_FILES['gallery_image']['name'];
    $data = array(
        'title' => $this->input->post('title'),
        'gallery_image' => $location,
        'status' => $this->input->post('status'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('galleries', $data);
  }

  public function update_galleries() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $slug_id = $this->uri->segment(3);
    $data = array(
        'title' => $this->input->post('title'),
        'gallery_image' => $location,
        'status' => $this->input->post('status'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('slug', $slug_id);
    $this->db->update('galleries', $data);
  }

}
