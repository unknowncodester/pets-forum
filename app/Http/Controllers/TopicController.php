<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::with('posts')
            ->get();

        return response()
            ->json(['data' => $topics], 200);
    }

    public function show($id)
    {
        $topic = Topic::with('posts')
            ->find($id);

        return response()
            ->json(['data' => $topic], 200);
    }
}
