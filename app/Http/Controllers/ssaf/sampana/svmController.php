<?php

namespace App\Http\Controllers\ssaf\sampana;

use App\Group;
use App\Http\Controllers\Controller;

class svmController extends Controller
{
    public function index()
    {
        $group = Group::find(68);
        return view('visitor.ssaf.sampana.svm', compact('group'));
    }
}
