<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\TypePost;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->where('isValid','=', false);
        //dd($posts->first()->type());
        return view('admin::posts.index')->with('posts', $posts);
    }

    public function validate(Post $post)
    {
        $post->isValid = true;
        $post->save();
        return redirect()->route('admin.posts.index');
    }

    public function destroy()
    {
    }
}
