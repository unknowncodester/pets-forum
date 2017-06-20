<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Fixture extends Model
{
    protected $fillable = ['home_team', 'away_team'];

    public static function getOne(int $id)
    {
        $fixture = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team_id')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team_id')
            ->select('fixtures.id', 'home.name as home_team', 'away.name as away_team', 'fixtures.date')
            ->where('fixtures.id', $id)
            ->get()
            ->first();

        return $fixture;
    }


    public static function getAll()
    {
        $fixtures = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team_id')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team_id')
            ->select('fixtures.id', 'home.name as home_team', 'away.name as away_team', 'fixtures.date')
            ->get();

        return $fixtures;
    }
}
