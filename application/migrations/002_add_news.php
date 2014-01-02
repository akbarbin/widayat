<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_news extends CI_Migration {

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
        'news_image' => array(
            'type' => 'VARCHAR',
            'constraint' => '255',
        ),
        'slug' => array(
            'type' => 'VARCHAR',
            'constraint' => '128',
        ),
        'text' => array(
            'type' => 'TEXT',
        ),
        'total_read' => array(
            'type' => 'INT',
            'constraint' => '4',
        ),
        'created_at' => array(
            'type' => 'DATETIME',
        ),
        'updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('news');
  }

  public function down() {
    $this->dbforge->drop_table('news');
  }

}
