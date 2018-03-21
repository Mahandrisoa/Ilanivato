<?php

namespace App\Http\Controllers\ssaf\sampanAsa;

use App\Group;
use App\Http\Controllers\Controller;

class affController extends Controller
{
    public function index()
    {
        $group = Group::find(75);
        return view('visitor.ssaf.sampan-asa.aff', compact('group'));
    }
}
