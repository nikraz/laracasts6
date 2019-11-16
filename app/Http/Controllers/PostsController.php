<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {

        $posts = Post::where('slug', $slug)->firstOrFail();

        if (!$posts) {
            abort(404);
        }

        return view(
            'wildcard',
            [
                'wildcard' => $posts->body,
            ]
        );
    }
}
