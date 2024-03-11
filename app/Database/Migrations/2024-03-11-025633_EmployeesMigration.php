<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class EmployeesMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'employeeid' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
            ],
            'gender' => [
                'type' => 'CHAR',
                'constraint' => '1',
                'null' => FALSE,
            ],
            'mobile_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ],
            'join_date' => [
                'type' => 'DATE',
                'null' => TRUE,
            ],
            'positionid' => [
                'type' => 'INT',
                'unsigned' => TRUE,
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
        $this->forge->addKey('employeeid', TRUE);
        $this->forge->createTable('employees');
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
