<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i <= 100; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'created_at' =>  Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ];

            $this->db->table('tb_orang')->insert($data);
        }

        // $data = [
        //     [
        //         'nama' => 'darth',
        //         'alamat' => 'Jl ABC 123 No. 16',
        //         'created_at' =>  Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        //     [
        //         'nama' => 'Dody',
        //         'alamat' => 'Jl JKL 123 No. 11',
        //         'created_at' =>  Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        //     [
        //         'nama' => 'Jony',
        //         'alamat' => 'Jl BCD 123 No. 10',
        //         'created_at' =>  Time::now(),
        //         'updated_at' => Time::now(),
        //     ]
        // ];

        // Simple Queries
        // $this->db->query('INSERT INTO tb_orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('tb_orang')->insert($data);
        // $this->db->table('tb_orang')->insertBatch($data);
    }
}
