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
                    'age' => '53',
                ],
                [
                    'id' => 2,
                    'nom' => 'Frank Darabont',
                    'dateNaissance' => '28 janvier 1959',
                    'lieuNaissance' => 'Montbéliard, France',
                    'portrait' => 'https://th.bing.com/th/id/OIP.1BF8uS5hYZcSLjpSz7O17AHaJ4?pid=ImgDet&rs=1',
                    'age' => '64',
                ],
                [
                    'id' => 3,
                    'nom' => 'Peter Jackson',
                    'dateNaissance' => '31 octobre 1961',
                    'lieuNaissance' => 'Nouvelle-Zélande',
                    'portrait' => 'https://th.bing.com/th/id/R.175f72c53f9f896ac15b29f0574ac4b6?rik=IQLH6r4GHBCtsA&riu=http%3a%2f%2fwww2.pictures.zimbio.com%2fgi%2fWest%2bMemphis%2bPortraits%2b2012%2bSundance%2bFilm%2b8vVirV4e7LUx.jpg&ehk=XdiXi93oF12ARFu%2bP4ZmP55dybsg%2fuEGxiutjBdA4Cs%3d&risl=&pid=ImgRaw&r=0',
                    'age' => '61',
                ],
                [
                    'id' => 4,
                    'nom' => 'Lana Wachowski',
                    'dateNaissance' => '21 juin 1965',
                    'lieuNaissance' => 'Chicago, Illinois, USA',
                    'portrait' => 'https://th.bing.com/th/id/OIP.f2cnpaNR640TPoeL3KvyuAHaLA?pid=ImgDet&rs=1',
                    'age' => '58',
                ],
                [
                    'id' => 5,
                    'nom' => 'Emma Thomas',
                    'dateNaissance' => '27 septembre 1971',
                    'lieuNaissance' => 'Londres, Royaume-Uni',
                    'portrait' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6GemtNCy856iLho6WRsFASxQTAp.jpg',
                    'age' => '51',
                ],
                [
                    'id' => 6,
                    'nom' => 'David Heyman',
                    'dateNaissance' => '26 juillet 1961',
                    'lieuNaissance' => 'London, Royaume-Uni',
                    'portrait' => 'https://th.bing.com/th/id/OIP.VPe9O3OHCeMo6HgjtWiIDAHaLH?pid=ImgDet&rs=1',
                    'age' => '62',
                ],
                [
                    'id' => 7,
                    'nom' => 'Kathryn Bigelow',
                    'dateNaissance' => '27 novembre 1951',
                    'lieuNaissance' => 'San Carlos, Californie, USA',
                    'portrait' => 'https://th.bing.com/th/id/R.74698df5c5c95ffecb9e571d2c594299?rik=aI8mAlROogMCSQ&pid=ImgRaw&r=0',
                    'age' => '71',
                ],
                [
                    'id' => 8,
                    'nom' => 'Joel Silver',
                    'dateNaissance' => '14 juillet 1952',
                    'lieuNaissance' => 'South Orange, New Jersey, USA',
                    'portrait' => 'https://th.bing.com/th/id/OIP.WSysRguUMImHMIj_ISyd1AHaK4?pid=ImgDet&rs=1',
                    'age' => '71',
                ],
                [
                    'id' => 9,
                    'nom' => 'Martin Scorsese',
                    'dateNaissance' => '17 novembre 1942',
                    'lieuNaissance' => 'New York, USA',
                    'portrait' => 'https://i.pinimg.com/originals/94/c2/4e/94c24e1ca12d6ef94e9d1cc87f9e0b18.jpg',
                    'age' => '80',
                ],
                [
                    'id' => 10,
                    'nom' => 'Quentin Tarantino',
                    'dateNaissance' => '27 mars 1963',
                    'lieuNaissance' => 'Knoxville, Tennessee, USA',
                    'portrait' => 'https://th.bing.com/th/id/R.07729d3c25c1e49246dd17e709a46c56?rik=U6VvGiiDH2%2fEbQ&pid=ImgRaw&r=0',
                    'age' => '60',
                ],
                [
                    'id' => 11,
                    'nom' => 'Francis Ford Coppola',
                    'dateNaissance' => '7 avril 1939',
                    'lieuNaissance' => 'Détroit, Michigan, États-Unis',
                    'portrait' => 'https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcScm2XiqevDcM30CUHspvCRkIsk0V9HbTUG5WElVQUL5-Rj6VRqxE2KyvRfx3u00mI_',
                    'age' => '84',
                ],
                [
                    'id' => 12,
                    'nom' => 'David Fincher',
                    'dateNaissance' => '28 août 1962',
                    'lieuNaissance' => 'Denver, Colorado, États-Unis',
                    'portrait' => 'https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcThOKabXeeKQobJywteU55FQR7oFnxmrz7vVZiRceHjA21pIRlWx7x0fbUv-uR7lzdH',
                    'age' => '61',
                ],
                [
                    'id' => 13,
                    'nom' => 'Art Linson',
                    'dateNaissance' => '16 mars 1942',
                    'lieuNaissance' => 'Chicago, Illinois, États-Unis',
                    'portrait' => 'https://images.mubicdn.net/images/cast_member/3767/cache-64370-1344618886/image-w856.jpg?size=800x',
                    'age' => 81,
                ],
                [
                    'id' => 14,
                    'nom' => 'James Cameron',
                    'dateNaissance' => '16 août 1954',
                    'lieuNaissance' => 'Kapuskasing, Ontario, Canada',
                    'portrait' => 'https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQr0OkRcxql4zFVz4_mU8d1HTyXOvuDZqgni-pjgrydr--wXkJHBaWPaRJ-AQTLEAIt',
                    'age' => '69',
                ],
                [
                    'id' => 15,
                    'nom' => 'Lawrence Bender',
                    'dateNaissance' => '17 octobre 1957',
                    'lieuNaissance' => 'New York, État de New York, États-Unis',
                    'portrait' => 'https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQOEBXZ4mRp5QrPBI4ZRBC7Ra3h8sCjnnqk12QMQA36GY-s5VOHW1xf_AaB3-M8cb1d',
                    'age' => '66',
                ],
                [
                    'id' => 16,
                    'nom' => 'Niki Marvin',
                    'dateNaissance' => 'décembre 1951',
                    'lieuNaissance' => 'Inconnu',
                    'portrait' => 'https://images.mubicdn.net/images/cast_member/23718/cache-209048-1489646455/image-w856.jpg?size=800x',
                    'age' => '71',
                ],
                [
                    'id' => 17,
                    'nom' => 'Matt Duffer',
                    'dateNaissance' => '15 février 1984',
                    'lieuNaissance' => 'Durham, Caroline du Nord, États-Unis',
                    'portrait' => 'https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcRQIHzR8XCXNr3xxqhhRO4-N5uz47NOxI0WbgELZpcqLb7AlRJFRJiB7IjHm8YKSApm',
                    'age' => '39',
                ],
                [
                    'id' => 18,
                    'nom' => 'David Slade',
                    'dateNaissance' => '26 septembre 1969',
                    'lieuNaissance' => 'Royaume-Uni',
                    'portrait' => 'https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTAH4lwP1odj0XeKrslp0ZUY5Yoc3FaoxNH17q0CugmD4hJLfZ9YZN2pETKZRHxxu64',
                    'age' => '54',
                ],
                [
                    'id' => 19,
                    'nom' => 'Vince Gilligan',
                    'dateNaissance' => '10 février 1967',
                    'lieuNaissance' => 'Richmond, Virginie, États-Unis',
                    'portrait' => 'https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcTjaL6gRxPrY7hBAaZix6i6H7vX9gW8jkJRDYx0YJSWn7DUyAIJ5VsGJuopJLbJGh0k',
                    'age' => '56',
                ],
                [
                    'id' => 20,
                    'nom' => 'Marc Jobst',
                    'dateNaissance' => '20 mars 1961',
                    'lieuNaissance' => 'États-Unis',
                    'portrait' => 'https://www.londonscreenwritersfestival.com/assets/jobst-250x250-1.jpg',
                    'age' => '62',
                ],
                [
                    'id' => 21,
                    'nom' => 'Damien Chazelle',
                    'dateNaissance' => '19 janvier 1985',
                    'lieuNaissance' => 'Providence, Rhode Island, États-Unis',
                    'portrait' => 'https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTFkfe1zbn5vTEI1CEK1QoDQkhJv10D696CPy-YjV7jEJCU3ApkZN02h9wihMYH-RYV',
                    'age' => '38',
                ],
                [
                    'id' => 22,
                    'nom' => 'Peter Morgan',
                    'dateNaissance' => '10 avril 1963',
                    'lieuNaissance' => 'Wimbledon, Londres, Royaume-Uni',
                    'portrait' => 'https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcQZRocDsqeZIRpObBS9ExrFqwRypLu2DU9-UsO4a6lXCi9N9hrh_b_qFj0lIOKrHxUn',
                    'age' => '60',
                ],
                [
                    'id' => 23,
                    'nom' => 'Steven Spielberg',
                    'dateNaissance' => '18 décembre 1946',
                    'lieuNaissance' => 'Cincinnati, Ohio, États-Unis',
                    'portrait' => 'https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRzhpj49iWExxfm8n3Zs0Nq4CvAvecifv7jjBxhSpqQYla38p2TPbXfdCsvv545oRMa',
                    'age' => '76',
                ],
                [
                    'id' => 24,
                    'nom' => 'James Burrows',
                    'dateNaissance' => '30 décembre 1940',
                    'lieuNaissance' => 'Los Angeles, Californie, États-Unis',
                    'portrait' => 'https://m.media-amazon.com/images/M/MV5BOTUzMDEzNTkzNl5BMl5BanBnXkFtZTYwMDk2NzY0._V1_.jpg',
                    'age' => '82',
                ],
                [
                    'id' => 25,
                    'nom' => 'Ridley Scott',
                    'dateNaissance' => '30 novembre 1937',
                    'lieuNaissance' => 'South Shields, Royaume-Uni',
                    'portrait' => 'https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQOgEYS-bqgDl9z-NDtjb0XN_aHugjbB4KnyHLR2TILQF4k4nToSsyE959qMoHN5t8O',
                    'age' => '85',
                ],
                [
                    'id' => 26,
                    'nom' => 'George R. R. Martin',
                    'dateNaissance' => '20 septembre 1948',
                    'lieuNaissance' => 'Bayonne, New Jersey, États-Unis',
                    'portrait' => 'https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcTeXIgya034-oqFCovfNfQjIcOLAluF9W15zw0I-86Oew8nQilp0ZGvhbch30MB8kZa',
                    'age' => '75',
                ],
                [
                    'id' => 27,
                    'nom' => 'David Benioff',
                    'dateNaissance' => '25 septembre 1970',
                    'lieuNaissance' => 'New York, État de New York, États-Unis',
                    'portrait' => 'https://fr.web.img4.acsta.net/pictures/15/07/23/17/33/366733.jpg',
                    'age' => '53',
                ],
                [
                    'id' => 28,
                    'nom' => 'Baz Luhrmann',
                    'dateNaissance' => '17 septembre 1962',
                    'lieuNaissance' => 'Sydney, Australie',
                    'portrait' => 'https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcR0HJXalTLp8-SlApw-bduDK_Jp9gT_B17XnM_AW0oUl4fVQEGanH4d6oTNuebhk3qb',
                    'age' => '61',
                ],
                [
                    'id' => 29,
                    'nom' => 'Álex Pina',
                    'dateNaissance' => ' 23 juin 1967',
                    'lieuNaissance' => 'Pampelune, Espagne',
                    'portrait' => 'https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcR3v8HFeZA0KmkCKI9fJhT8wpuXbTPQloRuSm6EOqllCppLO4h6EFj9xrm_f1JxSMzR',
                    'age' => '56',
                ],







                [
                    'id' => 999,
                    'nom' => 'Non répertorié',
                    'dateNaissance' => '',
                    'lieuNaissance' => '',
                    'portrait' => '',
                    'age' => '',
                ],
            ]);
    }
}
