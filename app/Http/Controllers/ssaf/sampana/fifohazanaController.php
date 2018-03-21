<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class fifohazanaController extends Controller
{
    public function index()
    {
        $group = Group::find(72);
        return view('visitor.ssaf.sampana.fifohazana', compact('group'));
    }
}
