<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamMatchController extends Controller
{
    public function index($teamId)
    {
        $matches = Team::with(['homeMatches','awayMatches'])
            ->where('id', $teamId)
            ->get();

        return response()
            ->json(['data' => $matches], 200);
    }

    public function show($teamId, $matchId)
    {
        $match = Team::getMatch($teamId, $matchId);

        return response()
            ->json(['data' => $match], 200);
    }
}
