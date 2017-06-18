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
        Fixture::insert(
            $this->generateFixtures()
        );
    }

    private function generateFixtures()
    {
        $fixtures = [];

        // create 38 fixtures for each team
        for($teamOneId = 1; $teamOneId <= 20; $teamOneId++){

            for($teamTwoId = 1; $teamTwoId <= 20; $teamTwoId++){

                // cant play a game against yourself!
                if($teamOneId != $teamTwoId)
                {
                    // home game
                    $fixtures[] = [
                        "home_team_id" => $teamOneId,
                        "away_team_id" => $teamTwoId
                    ];

                    // away game
                    $fixtures[] = [
                        "home_team_id" => $teamTwoId,
                        "away_team_id" => $teamOneId
                    ];
                }
            }
        }

        return $fixtures;
    }
}
