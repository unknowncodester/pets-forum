<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamMatchController extends Controller
{
    public function index($teamId)
    {
        $fixtures = Team::allMatches($teamId);

        return response()
            ->json(['data' => $fixtures], 200);
    }

    public function show($teamId, $fixtureId)
    {
        $fixture = Team::getMatch($teamId, $fixtureId);

        return response()
            ->json(['data' => $fixture], 200);
    }
}
