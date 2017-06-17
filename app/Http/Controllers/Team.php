<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Team extends Controller
{
    public function index()
    {
        $teams = DB::table('teams')->get();
        return json_encode($teams);
    }

    public function show($id)
    {
        $team = DB::table('teams')->where('uid', $id)->get()->first();
        return json_encode($team);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|String|max:30'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->all(), 400);
        }

        DB::table('teams')->insert(
            $request->all()
        );
    }
}
