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
                    'portrait' => '../images/realisateurs/christopherNolan.jpg',
                    'age' => '53',
                ],
                [
                    'id' => 2,
                    'nom' => 'Frank Darabont',
                    'dateNaissance' => '28 janvier 1959',
                    'lieuNaissance' => 'Montbéliard, France',
                    'portrait' => '../images/realisateurs/frankDarabont.png',
                    'age' => '64',
                ],
                [
                    'id' => 3,
                    'nom' => 'Peter Jackson',
                    'dateNaissance' => '31 octobre 1961',
                    'lieuNaissance' => 'Nouvelle-Zélande',
                    'portrait' => '../images/realisateurs/peterJackson.png',
                    'age' => '61',
                ],
                [
                    'id' => 4,
                    'nom' => 'Lana Wachowski',
                    'dateNaissance' => '21 juin 1965',
                    'lieuNaissance' => 'Chicago, Illinois, USA',
                    'portrait' => '../images/realisateurs/lanaWachowski.png',
                    'age' => '58',
                ],
                [
                    'id' => 5,
                    'nom' => 'Emma Thomas',
                    'dateNaissance' => '27 septembre 1971',
                    'lieuNaissance' => 'Londres, Royaume-Uni',
                    'portrait' => '../images/realisateurs/emmaThomas.jpg',
                    'age' => '51',
                ],
                [
                    'id' => 6,
                    'nom' => 'David Heyman',
                    'dateNaissance' => '26 juillet 1961',
                    'lieuNaissance' => 'London, Royaume-Uni',
                    'portrait' => '../images/realisateurs/davidHeyman.png',
                    'age' => '62',
                ],
                [
                    'id' => 7,
                    'nom' => 'Kathryn Bigelow',
                    'dateNaissance' => '27 novembre 1951',
                    'lieuNaissance' => 'San Carlos, Californie, USA',
                    'portrait' => '../images/realisateurs/kathrynBigelow.png',
                    'age' => '71',
                ],
                [
                    'id' => 8,
                    'nom' => 'Joel Silver',
                    'dateNaissance' => '14 juillet 1952',
                    'lieuNaissance' => 'South Orange, New Jersey, USA',
                    'portrait' => '../images/realisateurs/joelSilver.png',
                    'age' => '71',
                ],
                [
                    'id' => 9,
                    'nom' => 'Martin Scorsese',
                    'dateNaissance' => '17 novembre 1942',
                    'lieuNaissance' => 'New York, USA',
                    'portrait' => '../images/realisateurs/martinScorsese.jpg',
                    'age' => '80',
                ],
                [
                    'id' => 10,
                    'nom' => 'Quentin Tarantino',
                    'dateNaissance' => '27 mars 1963',
                    'lieuNaissance' => 'Knoxville, Tennessee, USA',
                    'portrait' => '../images/realisateurs/quentinTarantino.png',
                    'age' => '60',
                ],
                [
                    'id' => 11,
                    'nom' => 'Francis Ford Coppola',
                    'dateNaissance' => '7 avril 1939',
                    'lieuNaissance' => 'Détroit, Michigan, États-Unis',
                    'portrait' => '../images/realisateurs/francisFordCoppola.png',
                    'age' => '84',
                ],
                [
                    'id' => 12,
                    'nom' => 'David Fincher',
                    'dateNaissance' => '28 août 1962',
                    'lieuNaissance' => 'Denver, Colorado, États-Unis',
                    'portrait' => '../images/realisateurs/davidFincher.png',
                    'age' => '61',
                ],
                [
                    'id' => 13,
                    'nom' => 'Art Linson',
                    'dateNaissance' => '16 mars 1942',
                    'lieuNaissance' => 'Chicago, Illinois, États-Unis',
                    'portrait' => '../images/realisateurs/artLinson.png',
                    'age' => '81',
                ],
                [
                    'id' => 14,
                    'nom' => 'James Cameron',
                    'dateNaissance' => '16 août 1954',
                    'lieuNaissance' => 'Kapuskasing, Ontario, Canada',
                    'portrait' => '../images/realisateurs/jamesCameron.png',
                    'age' => '69',
                ],
                [
                    'id' => 15,
                    'nom' => 'Lawrence Bender',
                    'dateNaissance' => '17 octobre 1957',
                    'lieuNaissance' => 'New York, État de New York, États-Unis',
                    'portrait' => '../images/realisateurs/lawrenceBender.png',
                    'age' => '66',
                ],
                [
                    'id' => 16,
                    'nom' => 'Niki Marvin',
                    'dateNaissance' => 'décembre 1951',
                    'lieuNaissance' => 'Inconnu',
                    'portrait' => '../images/realisateurs/nikiMarvin.png',
                    'age' => '71',
                ],
                [
                    'id' => 17,
                    'nom' => 'Matt Duffer',
                    'dateNaissance' => '15 février 1984',
                    'lieuNaissance' => 'Durham, Caroline du Nord, États-Unis',
                    'portrait' => '../images/realisateurs/mattDuffer.png',
                    'age' => '39',
                ],
                [
                    'id' => 18,
                    'nom' => 'David Slade',
                    'dateNaissance' => '26 septembre 1969',
                    'lieuNaissance' => 'Royaume-Uni',
                    'portrait' => '../images/realisateurs/davidSlade.png',
                    'age' => '54',
                ],
                [
                    'id' => 19,
                    'nom' => 'Vince Gilligan',
                    'dateNaissance' => '10 février 1967',
                    'lieuNaissance' => 'Richmond, Virginie, États-Unis',
                    'portrait' => '../images/realisateurs/vinceGilligan.png',
                    'age' => '56',
                ],
                [
                    'id' => 20,
                    'nom' => 'Marc Jobst',
                    'dateNaissance' => '20 mars 1961',
                    'lieuNaissance' => 'États-Unis',
                    'portrait' => '../images/realisateurs/marcJobst.jpg',
                    'age' => '62',
                ],
                [
                    'id' => 21,
                    'nom' => 'Damien Chazelle',
                    'dateNaissance' => '19 janvier 1985',
                    'lieuNaissance' => 'Providence, Rhode Island, États-Unis',
                    'portrait' => '../images/realisateurs/damienChazelle.png',
                    'age' => '38',
                ],
                [
                    'id' => 22,
                    'nom' => 'Peter Morgan',
                    'dateNaissance' => '10 avril 1963',
                    'lieuNaissance' => 'Wimbledon, Londres, Royaume-Uni',
                    'portrait' => '../images/realisateurs/peterMorgan.png',
                    'age' => '60',
                ],
                [
                    'id' => 23,
                    'nom' => 'Steven Spielberg',
                    'dateNaissance' => '18 décembre 1946',
                    'lieuNaissance' => 'Cincinnati, Ohio, États-Unis',
                    'portrait' => '../images/realisateurs/stevenSpielberg.png',
                    'age' => '76',
                ],
                [
                    'id' => 24,
                    'nom' => 'James Burrows',
                    'dateNaissance' => '30 décembre 1940',
                    'lieuNaissance' => 'Los Angeles, Californie, États-Unis',
                    'portrait' => '../images/realisateurs/jamesBurrows.jpg',
                    'age' => '82',
                ],
                [
                    'id' => 25,
                    'nom' => 'Ridley Scott',
                    'dateNaissance' => '30 novembre 1937',
                    'lieuNaissance' => 'South Shields, Royaume-Uni',
                    'portrait' => '../images/realisateurs/ridelyScott.png',
                    'age' => '85',
                ],
                [
                    'id' => 26,
                    'nom' => 'George R. R. Martin',
                    'dateNaissance' => '20 septembre 1948',
                    'lieuNaissance' => 'Bayonne, New Jersey, États-Unis',
                    'portrait' => '../images/realisateurs/georgeMartin.png',
                    'age' => '75',
                ],
                [
                    'id' => 27,
                    'nom' => 'David Benioff',
                    'dateNaissance' => '25 septembre 1970',
                    'lieuNaissance' => 'New York, État de New York, États-Unis',
                    'portrait' => '../images/realisateurs/davidBenioff.png',
                    'age' => '53',
                ],
                [
                    'id' => 28,
                    'nom' => 'Baz Luhrmann',
                    'dateNaissance' => '17 septembre 1962',
                    'lieuNaissance' => 'Sydney, Australie',
                    'portrait' => '../images/realisateurs/bazLuhrmann.png',
                    'age' => '61',
                ],
                [
                    'id' => 29,
                    'nom' => 'Álex Pina',
                    'dateNaissance' => ' 23 juin 1967',
                    'lieuNaissance' => 'Pampelune, Espagne',
                    'portrait' => '../images/realisateurs/alexPina.png',
                    'age' => '56',
                ],







                [
                    'id' => 999,
                    'nom' => 'Non répertorié',
                    'dateNaissance' => '',
                    'lieuNaissance' => '',
                    'portrait' => '../images/acteurs/nonRepertorier.jpg',
                    'age' => '',
                ],
            ]);
    }
}
