<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FgMitoryController extends Controller
{
    public function index()
    {
        return view('visitor.fg-mitory.index');
    }
}
