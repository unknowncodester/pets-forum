<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\Fixture;

class FixtureController extends Controller
{
    public function index(Request $request)
    {
        $fixtures = Fixture::getAll($request);

        return response()
            ->json(['data' => $fixtures], 200);
    }

    public function show($id)
    {
        $fixture = Fixture::getOne($id);

        return response()
            ->json(['data' => $fixture], 200);
    }
}
