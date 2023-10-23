<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
                [
                    'id' => 1,
                    'nom' => 'Christopher Nolannnnnn',
                    'dateNaissance' => '30 juillet 1970',
                    'lieuNaissance' => 'Royaume-Uni',
                    'portrait' => 'nolan.jpg',
                ],
                [
                    'id' => 2,
                    'nom' => 'Frank Darabont',
                    'dateNaissance' => '28 janvier 1959',
                    'lieuNaissance' => 'Montbéliard, France',
                    'portrait' => 'darabont.jpg',
                ],
                [
                    'id' => 3,
                    'nom' => 'Peter Jackson',
                    'dateNaissance' => '31 octobre 1961',
                    'lieuNaissance' => 'Nouvelle-Zélande',
                    'portrait' => 'jackson.jpg',
                ],
                [
                    'id' => 4,
                    'nom' => 'Lana Wachowski',
                    'dateNaissance' => '21 juin 1965',
                    'lieuNaissance' => 'Chicago, Illinois, USA',
                    'portrait' => 'lana_wachowski.jpg',
                ],
                [
                    'id' => 5,
                    'nom' => 'Emma Thomas',
                    'dateNaissance' => '27 septembre 1971',
                    'lieuNaissance' => 'Londres, Royaume-Uni',
                    'portrait' => 'emma_thomas.jpg',
                ],
                [
                    'id' => 6,
                    'nom' => 'David Heyman',
                    'dateNaissance' => '26 juillet 1961',
                    'lieuNaissance' => 'London, Royaume-Uni',
                    'portrait' => 'david_heyman.jpg',
                ],
                [
                    'id' => 7,
                    'nom' => 'Kathryn Bigelow',
                    'dateNaissance' => '27 novembre 1951',
                    'lieuNaissance' => 'San Carlos, Californie, USA',
                    'portrait' => 'kathryn_bigelow.jpg',
                ],
                [
                    'id' => 8,
                    'nom' => 'Joel Silver',
                    'dateNaissance' => '14 juillet 1952',
                    'lieuNaissance' => 'South Orange, New Jersey, USA',
                    'portrait' => 'joel_silver.jpg',
                ],
                [
                    'id' => 9,
                    'nom' => 'Martin Scorsese',
                    'dateNaissance' => '17 novembre 1942',
                    'lieuNaissance' => 'New York, USA',
                    'portrait' => 'scorsese.jpg',
                ],
                [
                    'id' => 10,
                    'nom' => 'Quentin Tarantino',
                    'dateNaissance' => '27 mars 1963',
                    'lieuNaissance' => 'Knoxville, Tennessee, USA',
                    'portrait' => 'tarantino.jpg',
                ],
            ]);
    }
}
