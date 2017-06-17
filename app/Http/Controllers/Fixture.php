<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;

class Fixture extends Controller
{
    public function index()
    {
        $teams = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team')
            ->select('fixtures.id', 'home.name as home_team', 'away.name as away_team')
            ->get();

        return response()
            ->json(['data' => $teams], 200);
    }

    public function show($id)
    {
        $team = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team')
            ->select('fixtures.id', 'home.name as home_team', 'away.name as away_team')
            ->where('fixtures.id', $id)
            ->get()
            ->first();

        return response()
            ->json(['data' => $team], 200);
    }
}
