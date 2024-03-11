<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Menus extends Seeder
{
    public function run()
    {
        $data = [
            [
                'menucode' => 'home',
                'menuname' => 'Home',
                'parentid' => NULL,
                'url' => '/home',
                'order_at' => 1,
            ],
            [
                'menucode' => 'customer',
                'menuname' => 'Customer',
                'parentid' => NULL,
                'url' => '/customer',
                'order_at' => 2,
            ],
            [
                'menucode' => 'employee',
                'menuname' => 'Employee',
                'parentid' => NULL,
                'url' => '/employee',
                'order_at' => 3,
            ],
            [
                'menucode' => 'position',
                'menuname' => 'Position',
                'parentid' => NULL,
                'url' => '/position',
                'order_at' => 4,
            ],
            [
                'menucode' => 'process',
                'menuname' => 'Process',
                'parentid' => NULL,
                'url' => '#',
                'order_at' => 5,
            ],
            [
                'menucode' => 'follow_up',
                'menuname' => 'Follow Up',
                'parentid' => 5,
                'url' => '/fu_customer',
                'order_at' => 1,
            ],
            [
                'menucode' => 'feedback',
                'menuname' => 'Feedback',
                'parentid' => 5,
                'url' => '/fe_customer',
                'order_at' => 2,
            ],
            [
                'menucode' => 'logout',
                'menuname' => 'Logout',
                'parentid' => NULL,
                'url' => '/logout',
                'order_at' => 6,
            ],
        ];
        $this->db->table('menus')->insertBatch($data);
    }
}
