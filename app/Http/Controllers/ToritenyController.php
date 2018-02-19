<?php

namespace App\Http\Controllers;

use Modules\Member\Entities\Toriteny;

class ToritenyController extends Controller
{
    public function index()
    {

    }

    public function show(Toriteny $toriteny)
    {
        return view('visitor.toriteny.show', compact('toriteny'));
    }
}
