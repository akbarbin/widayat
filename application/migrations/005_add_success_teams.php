<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_success_teams extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'name' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'address' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'position' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
        ),
        'phone_number' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
        ),
        'status' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
            'default' => 'active'
        ),
        'created_at' => array(
            'type' => 'DATETIME',
        ),
        'updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('success_teams');
  }

  public function down() {
    $this->dbforge->drop_table('success_teams');
  }

}
