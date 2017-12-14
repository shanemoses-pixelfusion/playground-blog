<?php
namespace App\Http\Controllers\Web;

use App\Http\Resources\PostCollection;
use App\Models\Post;
use App\Http\Resources\Post as PostResource;

class PostController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\Post  $post
     * @return PostResource
     */
    public function show(Post $post) : PostResource
    {
        return new PostResource($post);
    }

}