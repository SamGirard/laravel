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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
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
              'categorie' => 'classique'
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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
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
                'categorie' => 'classique'
            ],
            [
                'id' => 11,
                'titre' => 'Stranger Things',
                'resume' => 'Une série de science-fiction qui se déroule dans les années 1980, où un groupe damis se lance à la recherche de leur ami d isparu, en rencontrant des phénomènes surnaturels et un laboratoire gouvernemental secret.',
                'affiche' => 'https://image.tmdb.org/t/p/original/56v2KjBlU4XaOv9rVYEQypHHTVz.jpg',
                'duree' => '4 saisons',
                'realisateur_id' => 4,
                'producteur_id' => 5,
                'annee' => 2016,
                'cote' => '4,5 étoiles',
                'categorie' => 'série'
            ],
            
            [
                'id' => 12,
                'titre' => 'Black Mirror: Bandersnatch',
                'resume' => 'Un film interactif de science-fiction qui permet aux spectateurs de prendre des décisions pour le protagoniste, Stefan, alors qu il travaille sur un jeu vidéo basé sur un livre déroutant.',
                'affiche' => 'https://image.tmdb.org/t/p/original/7mVFj7ssn4ojwygqzbU5hItRoP9.jpg',
                'duree' => '1h30min (variable)',
                'realisateur_id' => 6,
                'producteur_id' => 5,
                'annee' => 2018,
                'cote' => '4,5 étoiles',
                'categorie' => 'classique'
            ],
            [
                'id' => 13,
                'titre' => 'Breaking Bad',
                'resume' => 'Un professeur de chimie diagnostiqué dun cancer se tourne vers la fabrication et la vente de méthamphétamine pour assurer lavenir financier de sa famille. Il plonge dans le monde du crime.',
                'affiche' => 'https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg',
                'duree' => '5 saisons',
                'realisateur_id' => 7,
                'producteur_id' => 8,
                'annee' => 2008,
                'cote' => '5 étoiles',
                'categorie' => 'série'
            ],
            [
                'id' => 14,
                'titre' => 'The Witcher',
                'resume' => 'Geralt de Riv, un chasseur de monstres surnaturels, se bat pour trouver sa place dans un monde où les humains se révèlent souvent plus monstrueux que les créatures qu il chasse.',
                'affiche' => 'https://image.tmdb.org/t/p/original/4X7o1ssOEtpb4XAOpE7NIFGW3Qw.jpg',
                'duree' => '2 saisons',
                'realisateur_id' => 10,
                'producteur_id' => 5,
                'annee' => 2019,
                'cote' => '4,5 étoiles',
                'categorie' => 'série'
            ],
            [
                'id' => 15,
                'titre' => 'La La Land',
                'resume' => 'Lhistoire de Mia, une aspirante actrice, et Sebastian, un musicien de jazz, qui tombent amoureux à Los Angeles tout en poursuivant leurs rêves artistiques.',
                'affiche' => 'https://image.tmdb.org/t/p/original/bHMfAx8OufG5j6OfQrbKsvJd8Ix.jpg',
                'duree' => '2h8min',
                'realisateur_id' => 11,
                'producteur_id' => 12,
                'annee' => 2016,
                'cote' => '4,5 étoiles',
                'categorie' => 'classique'
            ],
            
            [
                'id' => 16,
                'titre' => 'The Crown',
                'resume' => 'Une série dramatique qui retrace la vie de la reine Elizabeth II depuis ses débuts jusquà nos jours, mettant en lumière les événements historiques majeurs et les complexités de la monarchie britannique.',
                'affiche' => 'https://image.tmdb.org/t/p/original/vYzpuEEOfSxCUdf7jJn0OvxLLrF.jpg',
                'duree' => '5 saisons',
                'realisateur_id' => 13,
                'producteur_id' => 14,
                'annee' => 2016,
                'cote' => '4,5 étoiles',
                'categorie' => 'série'
            ],
            
            [
                'id' => 17,
                'titre' => 'Jurassic Park',
                'resume' => 'Un milliardaire crée un parc dattractions rempli de dinosaures clonés, mais les choses tournent mal lorsque les dinosaures séchappent et menacent les visiteurs.',
                'affiche' => 'https://image.tmdb.org/t/p/original/7IExsflWmb0aeODJdfzTNM6fNK4.jpg',
                'duree' => '2h7min',
                'realisateur_id' => 15,
                'producteur_id' => 16,
                'annee' => 1993,
                'cote' => '4 étoiles',
                'categorie' => 'classique'
            ],
            [
                'id' => 18,
                'titre' => 'Friends',
                'resume' => 'Une série comique mettant en scène un groupe damis à New York alors quils traversent les hauts et les bas de la vie, les relations et les carrières.',
                'affiche' => 'https://image.tmdb.org/t/p/original/yTGOZJ13m2XvPjlurTu7SgMZPc5.jpg',
                'duree' => '10 saisons',
                'realisateur_id' => 17,
                'producteur_id' => 18,
                'annee' => 1994,
                'cote' => '4,5 étoiles',
                'categorie' => 'série'
            ],
            
            [
                'id' => 19,
                'titre' => 'Gladiator',
                'resume' => 'Lhistoire de Maximus, un général romain déchu qui cherche à se venger de lempereur corrompu qui a assassiné sa famille et la condamné à lesclavage.',
                'affiche' => 'https://image.tmdb.org/t/p/original/6WBIzCgmDCYrqh64yHXL2CjHQJG.jpg',
                'duree' => '2h35min',
                'realisateur_id' => 19,
                'producteur_id' => 20,
                'annee' => 2000,
                'cote' => '4,5 étoiles',
                'categorie' => 'classique'
            ],
            [
                'id' => 20,
                'titre' => 'Game of Thrones',
                'resume' => 'Une série médiévale-fantastique basée sur les romans de George R.R. Martin. Elle suit les intrigues politiques et les conflits de puissance entre les grandes familles des Sept Couronnes de Westeros.',
                'affiche' => 'https://image.tmdb.org/t/p/original/gwPSoYUHAKmdyVywgLpKKA4BjRr.jpg',
                'duree' => '8 saisons',
                'realisateur_id' => 27,
                'producteur_id' => 28,
                'annee' => 2011,
                'cote' => '4,5 étoiles',
                'categorie' => 'série'
            ]
            

          
            
            ]);
            
    }
}
