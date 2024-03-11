<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CustomerCarsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        for($i=0; $i<10; $i++):
            $data = [
                'customerid' => $faker->unique()->numberBetween(1,10),
                'model' => $faker->text(),
                'type' => $faker->creditCardType(),
                'color' => $faker->colorName(),
                'purch_year' => $faker->year(),
                'plat_number' => $faker->text()
            ];
            $this->db->table('customer_cars')->insert($data);
        endfor;
    }
}
