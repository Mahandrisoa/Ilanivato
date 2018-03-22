<?php

namespace App\Http\Controllers\ssaf\sampanAsa;

use App\Group;
use App\Http\Controllers\Controller;
use Modules\Member\Entities\FKS;

class sekolyController extends Controller
{
    public function index()
    {
        $group = Group::find(73);
        $fks = FKS::all();
        return view('visitor.ssaf.sampan-asa.sekoly', compact('group', 'fks'));
    }
}
