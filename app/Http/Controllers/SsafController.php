<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SsafController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.index');
    }
}
