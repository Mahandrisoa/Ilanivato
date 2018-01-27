<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FgLehibeController extends Controller
{
    public function index()
    {
        return view('visitor.fg-lehibe.index');
    }
}
