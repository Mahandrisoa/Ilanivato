<?php

namespace App\Http\Controllers;

use Modules\Member\Entities\Historique;

class AboutController extends Controller
{
    public function index()
    {
        $histories = Historique::where('group_id','=',2)->orderBy('date', 'desc')->get();
        return view('visitor.fg-about.index',compact('histories'));
    }
}
