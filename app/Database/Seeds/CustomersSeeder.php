<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CustomersSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        for($i=0; $i<10; $i++):
            $data = [
                'name' => $faker->name(),
                'address' => $faker->address(),
                'mobilephone' => $faker->phoneNumber(),
                'mobilephone_2' => $faker->unique()->phoneNumber(),
                'email' => $faker->email(),
            ];
            $this->db->table('customers')->insert($data);
        endfor;
    }
}
