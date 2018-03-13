<?php

namespace App\Http\Controllers\fgMitory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Member\Entities\Post;

class fieveranaMahaOlonaController extends Controller
{
    public function asaSosialy()
    {
        $posts = Post::where('type_post_id',19)->paginate(4);
        return view('visitor.fg-mitory.fiheverana-ny-maha-olona.asa-sosialy',compact('posts'));
    }

    public function asaVavolombelona()
    {
        $posts = Post::where('type_post_id',20)->paginate(4);
        return view('visitor.fg-mitory.fiheverana-ny-maha-olona.asa-vavolombelona',compact('posts'));
    }
}
