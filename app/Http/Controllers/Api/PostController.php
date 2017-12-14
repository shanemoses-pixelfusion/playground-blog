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
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request) : JsonResponse
    {
        // TODO: Check if Post already exists with slug
            // TODO: If found, then return 400 and state it already exists. Please use unique Title
            // TODO: else, create post and return 201

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
