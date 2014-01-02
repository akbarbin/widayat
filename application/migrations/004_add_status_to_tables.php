<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_status_to_tables extends CI_Migration {

  public function up() {
    $this->dbforge->add_column('contacts', array('status' => array(
            'type' => 'VARCHAR',
            'constraint' => '10',
        )), 'content');
    $this->dbforge->add_column('galleries', array('status' => array(
            'type' => 'VARCHAR',
            'constraint' => '10',
        )), 'gallery_image');
    $this->dbforge->add_column('news', array('status' => array(
            'type' => 'VARCHAR',
            'constraint' => '10',
        )), 'total_read');
  }

  public function down() {
    $this->dbforge->drop_column('contacts', 'status');
    $this->dbforge->drop_column('galleries', 'status');
    $this->dbforge->drop_column('news', 'status');
  }

}
