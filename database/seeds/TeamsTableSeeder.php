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
                    "name" => "Arsenal",
                    "short_name"=> "ARS",
                    'established' => 1886,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
                [
                    "id" => 2,
                    "name"=> "Bournemouth",
                    "short_name"=> "BOU",
                    'established' => 1899,
                    'stadium_id' => 2,
                    'manager_id' => 2,
                ],
                [
                    "id" => 3,
                    "name"=> "Brighton & Hove Albion",
                    "short_name"=> "BHA",
                    'established' => 1901,
                    'stadium_id' => 3,
                    'manager_id' => 3
                ],
                [
                    "id" => 4,
                    "name"=> "Burnley",
                    "short_name"=> "BUR",
                    'established' => 1882,
                    'stadium_id' => 4,
                    'manager_id' => 4,
                ],
                [
                    "id" => 5,
                    "name"=> "Chelsea",
                    "short_name"=> "CHE",
                    'established' => 1905,
                    'stadium_id' => 5,
                    'manager_id' => 5,
                ],
                [
                    "id" => 6,
                    "name"=> "Crystal Palace",
                    "short_name"=> "CRY",
                    'established' => 1905,
                    'stadium_id' => 6,
                    'manager_id' => 6,
                ],
                [
                    "id" => 7,
                    "name"=> "Everton",
                    "short_name"=> "EVE",
                    'established' => 1878,
                    'stadium_id' => 7,
                    'manager_id' => 7,
                ],
                [
                    "id" => 8,
                    "name"=> "Huddersfield Town",
                    "short_name"=> "HUD",
                    'established' => 1908,
                    'stadium_id' => 8,
                    'manager_id' => 8,
                ],
                [
                    "id" => 9,
                    "name"=> "Leicester City",
                    "short_name"=> "LEI",
                    'established' => 1884,
                    'stadium_id' => 9,
                    'manager_id' => 9,
                ],
                [
                    "id" => 10,
                    "name"=> "Liverpool",
                    "short_name"=> "LIV",
                    'established' => 1892,
                    'stadium_id' => 10,
                    'manager_id' => 10,
                ],
                [
                    "id" => 11,
                    "name"=> "Manchester City",
                    "short_name"=> "MCI",
                    'established' => 1887,
                    'stadium_id' => 11,
                    'manager_id' => 11,
                ],
                [
                    "id" => 12,
                    "name"=> "Manchester United",
                    "short_name"=> "MUN",
                    'established' => 1878,
                    'stadium_id' => 12,
                    'manager_id' => 12,
                ],
                [
                    "id" => 13,
                    "name"=> "Newcastle United",
                    "short_name"=> "NEW",
                    'established' => 1881,
                    'stadium_id' => 13,
                    'manager_id' => 13,
                ],
                [
                    "id" => 14,
                    "name"=> "Southampton",
                    "short_name"=> "SOU",
                    'established' => 1885,
                    'stadium_id' => 14,
                    'manager_id' => 14,
                ],
                [
                    "id" => 15,
                    "name"=> "Stoke City",
                    "short_name"=> "STO",
                    'established' => 1863,
                    'stadium_id' => 15,
                    'manager_id' => 15,
                ],
                [
                    "id" => 16,
                    "name"=> "Swansea City",
                    "short_name"=> "SWA",
                    'established' => 1912,
                    'stadium_id' => 16,
                    'manager_id' => 16,
                ],
                [
                    "id" => 17,
                    "name"=> "Tottenham Hotspur",
                    "short_name"=> "TOT",
                    'established' => 1882,
                    'stadium_id' => 17,
                    'manager_id' => 17,
                ],
                [
                    "id" => 18,
                    "name"=> "Watford",
                    "short_name"=> "WAT",
                    'established' => 1881,
                    'stadium_id' => 18,
                    'manager_id' => 18,
                ],
                [
                    "id" => 19,
                    "name"=> "West Bromwich Albion",
                    "short_name"=> "WBA",
                    'established' => 1878,
                    'stadium_id' => 19,
                    'manager_id' => 19,
                ],
                [
                    "id" => 20,
                    "name"=> "West Ham United",
                    "short_name"=> "WHU",
                    'established' => 1895,
                    'stadium_id' => 1,
                    'manager_id' => 1,
                ],
            ]
        );
    }
}
