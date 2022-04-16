<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Wisata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wisata = [
            [
                'id_wisata'=>'1',
                'title' => 'Curug Deng-deng',
                'categorie' => 'Curug',
                'location' => 'Cipatujah',
                'desc'=> 'Curug Deng-deng adalah ...',
                'status'=>'pending',
                'picture' => 'wisata1.jpg',
            ],
            [
                'id_wisata'=>'2',
                'title' => 'Viewdeck Galunggung',
                'categorie' => 'Pegunungan',
                'location' => 'Galunggung',
                'desc'=> 'Viewdeck galunggung adalah ...',
                'status'=>'pending',
                'picture' => 'wisata5.jpg',
            ],
            [
                'id_wisata'=>'3',
                'title' => 'Pantai Karang Tawulan',
                'categorie' => 'Pantai',
                'location' => 'Cimanuk,Kec Cikalong',
                'desc'=> 'Pantai Karangtawulan adalah ...',
                'status'=>'pending',
                'picture' => 'wisata2.jpg',
            ],
            [
                'id_wisata'=>'4',
                'title' => 'Karaha Bodas',
                'categorie' => 'Kawah',
                'location' => 'Kadipaten',
                'desc'=> 'Karaha Bodas adalah ...',
                'status'=>'pending',
                'picture' => 'wisata6.jpg',
            ],
            [
                'id_wisata'=>'5',
                'title' => 'Tonjong Canyon',
                'categorie' => 'Sungai',
                'location' => 'Cipatujah',
                'desc'=> 'Tonjong Canyon adalah ...',
                'status'=>'Accepted',
                'picture' => 'wisata4.jpg',
            ],
        ];
        // foreach ($wisata as $key => $value) {
        //     Wisata::create($value);}
    }
}
