<?php

class Success_teams_model extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->helper('date');
  }

  public function get_success_teams($id = FALSE) {
    if ($id === FALSE) {
      $query = $this->db->get('success_teams');
      return $query;
    }

    $query = $this->db->get_where('success_teams', array('id' => $id));
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

  public function update_success_teams($id) {
    $this->load->helper('url');
    $data = array(
        'name' => $this->input->post('name'),
        'address' => $this->input->post('address'),
        'position' => $this->input->post('position'),
        'updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('id', $id);
    $this->db->update('success_teams', $data);
  }

}
