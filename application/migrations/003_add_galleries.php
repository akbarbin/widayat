<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_galleries extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'title' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'gallery_image' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'created_at' => array(
            'type' => 'DATETIME',
        ),
        'updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('galleries');
  }

  public function down() {
    $this->dbforge->drop_table('galleries');
  }

}
