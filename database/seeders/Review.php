<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Review extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = [
            [
                'id_user' => 4,
                'id_wisata' => 2,
                'name' => 'Beby',
                'desc' => 'Sangat Indah!',
                'show' => '',
                'picture' => 'tst-image2.jpg',
            ],
            [
                'id_user' => 6,
                'id_wisata' => 4,
                'name' => 'Dinda',
                'desc' => 'Air Hijau dan lembah keren',
                'show' => '',
                'picture' => 'author-image2.jpg',
            ],
            [
                'id_user' => 3,
                'id_wisata' => 3,
                'name' => 'Zeza Marica',
                'desc' => 'Pemandangan Mantap',
                'show' => '',
                'picture' => 'tst-image3.jpg',
            ],
            [
                'id_user' => 5,
                'id_wisata' => 1,
                'name' => 'Yanhar',
                'desc' => 'Air sungai jernih',
                'show' => '',
                'picture' => 'tst-image4.jpg',
            ]
        ];

        // foreach ($review as $key => $value) {
        //     Review::create($value);
        // }
    }
}
