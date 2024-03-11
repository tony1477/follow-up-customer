<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        for($i=0; $i<10; $i++):
            $data = [
                'fullname' => $faker->name(),
                'gender' => $faker->randomElement(['L','P']),
                'mobile_phone' => $faker->phoneNumber(),
                'join_date' => $faker->date(),
                'positionid' => $faker->numberBetween(1,6),
            ];
            $this->db->table('employees')->insert($data);
        endfor;

    }
}
