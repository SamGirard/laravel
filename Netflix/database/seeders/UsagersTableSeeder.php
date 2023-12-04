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
                'profil' => "../images/profils/police.jpg",
            ],
            [
                'id' => 2,
                'nom' => 'Séguin',
                'prenom' => 'Félix',
                'username' => 'felix',
                'email' => 'felix@gmail.com',
                'password' => Hash::make('felix'),
                'role' => 'normal',
                'profil' => "../images/profils/madame.png",
            ],
            [
                'id' => 3,
                'nom' => 'Scott',
                'prenom' => 'Antoine',
                'username' => 'antoine',
                'email' => 'tony_sc@gmail.com',
                'password' => Hash::make('antoine'),
                'role' => 'kid',
                'profil' => "../images/profils/kid.png",
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
