<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class slkController extends Controller
{
    public function index()
    {
        $group = Group::find(66);
        return view('visitor.ssaf.sampana.slk', compact('group'));
    }
}
