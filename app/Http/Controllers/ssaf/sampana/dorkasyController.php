<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class dorkasyController extends Controller
{
    public function index()
    {
        $group = Group::find(71);
        return view('visitor.ssaf.sampana.dorkasy', compact('group'));
    }
}
