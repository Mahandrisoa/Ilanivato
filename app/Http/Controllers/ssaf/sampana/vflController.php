<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class vflController extends Controller
{
    public function index()
    {
        $group = Group::find(69);
        return view('visitor.ssaf.sampana.vfl', compact('group'));
    }
}
