<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\FKS;

class BureauController extends Controller
{
    public function index()
    {
        $group = Auth::user()->group;
        if ($group->id == 73) {
            $tale = FKS::where('poste', '=', 'Tale')->first();
            $fks = FKS::all();
            return view('member::fks.index', compact('tale', 'fks'));
        }
        return view('member::bureau.index', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('member::create');
    }

    public function editAll()
    {
        $group = Auth::user()->group;
        return view('member::bureau.edit',compact('group'));
    }

    public function store(Request $request)
    {
        $group = Auth::user()->group;
        $group->president->fill(['name' => $request->request->get('president_name')])->save();
        $group->vicePresident->fill(['name' => $request->request->get('vice_president_name')])->save();
        $group->secretaire->fill(['name' => $request->request->get('secretaire_name')])->save();
        $group->comptable->fill(['name' => $request->request->get('comptable_name')])->save();
        $group->tresorier->fill(['name' => $request->request->get('tresorier_name')])->save();
        return redirect()->route('bureaux.index');
    }

    public function show()
    {
        $group = Auth::user()->group;
        return view('member::bureau.edit',compact('group'));
    }



    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
