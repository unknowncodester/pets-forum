<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();

        return response()
            ->json(['data' => $teams], 200);
    }

    public function show($id)
    {
        $team = Team::find($id);

        return response()
            ->json(['data' => $team], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|String|max:30'
        ]);

        if ($validator->fails()) {
            return response()
                ->json($validator->errors()->all(), 400);
        }

        $team = Team::create($request->all());

        return response()
            ->json(['data' => $team], 201);
    }
}
