<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_api_keys_table extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'api_key' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'created_at' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('api_keys');

        $this->db->query('ALTER TABLE api_keys ADD CONSTRAINT fk_api_keys_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE');
    }

    public function down()
    {
        $this->dbforge->drop_table('api_keys');
    }
}