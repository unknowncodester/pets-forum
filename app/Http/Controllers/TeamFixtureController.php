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
        $fixtures = Team::allFixtures($teamId);

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
