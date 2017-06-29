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

    public function show($id)
    {
        $topic = Topic::find($id);

        return response()
            ->json(['data' => $topic], 200);
    }
}
