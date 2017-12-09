<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Objectif;

class ObjectifController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $group = Auth::user()->group;
        $objectifs = Objectif::where('group_id', $group->id)->orderBy('updated_at','desc')->get();
        return view('member::objectif.index')->with(['objectifs' => $objectifs]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $objectif = new Objectif($request->all());
        $objectif->group_id = Auth::user()->group->id;
        $objectif->save();
        return redirect()->route('objectifs.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $objectif = Objectif::find($id);
        return response()->json($objectif);
    }

    public function edit(Objectif $objectif)
    {
        return view('member::objectif.edit')->with('objectif',$objectif);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, Objectif $objectif)
    {
        $objectif->fill($request->all());
        $objectif->save();
        return redirect()->route('objectifs.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Objectif $objectif)
    {
        $objectif->delete();
        return redirect()->route('objectifs.index');
    }
}
