<?php

namespace App\Http\Controllers\fgLehibe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Member\Entities\Post;

class fitomboanaController extends Controller
{
    public function soratraMasina()
    {
        $posts = Post::where('type_post_id',10)->paginate(4);
        return view('visitor.fg-lehibe.fitomboana.soratra-masina',compact('posts'));
    }

    public function fiainamBavaka()
    {
        $posts = Post::where('type_post_id',11)->paginate(4);
        return view('visitor.fg-lehibe.fitomboana.fiainam-bavaka',compact('posts'));
    }
}
