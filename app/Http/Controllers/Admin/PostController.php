<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Function render form template to create a Post
     *
     * @param Request $request
     *
     * @return View
     */
    public function create(Request $request)
    {
        return view('admin.post.create');
    }

    /**
     * Function to handling the routing for storing a Post
     * also displaying the necessary feedback to user
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        $apiRequest = Request::create(route('posts.store'), 'POST', $request->all());
        $apiRequest->attributes = $request->all();
        $response = app()->handle($apiRequest);

        if ($response->getStatusCode() !== 201) {
            // TODO: Display error message to user and detail as to why it failed.
        } else {
            // TODO: Show success message for user
        }

        return redirect('/');

    }

}