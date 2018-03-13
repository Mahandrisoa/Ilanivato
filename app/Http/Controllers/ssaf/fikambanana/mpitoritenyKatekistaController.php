<?php

namespace App\Http\Controllers\ssaf\fikambanana;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mpitoritenyKatekistaController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.fikambanana.fmk');
    }
}
