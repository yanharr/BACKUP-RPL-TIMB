<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '2',
                'no_hp' => '085647945601',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Caca Marica',
                'email' => 'caca@gmail.com',
                'is_admin' => '1',
                'no_hp' => '0878787878',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Zeza Marica',
                'email' => 'zeza@gmail.com',
                'is_admin' => '0',
                'no_hp' => '0823456',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
