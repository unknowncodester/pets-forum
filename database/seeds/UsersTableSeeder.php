<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                [
                    "id" => 1,
                    "name" => 'bluenose',
                    "email" => "blue@nose.com",
                    'api_token' => str_random(60),
                    'password' => bcrypt('bazooka')
                ],
                [
                    "id" => 2,
                    "name" => 'adminFrank',
                    "email" => "admin@plz.com",
                    'api_token' => str_random(60),
                    'password' => bcrypt('bazooka')
                ],
                [
                    "id" => 3,
                    "name" => 'jo1sik',
                    "email" => "jo1sik@gmail.com",
                    'api_token' => str_random(60),
                    'password' => bcrypt('bazooka')
                ],
                [
                    "id" => 4,
                    "name" => 'aerotype',
                    "email" => "aerotype@rocketmail.com",
                    'api_token' => str_random(60),
                    'password' => bcrypt('bazooka')
                ],
            ]

        );
    }
}
