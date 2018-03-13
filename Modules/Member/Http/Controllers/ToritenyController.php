<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Toriteny;
use Illuminate\Support\Facades\File;

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

        $audio = $request->file('audio');
        $audioName = time().'.'.$request->file('audio')->getClientOriginalExtension();
        $location = public_path() . '/audio/toriteny/';
        $audio->move($location, $audioName);
        $toriteny->date = $date;
        $toriteny->audio = $audioName;
        $toriteny->save();
        return redirect()->route('toriteny-member.index');
    }

    function formatDate($date)
    {
        return str_replace('/', '-', $date);
    }

    public function show($id)
    {
        $toriteny = Toriteny::find($id);
        return view('member::toriteny.show',compact('toriteny'));
    }

    public function edit($id)
    {
        $toriteny = Toriteny::find($id);
        return view('member::toriteny.edit', compact('toriteny'));
    }

    public function update(Request $request,Toriteny $toriteny)
    {
        $dateInput = $this->formatDate($request->get('date'));
        $toriteny->fill($request->all());
        $toriteny->date = new \DateTime($dateInput);
        $toriteny->save();
        return redirect()->route('toriteny-member.index');
    }

    public function destroy($id)
    {
        $toriteny = Toriteny::find($id);
        File::delete(public_path().'/audio/toriteny/'. $toriteny->audio);
        $toriteny->delete();
        return redirect()->route('toriteny-member.index');
    }
}
