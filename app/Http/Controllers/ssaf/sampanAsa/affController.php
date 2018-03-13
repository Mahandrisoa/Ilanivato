<?php

namespace App\Http\Controllers\ssaf\sampanAsa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class affController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.sampan-asa.aff');
    }
}
