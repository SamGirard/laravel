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
                'portrait' => '../images/acteurs/leonardodicaprio.jpg',
                'age' => '48 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 2,
                'nom' => 'Al Pacino',
                'dateNaissance' => '25 avril 1940',
                'lieuNaissance' => 'Spanish Harlem, New York, État de New York, États-Unis',
                'portrait' => '../images/acteurs/AlPacino.jpg',
                'age' => '83 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 3,
                'nom' => 'Marlon Brando',
                'dateNaissance' => '3 avril 1924',
                'lieuNaissance' => 'Omaha, Nebraska, États-Unis',
                'portrait' => '../images/acteurs/MarlonBrando.jpg',
                'age' => 'décédé',
                'sexe' => 'H',
            ],
            [
                'id' => 4,
                'nom' => 'Matthew McConaughey',
                'dateNaissance' => '4 novembre 1969',
                'lieuNaissance' => 'Uvalde, Texas, États-Unis',
                'portrait' => '../images/acteurs/MatthewMcConaughey.jpg',
                'age' => '54 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 5,
                'nom' => 'Sam Worthington',
                'dateNaissance' => '2 août 1976',
                'lieuNaissance' => 'Godalming, Royaume-Uni',
                'portrait' => '../images/acteurs/SamWorthington.jpg',
                'age' => '47 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 6,
                'nom' => 'Christian Bale',
                'dateNaissance' => '30 janvier 1974',
                'lieuNaissance' => 'Haverfordwest, Pays de Galles, Royaume-Uni',
                'portrait' => '../images/acteurs/ChristianBale.jpg',
                'age' => '49 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 7,
                'nom' => 'Samuel L. Jackson',
                'dateNaissance' => ' 21 décembre 1948',
                'lieuNaissance' => 'Washington, D.C., États-Unis',
                'portrait' => '../images/acteurs/SamuelLJackson.jpg',
                'age' => '74 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 8,
                'nom' => 'Morgan Freeman',
                'dateNaissance' => '1er juin 1937',
                'lieuNaissance' => 'Memphis, Tennessee, États-Unis',
                'portrait' => '../images/acteurs/MorganFreeman.jpg',
                'age' => '86 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 9,
                'nom' => 'Elijah Wood',
                'dateNaissance' => '28 janvier 1981',
                'lieuNaissance' => 'Cedar Rapids, Iowa, États-Unis',
                'portrait' => '../images/acteurs/Wood.jpg',
                'age' => '42 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 10,
                'nom' => 'Keanu Reeves',
                'dateNaissance' => '2 septembre 1964',
                'lieuNaissance' => 'Beyrouth, Liban',
                'portrait' => '../images/acteurs/KeanuReeves.jpg',
                'age' => '59 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 11,
                'nom' => 'Henry Cavill',
                'dateNaissance' => '5 mai 1983',
                'lieuNaissance' => 'Jersey, Îles Anglo-Normandes, Royaume-Uni',
                'portrait' => '../images/acteurs/HenryCavill.jpg',
                'age' => '40 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 12,
                'nom' => 'Sam Neill',
                'dateNaissance' => '14 septembre 1947',
                'lieuNaissance' => 'Omagh, Irlande du Nord',
                'portrait' => '../images/acteurs/SamNeill.jpg',
                'age' => '76 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 13,
                'nom' => 'Russell Crowe',
                'dateNaissance' => '7 avril 1964',
                'lieuNaissance' => 'Wellington, Nouvelle-Zélande',
                'portrait' => '../images/acteurs/RussellCrowe.jpg',
                'age' => '59 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 14,
                'nom' => 'Harvey Keitel',
                'dateNaissance' => '13 mai 1939',
                'lieuNaissance' => 'Brooklyn, New York, États-Unis',
                'portrait' => '../images/acteurs/HarveyKeitel.jpg',
                'age' => '84 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 15,
                'nom' => 'Tim Roth',
                'dateNaissance' => '14 mai 1961',
                'lieuNaissance' => 'Dulwich, Londres, Angleterre',
                'portrait' => '../images/acteurs/TimRoth.jpg',
                'age' => '62 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 16,
                'nom' => 'Pam Grier',
                'dateNaissance' => '26 mai 1949',
                'lieuNaissance' => 'Winston-Salem, Caroline du Nord, États-Unis',
                'portrait' => '../images/acteurs/PamGrier.jpg',
                'age' => '74 ans',
                'sexe' => 'F',
            ],
            [
                'id' => 17,
                'nom' => 'Kurt Russell',
                'dateNaissance' => '17 mars 1951',
                'lieuNaissance' => 'Springfield, Massachusetts, États-Unis',
                'portrait' => '../images/acteurs/KurtRussel.jpg',
                'age' => '72 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 18,
                'nom' => 'Jamie Foxx',
                'dateNaissance' => '13 décembre 1967',
                'lieuNaissance' => 'Terrell, Texas, États-Unis',
                'portrait' => '../images/acteurs/JamieFoxx.jpg',
                'age' => '55 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 19,
                'nom' => 'Uma Thurman',
                'dateNaissance' => '29 avril 1970',
                'lieuNaissance' => 'Boston, Massachusetts, États-Unis',
                'portrait' => '../images/acteurs/UmaThurman.jpg',
                'age' => '53 ans',
                'sexe' => 'F',
            ],
            [
                'id' => 20,
                'nom' => 'Brad Pitt',
                'dateNaissance' => '18 décembre 1963',
                'lieuNaissance' => 'Shawnee, Oklahoma, États-Unis',
                'portrait' => '../images/acteurs/BradPitt.jpg',
                'age' => '59 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 21,
                'nom' => 'Bryan Cranston',
                'dateNaissance' => '18 décembre 1963',
                'lieuNaissance' => 'Shawnee, Oklahoma, États-Unis',
                'portrait' => '../images/acteurs/BryanCranston.jpg',
                'age' => '67 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 22,
                'nom' => 'Ryan Gosling',
                'dateNaissance' => '18 décembre 1963',
                'lieuNaissance' => 'Shawnee, Oklahoma, États-Unis',
                'portrait' => '../images/acteurs/RyanGosling.jpg',
                'age' => '42 ans',
                'sexe' => 'H',
            ],
            [
                'id' => 23,
                'nom' => 'Millie Bobby Brown',
                'dateNaissance' => '19 février 2004',
                'lieuNaissance' => 'Marbella, Andalousie, Espagne',
                'portrait' => '../images/acteurs/MillieBobbyBrown.jpg',
                'age' => '19 ans',
                'sexe' => 'F',
            ],
            [
                'id' => 24,
                'nom' => 'Bryce Dallas Howard',
                'dateNaissance' => '2 mars 1981',
                'lieuNaissance' => 'Los Angeles, Californie, États-Unis',
                'portrait' => '../images/acteurs/BryceDallasHoward.jpg',
                'age' => '42 ans',
                'sexe' => 'F',
            ],
            [
                'id' => 25,
                'nom' => 'Winston Churchill',
                'dateNaissance' => '30 novembre 1874',
                'lieuNaissance' => 'Blenheim Palace, Angleterre',
                'portrait' => '../images/acteurs/WinstonChurchill.jpg',
                'age' => 'décedé ans',
                'sexe' => 'H',
            ],
            [
                'id' => 26,
                'nom' => 'Jennifer Aniston',
                'dateNaissance' => '11 février 1969',
                'lieuNaissance' => 'Sherman Oaks, Los Angeles, Californie, États-Unis',
                'portrait' => '../images/acteurs/JenniferAniston.jpg',
                'age' => '54 ans',
                'sexe' => 'F',
            ],
            [
                'id' => 27,
                'nom' => 'Emilia Clarke',
                'dateNaissance' => '23 octobre 1986',
                'lieuNaissance' => 'Londres, Angleterre',
                'portrait' => '../images/acteurs/EmiliaClarke.jpg',
                'age' => '37 ans',
                'sexe' => 'F',
            ],
            [
                'id' => 28,
                'nom' => 'Álvaro Morte',
                'dateNaissance' => '23 février 1975',
                'lieuNaissance' => 'Algésiras, Espagne',
                'portrait' => '../images/acteurs/AlvaroMorte.jpg',
                'age' => '48 ans',
                'sexe' => null,
            ],




            [
                'id' => 999,
                'nom' => 'Non Répertorié',
                'dateNaissance' => '',
                'lieuNaissance' => '',
                'portrait' => '../images/acteurs/nonRepertorier.jpg',
                'age' => '',
                'sexe' => 'H',
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
