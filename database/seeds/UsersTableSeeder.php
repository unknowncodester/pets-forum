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
                "id" => 1,
                "name" => 'fooUser',
                "email" => "foo@bar.com",
                'api_token' => str_random(60),
                'password' => bcrypt('bazooka')
            ]
        );
    }
}
