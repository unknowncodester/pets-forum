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
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 2,
                    "name"=> "Bournemouth",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 3,
                    "name"=> "Brighton & Hove Albion",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 4,
                    "name"=> "Burnley",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 5,
                    "name"=> "Chelsea",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 6,
                    "name"=> "Crystal Palace",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 7,
                    "name"=> "Everton",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 8,
                    "name"=> "Huddersfield Town",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 9,
                    "name"=> "Leicester City",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 10,
                    "name"=> "Liverpool",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 11,
                    "name"=> "Manchester City",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 12,
                    "name"=> "Manchester United",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 13,
                    "name"=> "Newcastle United",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 14,
                    "name"=> "Southampton",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 15,
                    "name"=> "Stoke City",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 16,
                    "name"=> "Swansea City",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 17,
                    "name"=> "Tottenham Hotspur",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 18,
                    "name"=> "Watford",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 19,
                    "name"=> "West Bromwich Albion",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 20,
                    "name"=> "West Ham United",
                    'established' => 1900,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
            ]
        );
    }
}
