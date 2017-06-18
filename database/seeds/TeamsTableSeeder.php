<?php

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::insert(
            [
                [
                    "id" => 1,
                    "name"=> "Arsenal"
                ],
                [
                    "id" => 2,
                    "name"=> "Bournemouth"
                ],
                [
                    "id" => 3,
                    "name"=> "Brighton & Hove Albion"
                ],
                [
                    "id" => 4,
                    "name"=> "Burnley"
                ],
                [
                    "id" => 5,
                    "name"=> "Chelsea"
                ],
                [
                    "id" => 6,
                    "name"=> "Crystal Palace"
                ],
                [
                    "id" => 7,
                    "name"=> "Everton"
                ],
                [
                    "id" => 8,
                    "name"=> "Huddersfield Town"
                ],
                [
                    "id" => 9,
                    "name"=> "Leicester City"
                ],
                [
                    "id" => 10,
                    "name"=> "Liverpool"
                ],
                [
                    "id" => 11,
                    "name"=> "Manchester City"
                ],
                [
                    "id" => 12,
                    "name"=> "Manchester United"
                ],
                [
                    "id" => 13,
                    "name"=> "Newcastle United"
                ],
                [
                    "id" => 14,
                    "name"=> "Southampton"
                ],
                [
                    "id" => 15,
                    "name"=> "Stoke City"
                ],
                [
                    "id" => 16,
                    "name"=> "Swansea City"
                ],
                [
                    "id" => 17,
                    "name"=> "Tottenham Hotspur"
                ],
                [
                    "id" => 18,
                    "name"=> "Watford"
                ],
                [
                    "id" => 19,
                    "name"=> "West Bromwich Albion"
                ],
                [
                    "id" => 20,
                    "name"=> "West Ham United"
                ],
            ]
        );
    }
}
