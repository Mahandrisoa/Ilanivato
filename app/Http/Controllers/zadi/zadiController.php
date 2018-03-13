<?php

namespace App\Http\Controllers\zadi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class zadiController extends Controller
{
    public function index()
    {
        return view('visitor.zadi.index');
    }
}
