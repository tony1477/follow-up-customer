<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PositionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'positionname' => 'BM',
                'parentid' => NULL,
            ],
            [
                'positionname' => 'SPV A',
                'parentid' => 1,
            ],
            [
                'positionname' => 'SPV B',
                'parentid' => 1,
            ],
            [
                'positionname' => 'SALES A',
                'parentid' => 2,
            ],
            [
                'positionname' => 'SALES B',
                'parentid' => 3,
            ],
            [
                'positionname' => 'BLA',
                'parentid' => NULL,
            ],
        ];

        $this->db->table('positions')->insertBatch($data);
    }
}
