<?php

namespace App\Library;

use Carbon\Carbon;


class ImportMatches
{
    protected $readLocation;

    public $matches;

    public function setReadLocation($location)
    {
        $this->readLocation = $location;
    }

    public function getReadLocation()
    {
        return $this->readLocation;
    }

    public function parse()
    {
        $matches = [];


        $contents = file_get_contents($this->readLocation);
        $json = json_decode($contents, true);

        foreach ($json['fixtures'] as $match) {
            $matches[] = [
                "date"=> Carbon::parse($match['date'])->toDateTimeString(),
                "home_team_id"    => $this->convertTeamNameToLocalDbId($match['homeTeamName']),
                "away_team_id"    => $this->convertTeamNameToLocalDbId($match['awayTeamName']),
                "home_team_goals" => $match['result']['goalsHomeTeam'] ?? null,
                "away_team_goals" => $match['result']['goalsAwayTeam'] ?? null,
            ];
        }
        return $matches;
    }

    private function convertTeamNameToLocalDbId($teamName)
    {
        $teams = [
            "Arsenal FC" => 1,
            "AFC Bournemouth" => 2,
            "Brighton & Hove Albion" => 3,
            "Burnley FC"=> 4,
            "Chelsea FC" => 5,
            "Crystal Palace FC" => 6,
            "Everton FC" => 7,
            "Huddersfield Town" => 8,
            "Leicester City FC" => 9,
            "Liverpool FC" => 10,
            "Manchester City FC" => 11,
            "Manchester United FC" => 12,
            "Newcastle United FC" => 13,
            "Southampton FC" => 14,
            "Stoke City FC" => 15,
            "Swansea City FC" => 16,
            "Tottenham Hotspur FC" => 17,
            "Watford FC" => 18,
            "West Bromwich Albion FC" => 19,
            "West Ham United FC" => 20
        ];

        return $teams[$teamName];
    }
}