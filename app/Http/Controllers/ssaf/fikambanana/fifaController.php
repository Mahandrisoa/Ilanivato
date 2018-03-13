<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class fifaController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.fikambanana.fifa');
    }
}
