<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use App\Group;
use App\Http\Controllers\Controller;

class mpitoritenyKatekistaController extends Controller
{
    public function index()
    {
        $group = Group::find(79);
        return view('visitor.ssaf.fikambanana.fmk', compact('group'));
    }
}
