<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Historique;
use Modules\Member\Http\Requests\StoreHistoryRequest;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $group =Auth::user()->group;
        $events = $group->historiques;
        return $events;
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(StoreHistoryRequest $request)
    {
        $history = new Historique($request->all());
        $history->group_id = Auth::user()->group->id;
        $history->save();
        return response()->json($history,201);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $history = Historique::find($id);
        return response()->json($history);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,Historique $history)
    {
        $history->fill($request->all());
        $history->save();
        return response()->json($history,200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Historique $history)
    {
        $history->delete();
        return response()->json(null,204);
    }
}
