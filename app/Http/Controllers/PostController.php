<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with(['user', 'topic'])->get();

        return response()
            ->json(['data' => $posts], 200);
    }

    public function show($id)
    {
        $post = Post::with(['user', 'topic'])->find($id);

        return response()
            ->json(['data' => $post], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|String|max:255',
            'body' => 'required|String|max:255',
            'user_id' => 'required|int',
            'topic_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            return response()
                ->json($validator->errors()->all(), 400);
        }

        if (Gate::denies('post', $request->input('user_id'))) {
            return response()
                ->json($validator->errors()->all(), 403);
        }

        return response()
            ->json(['data' => Post::create($request->all())], 201);
    }
}
