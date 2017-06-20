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
                    $fixtures[] = [
                        "home_team_id" => $teamOneId,
                        "away_team_id" => $teamTwoId,
                        "date" => $this->randomDate(
                            '2017-08-11',
                            '2018-05-20',
                            'Y-m-d'
                        )." 15:00:00"
                    ];
                }
            }
        }

        return $fixtures;
    }

    /**
     * Method to generate random date between two dates
     * @param $sStartDate
     * @param $sEndDate
     * @param string $sFormat
     * @return bool|string
     */
    function randomDate($sStartDate, $sEndDate, $sFormat = 'Y-m-d H:i:s')
    {
        // Convert the supplied date to timestamp
        $fMin = strtotime($sStartDate);
        $fMax = strtotime($sEndDate);
        // Generate a random number from the start and end dates
        $fVal = mt_rand($fMin, $fMax);
        // Convert back to the specified date format
        return date($sFormat, $fVal);
    }
}
