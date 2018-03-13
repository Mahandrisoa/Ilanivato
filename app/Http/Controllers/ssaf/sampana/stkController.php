<?php

namespace App\Http\Controllers\ssaf\sampana;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class stkController extends Controller
{
    public function index()
    {
        return view('visitor.ssaf.sampana.stk');
    }
}
