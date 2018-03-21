<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class sekolyAlahadyController extends Controller
{
    public function index()
    {
        $group = Group::find(65);
        return view('visitor.ssaf.sampana.sekoly-alahady', compact('group'));
    }
}
