<?php

use App\Models\Match;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::insert([
                [
                    "home_team_id" => 1,
                    "away_team_id" => 2,
                    "home_team_goals" => 1,
                    "away_team_goals" => 2,
                    "date" => "2017-08-14"
                ],
                [
                    "home_team_id" => 1,
                    "away_team_id" => 3,
                    "home_team_goals" => 3,
                    "away_team_goals" => 2,
                    "date" => "2017-08-21"
                ],
                [
                    "home_team_id" => 4,
                    "away_team_id" => 1,
                    "home_team_goals" => 0,
                    "away_team_goals" => 0,
                    "date" => "2017-08-21"
                ]
            ]);
    }
}
