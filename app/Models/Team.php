<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $fillable = ['name'];

    public static function homeFixtures($teamId)
    {
        $homeFixtures = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team_id')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team_id')
            ->select('home.name as home_team', 'away.name as away_team', 'fixtures.date')
            ->where('home_team_id', $teamId)
            ->get();

        return $homeFixtures;
    }

    public static function awayFixtures($teamId)
    {
        $awayFixtures = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team_id')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team_id')
            ->select('home.name as home_team', 'away.name as away_team', 'fixtures.date')
            ->where('away_team_id', $teamId)
            ->get();

        return $awayFixtures;
    }

    public static function allFixtures($teamId) {
        return [
            "home_fixtures" => self::homeFixtures($teamId),
            "away_fixtures" => self::awayFixtures($teamId)
        ];
    }
}
