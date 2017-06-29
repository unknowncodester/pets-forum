<?php

use App\Models\Fixture;
use Illuminate\Database\Seeder;

class FixturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fixture::insert([
                [
                    "home_team_id" => 1,
                    "away_team_id" => 2,
                    "date" => "2017-08-14"
                ],
                [
                    "home_team_id" => 1,
                    "away_team_id" => 3,
                    "date" => "2017-08-21"
                ],
                [
                    "home_team_id" => 4,
                    "away_team_id" => 1,
                    "date" => "2017-08-21"
                ]

            ]
        );
    }
}
