<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class diakonaLoholonaController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.fikambanana.diakona-loholona');
    }
}
