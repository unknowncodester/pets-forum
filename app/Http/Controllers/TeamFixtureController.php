<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use App\Models\Fixture;
use App\Models\Team;

class TeamFixtureController extends Controller
{
    public function index($teamId)
    {
        $team = Team::find($teamId);

        foreach ($team->homeFixtures as $fixture) {
            echo $fixture;
        }

        $fixtures = $team->homeFixtures()->where('home_team_id', $teamId)->toSql();

        return response()
            ->json(['data' => $fixtures], 200);
    }

    public function show($id)
    {
//        $fixture = Fixture::getOne($id);
//
//        return response()
//            ->json(['data' => $fixture], 200);
    }
}
