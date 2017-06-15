<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
}
