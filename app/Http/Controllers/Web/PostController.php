<?php

namespace App\Http\Controllers\Web;

use App\Http\Resources\PostCollection;
use App\Models\Post;
use App\Http\Resources\Post as PostResource;
use Illuminate\View\View;

class PostController
{
    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->where('published', true)
            ->paginate();

        $posts = new PostCollection($posts);

        return view('home', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post $post
     * @return View
     */
    public function show(Post $post): View
    {
        $post = new PostResource($post);

        return view('post', compact('post'));
    }

}