<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Team extends Controller
{
    public function index()
    {
        $teams = DB::table('teams')
            ->get();

        return response()
            ->json(['data' => $teams], 200);
    }

    public function show($id)
    {
        $team = DB::table('teams')
            ->where('id', $id)
            ->get()
            ->first();

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

        DB::table('teams')
            ->insert($request->all()
        );

        return response()
            ->json(['data'=>''], 201);
    }
}
