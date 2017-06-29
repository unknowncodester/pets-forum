<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return response()
            ->json(['data' => $posts], 200);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return response()
            ->json(['data' => $post], 200);
    }
}
