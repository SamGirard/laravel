<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
              [
                'id' => 1,
                'titre' => 'The Godfather',
                'resume' => 'Lhistoire épique dune famille mafieuse italienne aux États-Unis.',
                'affiche' => 'https://i.pinimg.com/originals/e0/0c/65/e00c65ab6a7dacccd276c2fd434de8f5.jpg',
                'duree' => '2h55min',
                'realisateur_id' => 5,
                'producteur_id' => 3,
                'annee' => 1972,
                'cote' => '4,9 étoiles',
            ],
            [
                'id' => 2,
                'titre' => 'Fight Club',
                'resume' => 'Un homme déçu crée un club secret de combat dans le sous-sol dun bar.',
                'affiche' => 'https://image.tmdb.org/t/p/original/8dR7Jd7DOEhU8cZ734Va17NRoZ2.jpg',
                'duree' => '2h19min',
                'realisateur_id' => 1, 
                'producteur_id' => 9,
                'annee' => 1999,
                'cote' => '4,7 étoiles',
            ],
              [
                'id' => 3,
                'titre' => 'Inception',
                'resume' => 'Un voleur délite vole des informations en infiltrant les rêves de ses cibles.',
                'affiche' => 'https://th.bing.com/th/id/R.dd9827fbb0199cd20694739d54c346d8?rik=5JsQjhudqNqO9w&pid=ImgRaw&r=0',
                'duree' => '2h28min',
                'realisateur_id' => 3, 
                'producteur_id' => 4, 
                'annee' => 2010,
                'cote' => '4 étoiles',
            ],
            [
                'id' => 4,
                'titre' => 'Interstellar',
                'resume' => 'Un groupe dexplorateurs part à la recherche dune nouvelle planète pour sauver lhumanité.',
                'affiche' => 'https://th.bing.com/th/id/R.f00ef4ef28062a3ffe32c80cfa039c86?rik=UKxcb7t5jAetVQ&pid=ImgRaw&r=0',
                'duree' => '2h49min',
                'realisateur_id' => 5, 
                'producteur_id' => 6, 
                'annee' => 2014,
                'cote' => '4,5 étoiles',
            ],
            [
                'id' => 5,
                'titre' => 'Avatar',
                'resume' => 'Un paraplégique est envoyé sur la planète Pandora pour participer à un programme dexploration.',
                'affiche' => 'https://www.themoviedb.org/t/p/original/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg',
                'duree' => '2h42min',
                'realisateur_id' => 7, 
                'producteur_id' => 8, 
                'annee' => 2009,
                'cote' => '4 étoiles',
            ],
            [
                'id' => 6,
                'titre' => 'The Dark Knight',
                'resume' => 'Batman affronte le Joker, un criminel psychotique.',
                'affiche' => 'https://image.tmdb.org/t/p/original/pyNXnq8QBWoK3b37RS6C3axwUOy.jpg',
                'duree' => '2h32min',
                'realisateur_id' => 3, 
                'producteur_id' => 4, 
                'annee' => 2008,
                'cote' => '4,5 étoiles',
            ],
            [
              'id' => 7,
              'titre' => 'Pulp Fiction',
              'resume' => 'Des histoires entrelacées de criminels, de gangsters et de boxeurs à Los Angeles.',
              'affiche' => 'https://th.bing.com/th/id/OIP.z6bKjfyEmcYCRRPy4b0_KgHaLH?pid=ImgDet&rs=1',
              'duree' => '2h34min',
              'realisateur_id' => 9,
              'producteur_id' => 10,
              'annee' => 1994,
              'cote' => '4,5 étoiles',
            ],
            [
                'id' => 8,
                'titre' => 'The Shawshank Redemption',
                'resume' => "Un homme injustement condamné à perpétuité forme une amitié unique en prison.",
                'affiche' => 'https://www.themoviedb.org/t/p/original/gUgdoneM2fzsT6Qx7GhGU4kxUgx.jpg',
                'duree' => '2h22min',
                'realisateur_id' => 8,
                'producteur_id' => 7,
                'annee' => 1994,
                'cote' => '4,8 étoiles',
            ],
            [
                'id' => 9,
                'titre' => 'The Lord of the Rings: The Fellowship of the Ring',
                'resume' => 'Un jeune hobbit entreprend un voyage épique pour détruire un anneau maléfique.',
                'affiche' => 'https://th.bing.com/th/id/R.15efb377ba5dee52a7c1d05ab80dbc51?rik=6A0yhxCGb86f3A&pid=ImgRaw&r=0',
                'duree' => '2h58min',
                'realisateur_id' => 10,
                'producteur_id' => 9,
                'annee' => 2001,
                'cote' => '4,7 étoiles',
            ],
            [
                'id' => 10,
                'titre' => 'The Matrix Reloaded',
                'resume' => 'La suite de "La Matrice" avec de nouvelles aventures de Neo et ses alliés.',
                'affiche' => 'https://image.tmdb.org/t/p/original/8xEVAe84zlL9rkfYT6dZXero4KK.jpg',
                'duree' => '2h18min',
                'realisateur_id' => 1,
                'producteur_id' => 2,
                'annee' => 2003,
                'cote' => '4 étoiles',
            ],
          
            
            ]);
            
    }
}
