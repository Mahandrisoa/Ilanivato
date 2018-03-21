<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use App\Group;
use App\Http\Controllers\Controller;

class fifaController extends Controller
{
    public function index()
    {
        $group = Group::find(76);
        return view('visitor.ssaf.fikambanana.fifa', compact('group'));
    }
}
