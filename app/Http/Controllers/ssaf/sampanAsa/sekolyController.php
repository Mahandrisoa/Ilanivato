<?php

namespace App\Http\Controllers\ssaf\sampanAsa;

use App\Group;
use App\Http\Controllers\Controller;

class sekolyController extends Controller
{
    public function index()
    {
        $group = Group::find(73);
        return view('visitor.ssaf.sampan-asa.sekoly', compact('group'));
    }
}
