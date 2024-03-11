<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;


class Menus extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'menuid' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'menucode' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'menuname' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ],
            'parentid' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => TRUE,
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => TRUE,
            ],
            'icon' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => TRUE,
            ],
            'order_at' => [
                'type' => 'TINYINT',
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
        $this->forge->addKey('menuid', TRUE);
        $this->forge->createTable('menus');
    }

    public function down()
    {
        $this->forge->dropTable('menus');
    }
}
