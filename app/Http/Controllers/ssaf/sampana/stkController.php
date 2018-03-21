<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class stkController extends Controller
{
    public function index()
    {
        $group = Group::find(67);
        return view('visitor.ssaf.sampana.stk', compact('group'));
    }
}
