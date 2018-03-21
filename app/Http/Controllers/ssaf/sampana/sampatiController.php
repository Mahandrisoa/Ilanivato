<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class sampatiController extends Controller
{
    public function index()
    {
        $group = Group::find(70);
        return view('visitor.ssaf.sampana.sampati', compact('group'));
    }
}
