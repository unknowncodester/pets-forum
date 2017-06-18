<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use App\Models\Fixture;

class FixtureController extends Controller
{
    public function index()
    {
        $fixtures = Fixture::getAll();

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
