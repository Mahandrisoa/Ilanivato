<?php

namespace App\Http\Controllers\fgLehibe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Member\Entities\Post;

class fiombonanaController extends Controller
{
    public function miaraka()
    {
        $posts = Post::where('type_post_id',12)->paginate(4);
        return view('visitor.fg-lehibe.fiombonana.miaraka',compact('posts'));
    }

    public function mifampiresaka()
    {
        $posts = Post::where('type_post_id',13)->paginate(4);
        return view('visitor.fg-lehibe.fiombonana.mifampiresaka',compact('posts'));
    }

    public function mifankahita()
    {
        $posts = Post::where('type_post_id',14)->paginate(4);
        return view('visitor.fg-lehibe.fiombonana.mifankahita',compact('posts'));
    }

    public function mifanampy()
    {
        $posts = Post::where('type_post_id',15)->paginate(4);
        return view('visitor.fg-lehibe.fiombonana.mifanampy',compact('posts'));
    }

    public function miaraMiasa()
    {
        $posts = Post::where('type_post_id',16)->paginate(4);
        return view('visitor.fg-lehibe.fiombonana.miara-miasa',compact('posts'));
    }
}
