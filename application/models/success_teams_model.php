<?php

class Success_teams_model extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->helper('date');
  }

  public function get_success_teams($slug = FALSE) {
    if ($slug === FALSE) {
      $query = $this->db->get('success_teams');
      return $query->result_array();
    }

    $query = $this->db->get_where('success_teams', array('slug' => $slug));
    return $query->row_array();
  }

  public function set_success_teams() {
    $data = array(
        'name' => $this->input->post('name'),
        'address' => $this->input->post('address'),
        'position' => $this->input->post('position'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('success_teams', $data);
  }

  public function update_success_teams() {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $slug_id = $this->uri->segment(3);
    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('slug', $slug_id);
    $this->db->update('success_teams', $data);
  }

}
