<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class PositionsMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'positionid' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'positionname' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'parentid' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => FALSE,
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
        $this->forge->addKey('positionid', TRUE);
        $this->forge->createTable('positions');
    }

    public function down()
    {
        $this->forge->dropTable('positions');
    }
}
