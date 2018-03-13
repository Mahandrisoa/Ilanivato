<?php

namespace App\Http\Controllers\fgLehibe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Member\Entities\Post;

class fiainamPanahyController extends Controller
{
    public function fahaterahamBaovao()
    {
        $posts = Post::where('type_post_id',8)->paginate(4);
        return view('visitor.fg-lehibe.fiainam-panahy.fahateraham-baovao',compact('posts'));
    }

    public function velonaSyMiaina()
    {
        $posts = Post::where('type_post_id',9)->paginate(4);
        return view('visitor.fg-lehibe.fiainam-panahy.velona-sy-miaina',compact('posts'));
    }
}
