<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_bids_table extends CI_Migration {

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
            'amount' => array(
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ),
            'bid_time' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'default' => 'pending'
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('bids');

        $this->db->query('ALTER TABLE bids ADD CONSTRAINT fk_bids_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE');
    }

    public function down()
    {
        $this->dbforge->drop_table('bids');
    }
}