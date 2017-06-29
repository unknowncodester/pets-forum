<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();

        return response()
            ->json(['data' => $topics], 200);
    }
}
