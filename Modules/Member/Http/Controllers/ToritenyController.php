<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Toriteny;

class ToritenyController extends Controller
{
    public function index()
    {
        $toriteny = Toriteny::all();
        return view('member::toriteny.index', compact('toriteny'));
    }

    public function create()
    {
        $group_id = Auth::user()->group->id;
        return view('member::toriteny.create',compact('group_id'));
    }

    public function store(Request $request)
    {
        $dateInput = $request->get('date');
        $date = new \DateTime($this->formatDate($dateInput));
        $toriteny = new Toriteny($request->all());
        $toriteny->date = $date;
        $toriteny->save();
        return redirect()->route('toriteny.index');
    }

    function formatDate($date)
    {
        return str_replace('/', '-', $date);
    }

    public function show(Toriteny $toriteny)
    {
        return view('member::toriteny.show',compact('toriteny'));
    }

    public function edit(Toriteny $toriteny)
    {
        return view('member::toriteny.edit', compact('toriteny'));
    }

    public function update(Request $request,Toriteny $toriteny)
    {
        $dateInput = $this->formatDate($request->get('date'));
        $toriteny->fill($request->all());
        $toriteny->date = new \DateTime($dateInput);
        $toriteny->save();
        return redirect()->route('toriteny.index');
    }

    public function destroy(Toriteny $toriteny)
    {
        $toriteny->delete();
        return redirect()->route('toriteny.index');
    }
}
