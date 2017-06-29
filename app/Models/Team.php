<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $fillable = ['name'];

    public static function homeMatches($teamId)
    {
        $homeMatches = DB::table('matches')
            ->join('teams as home', 'home.id', '=', 'matches.home_team_id')
            ->join('teams as away', 'away.id', '=', 'matches.away_team_id')
            ->select('matches.id', 'home.name as home_team', 'away.name as away_team', 'matches.date')
            ->where('home_team_id', $teamId)
            ->get();

        return $homeMatches;
    }

    public static function awayMatches($teamId)
    {
        $awayFixtures = DB::table('matches')
            ->join('teams as home', 'home.id', '=', 'matches.home_team_id')
            ->join('teams as away', 'away.id', '=', 'matches.away_team_id')
            ->select('matches.id', 'home.name as home_team', 'away.name as away_team', 'matches.date')
            ->where('away_team_id', $teamId)
            ->get();

        return $awayFixtures;
    }

    public static function allMatches($teamId) {
        return [
            "home_matches" => self::homeMatches($teamId),
            "away_matches" => self::awayMatches($teamId)
        ];
    }

    public static function getMatch($teamId, $matchId) {

        $match = DB::table('matches')
            ->join('teams as home', 'home.id', '=', 'matches.home_team_id')
            ->join('teams as away', 'away.id', '=', 'matches.away_team_id')
            ->select('home.name as home_team', 'away.name as away_team', 'matches.date')
            ->where('matches.id', $matchId)
            ->where(function ($query) use (&$teamId) {
                $query->where('home_team_id', $teamId)
                    ->orWhere('away_team_id', $teamId);
            })->get();

        return $match;

    }
}
