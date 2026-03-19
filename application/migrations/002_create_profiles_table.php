<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_profiles_table extends CI_Migration {

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
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => TRUE
            ),
            'address' => array(
                'type' => 'TEXT',
                'null' => TRUE
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('profiles');

        $this->db->query('ALTER TABLE profiles ADD UNIQUE KEY unique_profile_user (user_id)');
        $this->db->query('ALTER TABLE profiles ADD CONSTRAINT fk_profiles_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE');
    }

    public function down()
    {
        $this->dbforge->drop_table('profiles');
    }
}