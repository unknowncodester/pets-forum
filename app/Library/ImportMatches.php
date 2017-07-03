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
            "Arsenal" => 1,
            "Bournemouth" => 2,
            "Brighton & Hove Albion" => 3,
            "Burnley"=> 4,
            "Chelsea" => 5,
            "Crystal Palace" => 6,
            "Everton FC" => 7,
            "Huddersfield Town" => 8,
            "Leicester City" => 9,
            "Liverpool" => 10,
            "Manchester City" => 11,
            "Manchester United" => 12,
            "Newcastle United" => 13,
            "Southampton" => 14,
            "Stoke City FC" => 15,
            "Swansea City" => 16,
            "Tottenham Hotspur" => 17,
            "Watford" => 18,
            "West Bromwich Albion" => 19,
            "West Ham United" => 20
        ];

        return $teams[$teamName];
    }
}