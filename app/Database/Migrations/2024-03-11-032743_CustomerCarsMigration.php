<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CustomerCarsMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cust_car_id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'customerid' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'model' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ],
            'color' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ],
            'purch_year' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => TRUE,
            ],
            'plat_number' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
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
        $this->forge->addKey('cust_car_id', TRUE);
        $this->forge->createTable('customer_cars');
    }

    public function down()
    {
        $this->forge->dropTable('customer_cars');
    }
}
