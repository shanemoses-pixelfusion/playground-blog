<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return JsonResponse
     */
    public function store(Request $request) : JsonResponse
    {
        $attributes = $request->all();
        $attributes['slug'] = str_slug($attributes['title']);
        $attributes['published'] = isset($attributes['published']) ? (bool)$attributes['published'] : false;

        // TODO: Check if the slug already exists in the DB, if it does, display error and return 400
//        $existingPost = Post::where('slug', $attributes['slug'])->get();
//
//        if (empty($existingPost) === false) {
//            return JsonResponse::create(['success' => false, 'message' => 'Post already exists'], 400);
//        }

        $post = new Post($attributes);
        $post->save();

        return JsonResponse::create(['success' => true], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return JsonResponse
     */
    public function update(Request $request, Post $post) : JsonResponse
    {
        $post->update($request->all());

        return JsonResponse::create(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return JsonResponse
     */
    public function destroy(Post $post) : JsonResponse
    {
        $post->delete();

        return JsonResponse::create(null, 204);
    }
}
