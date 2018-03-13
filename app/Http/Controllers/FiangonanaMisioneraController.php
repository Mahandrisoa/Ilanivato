<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Member\Entities\FgMisionera;

class FiangonanaMisioneraController extends Controller
{
    public function index() {

        return view('visitor.fiangonana-misionera.index');
    }

    public function missions() {
        $missions = FgMisionera::with('images')->get();
        return $missions;
    }
}
