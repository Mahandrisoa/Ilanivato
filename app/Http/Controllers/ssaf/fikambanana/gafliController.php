<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use App\Group;
use App\Http\Controllers\Controller;

class gafliController extends Controller
{
    public function index()
    {
        $group = Group::find(78);
        return view('visitor.ssaf.fikambanana.gafli', compact('group'));
    }
}
