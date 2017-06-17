<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;

class Fixture extends Controller
{
    public function index()
    {
        $teams = DB::table('fixtures')
            ->join('teams as home', 'home.uid', '=', 'fixtures.home_team')
            ->join('teams as away', 'away.uid', '=', 'fixtures.away_team')
            ->select('fixtures.uid', 'home.name as home_team', 'away.name as away_team')
            ->get();

        return json_encode($teams);
    }

    public function show($id)
    {
        $teams = DB::table('fixtures')
            ->join('teams as home', 'home.uid', '=', 'fixtures.home_team')
            ->join('teams as away', 'away.uid', '=', 'fixtures.away_team')
            ->select('fixtures.uid', 'home.name as home_team', 'away.name as away_team')
            ->where('fixtures.uid', $id)
            ->get()
            ->first();

        return json_encode($teams);
    }
}
