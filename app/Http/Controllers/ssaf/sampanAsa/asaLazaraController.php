<?php

namespace App\Http\Controllers\ssaf\sampanAsa;

use App\Group;
use App\Http\Controllers\Controller;

class asaLazaraController extends Controller
{
    public function index()
    {
        $group = Group::find(74);
        return view('visitor.ssaf.sampan-asa.asa-lazara', compact('group'));
    }
}
