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
                    "name"=> "Arsenal",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 2,
                    "name"=> "Bournemouth",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 3,
                    "name"=> "Brighton & Hove Albion",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 4,
                    "name"=> "Burnley",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 5,
                    "name"=> "Chelsea",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 6,
                    "name"=> "Crystal Palace",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 7,
                    "name"=> "Everton",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 8,
                    "name"=> "Huddersfield Town",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 9,
                    "name"=> "Leicester City",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 10,
                    "name"=> "Liverpool",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 11,
                    "name"=> "Manchester City",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 12,
                    "name"=> "Manchester United",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 13,
                    "name"=> "Newcastle United",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 14,
                    "name"=> "Southampton",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 15,
                    "name"=> "Stoke City",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 16,
                    "name"=> "Swansea City",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 17,
                    "name"=> "Tottenham Hotspur",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 18,
                    "name"=> "Watford",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 19,
                    "name"=> "West Bromwich Albion",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 20,
                    "name"=> "West Ham United",
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
            ]
        );
    }
}
