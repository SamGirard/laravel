<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acteurs')->insert([
            [
                'id' => 1,
                'nom' => 'Leonardo DiCaprio',
                'dateNaissance' => '11 novembre 1974',
                'lieuNaissance' => 'Los Angeles, Californie, États-Unis',
                'portrait' => 'https://prod-images.tcm.com/Master-Profile-Images/LeonardoDiCaprio.jpg',
                'age' => '48'
            ],
            [
                'id' => 2,
                'nom' => 'Al Pacino',
                'dateNaissance' => '25 avril 1940',
                'lieuNaissance' => 'Spanish Harlem, New York, État de New York, États-Unis',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/Al_Pacino.jpg',
                'age' => '83'
            ],
            [
                'id' => 3,
                'nom' => 'Marlon Brando',
                'dateNaissance' => '3 avril 1924',
                'lieuNaissance' => 'Omaha, Nebraska, États-Unis',
                'portrait' => 'https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQ5-5i-xd0ny8Rk_Ck1C803Tdg4uIrXDBJPSjQbjQcgWmi6fJcBR-E3hFfYBu7yd-Yi',
                'age' => 'décédé'
            ],



/*
            [
                'id' => 1,
                'nom' => '',
                'dateNaissance' => '',
                'lieuNaissance' => '',
                'portrait' => '',
                'age' => 
            ],

            */
        ]);
    }
}
