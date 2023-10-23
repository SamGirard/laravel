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
                'affiche' => 'https://th.bing.com/th/id/OIP.DGcSW44e96tvFKPR7zWn4QHaK-?pid=ImgDet&rs=1',
                'duree' => '4 saisons',
                'realisateur_id' => 4,
                'producteur_id' => 5,
                'annee' => 2016,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            
            [
                'id' => 12,
                'titre' => 'Black Mirror: Bandersnatch',
                'resume' => 'Un film interactif de science-fiction qui permet aux spectateurs de prendre des décisions pour le protagoniste, Stefan, alors qu il travaille sur un jeu vidéo basé sur un livre déroutant.',
                'affiche' => 'https://www.themoviedb.org/t/p/original/upFjswDl7vIP7vGvly49x2PkUXc.jpg',
                'duree' => '1h30min (variable)',
                'realisateur_id' => 6,
                'producteur_id' => 5,
                'annee' => 2018,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            [
                'id' => 13,
                'titre' => 'Breaking Bad',
                'resume' => 'Un professeur de chimie diagnostiqué dun cancer se tourne vers la fabrication et la vente de méthamphétamine pour assurer lavenir financier de sa famille. Il plonge dans le monde du crime.',
                'affiche' => 'https://th.bing.com/th/id/OIP.BAs0FU-2Fobe6QQKDdcl1QHaLe?pid=ImgDet&rs=1',
                'duree' => '5 saisons',
                'realisateur_id' => 7,
                'producteur_id' => 8,
                'annee' => 2008,
                'cote' => '5 étoiles',
                'categorie' => 'tendance'
            ],
            [
                'id' => 14,
                'titre' => 'The Witcher',
                'resume' => 'Geralt de Riv, un chasseur de monstres surnaturels, se bat pour trouver sa place dans un monde où les humains se révèlent souvent plus monstrueux que les créatures qu il chasse.',
                'affiche' => 'https://th.bing.com/th/id/OIP.onTqxJXopC-Twdm1FntQQwHaK-?pid=ImgDet&rs=1',
                'duree' => '2 saisons',
                'realisateur_id' => 10,
                'producteur_id' => 5,
                'annee' => 2019,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            [
                'id' => 15,
                'titre' => 'La La Land',
                'resume' => 'Lhistoire de Mia, une aspirante actrice, et Sebastian, un musicien de jazz, qui tombent amoureux à Los Angeles tout en poursuivant leurs rêves artistiques.',
                'affiche' => 'https://www.goldenglobes.com/sites/default/files/articles/cover_images/2017-la_la_land.jpg',
                'duree' => '2h8min',
                'realisateur_id' => 1,
                'producteur_id' => 2,
                'annee' => 2016,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            
            [
                'id' => 16,
                'titre' => 'The Crown',
                'resume' => 'Une série dramatique qui retrace la vie de la reine Elizabeth II depuis ses débuts jusquà nos jours, mettant en lumière les événements historiques majeurs et les complexités de la monarchie britannique.',
                'affiche' => 'https://th.bing.com/th/id/R.6944899ec64230ad7aef89826edc6942?rik=D%2fAD9%2bVGoeg1lw&pid=ImgRaw&r=0',
                'duree' => '5 saisons',
                'realisateur_id' => 3,
                'producteur_id' => 4,
                'annee' => 2016,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            
            [
                'id' => 17,
                'titre' => 'Jurassic Park',
                'resume' => 'Un milliardaire crée un parc dattractions rempli de dinosaures clonés, mais les choses tournent mal lorsque les dinosaures séchappent et menacent les visiteurs.',
                'affiche' => 'https://image.tmdb.org/t/p/original/456FcvyTujRwzgoMoKKoheeCOlU.jpg',
                'duree' => '2h7min',
                'realisateur_id' => 5,
                'producteur_id' => 6,
                'annee' => 1993,
                'cote' => '4 étoiles',
                'categorie' => 'tendance'
            ],
            [
                'id' => 18,
                'titre' => 'Friends',
                'resume' => 'Une série comique mettant en scène un groupe damis à New York alors quils traversent les hauts et les bas de la vie, les relations et les carrières.',
                'affiche' => 'https://www.themoviedb.org/t/p/original/bRJOwllemPbE4JTQ0TtcVu9efff.jpg',
                'duree' => '10 saisons',
                'realisateur_id' => 7,
                'producteur_id' => 8,
                'annee' => 1994,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            
            [
                'id' => 19,
                'titre' => 'Gladiator',
                'resume' => 'Lhistoire de Maximus, un général romain déchu qui cherche à se venger de lempereur corrompu qui a assassiné sa famille et la condamné à lesclavage.',
                'affiche' => 'https://th.bing.com/th/id/OIP.ThbZ5VGLQxqEzmpaQcmkegHaLH?pid=ImgDet&rs=1',
                'duree' => '2h35min',
                'realisateur_id' => 9,
                'producteur_id' => 1,
                'annee' => 2000,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            [
                'id' => 20,
                'titre' => 'Game of Thrones',
                'resume' => 'Une série médiévale-fantastique basée sur les romans de George R.R. Martin. Elle suit les intrigues politiques et les conflits de puissance entre les grandes familles des Sept Couronnes de Westeros.',
                'affiche' => 'https://image.tmdb.org/t/p/original/gwPSoYUHAKmdyVywgLpKKA4BjRr.jpg',
                'duree' => '8 saisons',
                'realisateur_id' => 7,
                'producteur_id' => 8,
                'annee' => 2011,
                'cote' => '4,5 étoiles',
                'categorie' => 'tendance'
            ],
            [
                'id' => 21,
                'titre' => 'The Great Gatsby',
                'resume' => "L'histoire de Jay Gatsby, un homme mystérieux et richissime qui organise de somptueuses fêtes à Long Island dans les années 1920. Le film explore la fascination, la richesse et les excès de l'époque.",
                'affiche' => 'https://th.bing.com/th/id/R.79e4245b68c75b3c66f8237234bb032d?rik=8ubtJE8r3bPfpA&pid=ImgRaw&r=0',
                'duree' => '2h23min',
                'realisateur_id' => 1,
                'producteur_id' => 2,
                'annee' => 2013,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 22,
                'titre' => 'Inglourious Basterds',
                'resume' => 'Dans la France occupée par les nazis, un groupe de soldats juifs américains connus sous le nom de "Basterds" mène une vendetta brutale contre les nazis.',
                'affiche' => 'https://picfiles.alphacoders.com/147/147078.jpg',
                'duree' => '2h33min',
                'realisateur_id' => 9,
                'producteur_id' => 9,
                'annee' => 2009,
                'cote' => '4,5 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 23,
                'titre' => 'Django Unchained',
                'resume' => 'Dans le Sud des États-Unis avant la guerre civile, un chasseur de primes libère un esclave et lentraîne dans une mission pour retrouver sa femme et se venger des propriétaires desclaves.',
                'affiche' => 'https://th.bing.com/th/id/R.c6d14d953842d6c9f8cea20207198243?rik=3wTbj%2f5h8QetRw&pid=ImgRaw&r=0',
                'duree' => '2h45min',
                'realisateur_id' => 9,
                'producteur_id' => 7,
                'annee' => 2012,
                'cote' => '4,5 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 24,
                'titre' => 'Kill Bill: Vol. 1',
                'resume' => 'Une femme se réveille dun coma et se lance dans une mission de vengeance contre ceux qui ont tenté de la tuer, en particulier le leader dun gang de tueurs à gages.',
                'affiche' => 'https://www.themoviedb.org/t/p/original/btM7n4I7qXdMMiYJ4WZGh4SRuWt.jpg',
                'duree' => '1h51min',
                'realisateur_id' => 9,
                'producteur_id' => 3,
                'annee' => 2003,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 25,
                'titre' => 'Kill Bill: Vol. 2',
                'resume' => 'La femme continue sa quête de vengeance en poursuivant les membres restants du gang de tueurs à gages et en cherchant à éliminer le leader.',
                'affiche' => 'https://th.bing.com/th/id/R.a5e6fc5a436bb3fadd93409357d64ac4?rik=AO9R7p3crobcAQ&pid=ImgRaw&r=0',
                'duree' => '2h17min',
                'realisateur_id' => 9,
                'producteur_id' => 7,
                'annee' => 2004,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 26,
                'titre' => 'Once Upon a Time in Hollywood',
                'resume' => 'À Hollywood en 1969, un acteur vieillissant et sa doublure tentent de trouver leur place dans une industrie en pleine évolution, tout en étant mêlés aux événements de lépoque.',
                'affiche' => 'https://th.bing.com/th/id/OIP.9X6msnpv4vmCJ2Zv-L2OrgHaK_?pid=ImgDet&rs=1',
                'duree' => '2h41min',
                'realisateur_id' => 9,
                'producteur_id' => 7,
                'annee' => 2019,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 27,
                'titre' => 'Reservoir Dogs',
                'resume' => 'Un groupe de voleurs professionnels tente de découvrir le traître parmi eux après quun braquage de diamant ait mal tourné.',
                'affiche' => 'https://image.tmdb.org/t/p/original/g7spS2Y4SZoQoC6Hn7zoqEqdYqR.jpg',
                'duree' => '1h39min',
                'realisateur_id' => 2,
                'producteur_id' => 3,
                'annee' => 1992,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 28,
                'titre' => 'Jackie Brown',
                'resume' => 'Une hôtesse de lair manipulatrice, un trafiquant darmes, un détective de la police et une agente fédérale se croisent dans une histoire de crime et de tromperie.',
                'affiche' => 'https://th.bing.com/th/id/OIP.UF84LZu13cCC_QuLQreCfgHaJ_?pid=ImgDet&rs=1',
                'duree' => '2h34min',
                'realisateur_id' => 2,
                'producteur_id' => 3,
                'annee' => 1997,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 29,
                'titre' => 'Death Proof',
                'resume' => 'Un cascadeur psychopathe chasse des jeunes femmes au volant de sa voiture meurtrière, mais il ne sait pas à qui il a affaire.',
                'affiche' => 'https://th.bing.com/th/id/R.838795bfecb371042caf5e42abc02729?rik=jLyy8eWgCUJ5yw&pid=ImgRaw&r=0',
                'duree' => '1h53min',
                'realisateur_id' => 9,
                'producteur_id' => 3,
                'annee' => 2007,
                'cote' => '3,5 étoiles',
                'categorie' => 'À revoir'
            ],
            [
                'id' => 30,
                'titre' => 'The Hateful Eight',
                'resume' => 'Dans le Wyoming après la guerre civile, huit étrangers sont piégés dans un chalet pendant une tempête de neige, mais certains dentre eux ne sont pas ce quils semblent être.',
                'affiche' => 'https://th.bing.com/th/id/R.4d9fa8b2905f5fdde2f490b24cdab90e?rik=dwIlG4Om%2f7IhYg&riu=http%3a%2f%2fwww.filmofilia.com%2fwp-content%2fuploads%2f2015%2f11%2fHateful_Eight_Payoff_poster.jpg&ehk=CP58Ig%2fUuuhPG2RWrZli3TWx0%2fG9Mf%2bVlgsu03uGWRI%3d&risl=&pid=ImgRaw&r=0',
                'duree' => '3h8min',
                'realisateur_id' => 9,
                'producteur_id' => 3,
                'annee' => 2015,
                'cote' => '4 étoiles',
                'categorie' => 'À revoir'
            ]

            ]);
            
    }
}
