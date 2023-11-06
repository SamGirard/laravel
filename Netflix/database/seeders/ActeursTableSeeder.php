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
            ],[
                'id' => 4,
                'nom' => 'Matthew McConaughey',
                'dateNaissance' => '4 novembre 1969',
                'lieuNaissance' => 'Uvalde, Texas, États-Unis',
                'portrait' => 'https://m.media-amazon.com/images/M/MV5BMTg0MDc3ODUwOV5BMl5BanBnXkFtZTcwMTk2NjY4Nw@@._V1_FMjpg_UX1000_.jpg',
                'age' => '54'
            ],[
                'id' => 5,
                'nom' => 'Sam Worthington',
                'dateNaissance' => '2 août 1976',
                'lieuNaissance' => 'Godalming, Royaume-Uni',
                'portrait' => 'https://ntvb.tmsimg.com/assets/assets/218027_v9_bc.jpg',
                'age' => '47'
            ],[
                'id' => 6,
                'nom' => 'Christian Bale',
                'dateNaissance' => '30 janvier 1974',
                'lieuNaissance' => 'Haverfordwest, Pays de Galles, Royaume-Uni',
                'portrait' => 'https://m.media-amazon.com/images/M/MV5BMTkxMzk4MjQ4MF5BMl5BanBnXkFtZTcwMzExODQxOA@@._V1_.jpg',
                'age' => '49'
            ],[
                'id' => 7,
                'nom' => 'Samuel L. Jackson',
                'dateNaissance' => ' 21 décembre 1948',
                'lieuNaissance' => 'Washington, D.C., États-Unis',
                'portrait' => 'https://www.themoviedb.org/t/p/w500/nCJJ3NVksYNxIzEHcyC1XziwPVj.jpg',
                'age' => '74'
            ],[
                'id' => 8,
                'nom' => 'Morgan Freeman',
                'dateNaissance' => '1er juin 1937',
                'lieuNaissance' => 'Memphis, Tennessee, États-Unis',
                'portrait' => 'https://resizing.flixster.com/qOJzL7PYRxocjLghhP4iTHs9114=/300x300/v2/http://media.baselineresearch.com/images/1260582/1260582_full.jpg',
                'age' => '86'
            ],[
                'id' => 9,
                'nom' => 'Elijah Wood',
                'dateNaissance' => '28 janvier 1981',
                'lieuNaissance' => 'Cedar Rapids, Iowa, États-Unis',
                'portrait' => 'https://static.independent.co.uk/2021/09/06/16/GettyImages-908475512.jpg',
                'age' => '42'
            ],[
                'id' => 10,
                'nom' => 'Keanu Reeves',
                'dateNaissance' => '2 septembre 1964',
                'lieuNaissance' => 'Beyrouth, Liban',
                'portrait' => 'https://m.media-amazon.com/images/M/MV5BNGJmMWEzOGQtMWZkNS00MGNiLTk5NGEtYzg1YzAyZTgzZTZmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg',
                'age' => '59'
            ],[
                'id' => 11,
                'nom' => 'Henry Cavill',
                'dateNaissance' => '5 mai 1983',
                'lieuNaissance' => 'Jersey, Îles Anglo-Normandes, Royaume-Uni',
                'portrait' => 'https://hips.hearstapps.com/hmg-prod/images/henry-cavill-6455184b166f4.jpg?crop=1.00xw:0.699xh;0,0.0227xh&resize=980:*',
                'age' => '40'
            ],[
                'id' => 12,
                'nom' => 'Sam Neill',
                'dateNaissance' => '14 septembre 1947',
                'lieuNaissance' => 'Omagh, Irlande du Nord',
                'portrait' => 'https://static.foxnews.com/foxnews.com/content/uploads/2023/10/sam-neill.jpg',
                'age' => '76'
            ],[
                'id' => 13,
                'nom' => 'Russell Crowe',
                'dateNaissance' => '7 avril 1964',
                'lieuNaissance' => 'Wellington, Nouvelle-Zélande',
                'portrait' => 'https://people.com/thmb/y3pfKoTOfqCavmSfm0PpKnxvNYM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(799x739:801x741)/russell-crowe-655563de9223497f8efebefe05dce08f.jpg',
                'age' => '59'
            ],[
                'id' => 14,
                'nom' => 'Harvey Keitel',
                'dateNaissance' => '13 mai 1939',
                'lieuNaissance' => 'Brooklyn, New York, États-Unis',
                'portrait' => 'https://www.hollywoodreporter.com/wp-content/uploads/2022/07/MCDNATR_EC062-copy.jpg?w=1296',
                'age' => '84'
            ],[
                'id' => 15,
                'nom' => 'Tim Roth',
                'dateNaissance' => '14 mai 1961',
                'lieuNaissance' => 'Dulwich, Londres, Angleterre',
                'portrait' => 'https://static.wikia.nocookie.net/marvelmovies/images/2/27/Tim_Roth.jpg/revision/latest?cb=20220827200356',
                'age' => '62'
            ],[
                'id' => 16,
                'nom' => 'Pam Grier',
                'dateNaissance' => '26 mai 1949',
                'lieuNaissance' => 'Winston-Salem, Caroline du Nord, États-Unis',
                'portrait' => 'https://ntvb.tmsimg.com/assets/assets/74020_v9_bc.jpg',
                'age' => '74'
            ],[
                'id' => 17,
                'nom' => 'Kurt Russell',
                'dateNaissance' => '17 mars 1951',
                'lieuNaissance' => 'Springfield, Massachusetts, États-Unis',
                'portrait' => 'https://cdn.britannica.com/54/206654-050-31D54746/Kurt-Russell-2017.jpg',
                'age' => '72'
            ],[
                'id' => 18,
                'nom' => 'Jamie Foxx',
                'dateNaissance' => '13 décembre 1967',
                'lieuNaissance' => 'Terrell, Texas, États-Unis',
                'portrait' => 'https://hips.hearstapps.com/hmg-prod/images/jamie-foxx-arrives-at-the-world-premiere-of-netflixs-day-news-photo-1692128774.jpg',
                'age' => '55'
            ],[
                'id' => 19,
                'nom' => 'Uma Thurman',
                'dateNaissance' => '29 avril 1970',
                'lieuNaissance' => 'Boston, Massachusetts, États-Unis',
                'portrait' => 'https://m.media-amazon.com/images/M/MV5BMjMxNzk1MTQyMl5BMl5BanBnXkFtZTgwMDIzMDEyMTE@._V1_FMjpg_UX1000_.jpg',
                'age' => '53'
            ],[
                'id' => 20,
                'nom' => 'Brad Pitt',
                'dateNaissance' => '18 décembre 1963',
                'lieuNaissance' => 'Shawnee, Oklahoma, États-Unis',
                'portrait' => 'https://images.mubicdn.net/images/cast_member/2552/cache-207-1524922850/image-w856.jpg?size=800x',
                'age' => '59'
            ],[
                'id' => 21,
                'nom' => 'Bryan Cranston',
                'dateNaissance' => '18 décembre 1963',
                'lieuNaissance' => 'Shawnee, Oklahoma, États-Unis',
                'portrait' => 'https://www.earwolf.com/wp-content/uploads/2013/11/7495.jpg',
                'age' => '67'
            ],[
                'id' => 22,
                'nom' => 'Ryan Gosling',
                'dateNaissance' => '18 décembre 1963',
                'lieuNaissance' => 'Shawnee, Oklahoma, États-Unis',
                'portrait' => 'https://www.parismatch.com/lmnr/var/pm/public/media/image/Ryan-Gosling_0.jpg?VersionId=WCgOXg9JVrpBupeo682T8HTnzTwfBb3p',
                'age' => '42'
            ],[
                'id' => 23,
                'nom' => 'Millie Bobby Brown',
                'dateNaissance' => '19 février 2004',
                'lieuNaissance' => 'Marbella, Andalousie, Espagne',
                'portrait' => 'https://variety.com/wp-content/uploads/2023/10/GettyImages-1397284039.jpg',
                'age' => '19'
            ],[
                'id' => 24,
                'nom' => 'Bryce Dallas Howard',
                'dateNaissance' => '2 mars 1981',
                'lieuNaissance' => 'Los Angeles, Californie, États-Unis',
                'portrait' => 'https://people.com/thmb/XD2-M-HchZ3DV4tf9fkJduTkqSM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(587x286:589x288)/bryce-dallas-howard-jurassic-0922-e81b66c77f4044a4a5f039e8a5ff3b03.jpg',
                'age' => '42'
            ],[
                'id' => 25,
                'nom' => 'Winston Churchill',
                'dateNaissance' => '30 novembre 1874',
                'lieuNaissance' => 'Blenheim Palace, Angleterre',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Sir_Winston_Churchill_-_19086236948.jpg/800px-Sir_Winston_Churchill_-_19086236948.jpg',
                'age' => 'décedé'
            ],[
                'id' => 26,
                'nom' => 'Jennifer Aniston',
                'dateNaissance' => '11 février 1969',
                'lieuNaissance' => 'Sherman Oaks, Los Angeles, Californie, États-Unis',
                'portrait' => 'https://m.media-amazon.com/images/M/MV5BNjk1MjIxNjUxNF5BMl5BanBnXkFtZTcwODk2NzM4Mg@@._V1_FMjpg_UX1000_.jpg',
                'age' => '54'
            ],[
                'id' => 27,
                'nom' => 'Emilia Clarke',
                'dateNaissance' => '23 octobre 1986',
                'lieuNaissance' => 'Londres, Angleterre',
                'portrait' => 'https://resizing.flixster.com/3sgFPIIZhHd8nlJcnILLuePeMTk=/218x280/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/613075_v9_bb.jpg',
                'age' => '37'
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
