<?php

namespace App\Http\Controllers\fgMitory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Member\Entities\Post;

class tafikaMasinaController extends Controller
{
    public function fiofanana()
    {
        $posts = Post::where('type_post_id',17)->paginate(4);
        return view('visitor.fg-mitory.tafika-masina.fiofanana',compact('posts'));
    }

    public function fanatanterahana()
    {
        $posts = Post::where('type_post_id',18)->paginate(4);
        return view('visitor.fg-mitory.tafika-masina.fanatanterahana',compact('posts'));
    }
}
