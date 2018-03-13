<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CreationDateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $date = Auth::user()->group->date_creation;
        return response()->json($date);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $group = Auth::user()->group;
        $group->date_creation = $request->get('date_creation');
        $group->save();
        return redirect()->route('histories.index');
    }

    public function udpate(Request $request)
    {
        $group = Auth::user()->group;
        $group->date_creation = $request->get('date_creation');
        $group->save();
        return redirect()->route('histories.index');
    }
}
