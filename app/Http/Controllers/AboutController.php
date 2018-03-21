<?php

namespace App\Http\Controllers;

use App\Group;
use Modules\Member\Entities\Historique;

class AboutController extends Controller
{
    public function index()
    {
        $histories = Historique::where('group_id','=',2)->orderBy('date', 'desc')->get();
        $group = Group::where('id', '=', 2)->first();
        return view('visitor.fg-about.index', compact('histories', 'group'));
    }
}
