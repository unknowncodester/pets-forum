<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Pets extends Controller
{
    public function index()
    {
        $pets = DB::table('pet')->get();
        return json_encode($pets);
    }
    
    public function show($id)
    {
        $pet = DB::table('pet')->where('uid', $id)->get()->first();
        return json_encode($pet);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|String|max:15',
            'type' => 'required|String|max:15',
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->all(), 400);
        }

        DB::table('pet')->insert(
            $request->all()
        );
    }
}
