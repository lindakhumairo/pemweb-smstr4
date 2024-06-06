<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        /*$data = [
            [
                'name' => 'Tomy Syafrudin',
                'address' => 'Jl Gus dur no 150 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'name' => 'Slamet Kopling',
                'address' => 'Jl Gus dur no 150 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'name' => 'Rusdi',
                'address' => 'Jl Gus dur no 150 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]
        ];*/

        //simple query
        //$this->db->query('INSERT INTO penulis (name, address, created_at, updated_at) VALUES(:name:, :address:, :created_at:, :updated_at:)', $data);

        $faker = \Faker\Factory::create('pt_PT');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'name' => $faker->name,
                'address' => $faker->address,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('penulis')->insert($data);
        }
    }
}
