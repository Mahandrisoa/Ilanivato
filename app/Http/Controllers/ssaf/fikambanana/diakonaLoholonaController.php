<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use App\Group;
use App\Http\Controllers\Controller;

class diakonaLoholonaController extends Controller
{
    public function index()
    {
        $group = Group::find(77);
        return view('visitor.ssaf.fikambanana.diakona-loholona', compact('group'));
    }
}
