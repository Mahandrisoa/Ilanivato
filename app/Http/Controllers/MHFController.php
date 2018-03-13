<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Member\Entities\MahafantatraFeno;

class MHFController extends Controller
{
    public function index()
    {
        $mfhs = MahafantatraFeno::all();
        return view('visitor.mfh.index', compact('mfhs'));
    }

    public function getMhf(Request $request, $mois, $jour)
    {
        $mhf = MahafantatraFeno::where([
            ['mois', '=', $mois],
            ['jour', '=', $jour]
        ])->get();
        return $mhf;
    }
}
