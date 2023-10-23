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
                    'nom' => 'Christopher Nolan',
                    'dateNaissance' => '30 juillet 1970',
                    'lieuNaissance' => 'Royaume-Uni',
                    'portrait' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xuAIuYSmsUzKlUMBFGVZaWsY3DZ.jpg',
                ],
                [
                    'id' => 2,
                    'nom' => 'Frank Darabont',
                    'dateNaissance' => '28 janvier 1959',
                    'lieuNaissance' => 'Montbéliard, France',
                    'portrait' => 'https://th.bing.com/th/id/OIP.1BF8uS5hYZcSLjpSz7O17AHaJ4?pid=ImgDet&rs=1',
                ],
                [
                    'id' => 3,
                    'nom' => 'Peter Jackson',
                    'dateNaissance' => '31 octobre 1961',
                    'lieuNaissance' => 'Nouvelle-Zélande',
                    'portrait' => 'https://th.bing.com/th/id/R.175f72c53f9f896ac15b29f0574ac4b6?rik=IQLH6r4GHBCtsA&riu=http%3a%2f%2fwww2.pictures.zimbio.com%2fgi%2fWest%2bMemphis%2bPortraits%2b2012%2bSundance%2bFilm%2b8vVirV4e7LUx.jpg&ehk=XdiXi93oF12ARFu%2bP4ZmP55dybsg%2fuEGxiutjBdA4Cs%3d&risl=&pid=ImgRaw&r=0',
                ],
                [
                    'id' => 4,
                    'nom' => 'Lana Wachowski',
                    'dateNaissance' => '21 juin 1965',
                    'lieuNaissance' => 'Chicago, Illinois, USA',
                    'portrait' => 'https://th.bing.com/th/id/OIP.f2cnpaNR640TPoeL3KvyuAHaLA?pid=ImgDet&rs=1',
                ],
                [
                    'id' => 5,
                    'nom' => 'Emma Thomas',
                    'dateNaissance' => '27 septembre 1971',
                    'lieuNaissance' => 'Londres, Royaume-Uni',
                    'portrait' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6GemtNCy856iLho6WRsFASxQTAp.jpg',
                ],
                [
                    'id' => 6,
                    'nom' => 'David Heyman',
                    'dateNaissance' => '26 juillet 1961',
                    'lieuNaissance' => 'London, Royaume-Uni',
                    'portrait' => 'https://th.bing.com/th/id/OIP.VPe9O3OHCeMo6HgjtWiIDAHaLH?pid=ImgDet&rs=1',
                ],
                [
                    'id' => 7,
                    'nom' => 'Kathryn Bigelow',
                    'dateNaissance' => '27 novembre 1951',
                    'lieuNaissance' => 'San Carlos, Californie, USA',
                    'portrait' => 'https://th.bing.com/th/id/R.74698df5c5c95ffecb9e571d2c594299?rik=aI8mAlROogMCSQ&pid=ImgRaw&r=0',
                ],
                [
                    'id' => 8,
                    'nom' => 'Joel Silver',
                    'dateNaissance' => '14 juillet 1952',
                    'lieuNaissance' => 'South Orange, New Jersey, USA',
                    'portrait' => 'https://th.bing.com/th/id/OIP.WSysRguUMImHMIj_ISyd1AHaK4?pid=ImgDet&rs=1',
                ],
                [
                    'id' => 9,
                    'nom' => 'Martin Scorsese',
                    'dateNaissance' => '17 novembre 1942',
                    'lieuNaissance' => 'New York, USA',
                    'portrait' => 'https://i.pinimg.com/originals/94/c2/4e/94c24e1ca12d6ef94e9d1cc87f9e0b18.jpg',
                ],
                [
                    'id' => 10,
                    'nom' => 'Quentin Tarantino',
                    'dateNaissance' => '27 mars 1963',
                    'lieuNaissance' => 'Knoxville, Tennessee, USA',
                    'portrait' => 'https://th.bing.com/th/id/R.07729d3c25c1e49246dd17e709a46c56?rik=U6VvGiiDH2%2fEbQ&pid=ImgRaw&r=0',
                ],
            ]);
    }
}
