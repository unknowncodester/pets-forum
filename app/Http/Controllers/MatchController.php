<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\Match;

class MatchController extends Controller
{
    public function index(Request $request)
    {
        $fixtures = Match::getAll($request);

        return response()
            ->json(['data' => $fixtures], 200);
    }

    public function show($id)
    {
        $fixture = Match::getOne($id);

        return response()
            ->json(['data' => $fixture], 200);
    }
}
