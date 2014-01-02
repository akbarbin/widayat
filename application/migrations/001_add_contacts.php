<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_contacts extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'id' => array(
            'type' => 'INT',
            'constraint' => 5,
//            'unsigned' => TRUE,
//            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'name' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'email' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'phone_number' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
        ),
        'content' => array(
            'type' => 'TEXT',
        ),
        'created_at' => array(
            'type' => 'DATETIME',
        ),
        'updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));

    $this->dbforge->create_table('contacts');
  }

  public function down() {
    $this->dbforge->drop_table('contacts');
  }

}
