<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;


class CustomerMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'customerid' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => TRUE,
            ],
            'mobilephone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ],
            'mobilephone_2' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => FALSE,
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => FALSE,
                'default' => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addKey('customerid', TRUE);
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
