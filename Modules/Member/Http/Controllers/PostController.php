<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Post;
use Modules\Member\Http\Requests\CreatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $group = Auth::user()->group;
        $posts = $group->posts();
        return view('member::home.home')->with('posts');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post($request->all());
        $post->group_id = Auth::user()->group->id;
        $post->save();
        return redirect()->route('home');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function edit(Post $post)
    {
        return view('member::home.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, Post $post)
    {
        $post->fill($request->all());
        $post->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home');
    }
}
