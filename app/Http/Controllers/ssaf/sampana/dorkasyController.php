<?php

namespace App\Http\Controllers\ssaf\sampana;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dorkasyController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.sampana.dorkasy');
    }
}
