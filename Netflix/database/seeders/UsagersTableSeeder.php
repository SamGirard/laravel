<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id' => 1,
                'nom' => 'admin',
                'prenom' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'profil' => "",
            ],
            [
                'id' => 2,
                'nom' => 'Séguin',
                'prenom' => 'Félix',
                'username' => 'Felix1',
                'email' => 'felix@gmail.com',
                'password' => Hash::make('Felix'),
                'role' => 'normal',
                'profil' => "",
            ],
            [
                'id' => 3,
                'nom' => 'Scott',
                'prenom' => 'Antoine',
                'username' => 'Tony123',
                'email' => 'tony_sc@gmail.com',
                'password' => Hash::make('Antoine'),
                'role' => 'kid',
                'profil' => "",
            ],
            /*
            [
                'id' => ,
                'nom' => '',
                'prenom' => '',
                'username' => '',
                'email' => '',
                'password' => Hash::make($motDePasse),
                'role' => ''
            ],
            */
        ]);
    }
}
