<?php

namespace Modules\Member\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use Modules\Member\Entities\Post;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Auth::user()->group;
        $posts = Post::where('group_id', $group->id)->orderBy('updated_at','desc')->get();
        return view('member::home.home')->with(['posts' => $posts]);
    }
}
