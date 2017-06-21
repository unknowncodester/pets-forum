<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use App\Models\Team;

class TeamFixtureController extends Controller
{
    public function index($teamId)
    {
        $fixtures = Team::allFixtures($teamId);

        return response()
            ->json(['data' => $fixtures], 200);
    }

    public function show($teamId, $fixtureId)
    {
        $fixture = Team::getFixture($teamId, $fixtureId);

        return response()
            ->json(['data' => $fixture], 200);
    }
}
