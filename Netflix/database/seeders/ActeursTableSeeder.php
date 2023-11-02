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
                'age' => 48
            ],
        ]);
    }
}
