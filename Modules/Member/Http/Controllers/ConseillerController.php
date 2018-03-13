<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Conseiller;

class ConseillerController extends Controller
{

    public function store(Request $request)
    {
        $group = Auth::user()->group;
        $conseiller = new Conseiller(['name' => $request->request->get('conseiller_name'),
            'group_id' => $group->id]);
        $conseiller->save();
        return redirect()->route('bureaux.index');
    }


    public function destroy($id)
    {
        Conseiller::find($id)->delete();
        return redirect()->route('bureaux.index');
    }
}
