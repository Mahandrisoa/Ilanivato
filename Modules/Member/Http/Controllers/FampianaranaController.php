<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Fampianarana;
use Illuminate\Support\Facades\File;
class FampianaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $fampianarana = Fampianarana::orderBy('numero', 'desc')->paginate(4);

        return view('member::fampianarana.index',compact('fampianarana'));
    }

    public function create()
    {
        return view('member::fampianarana.create');
    }

    public function store(Request $request)
    {
        $fampianarana = new Fampianarana($request->all());

        $audio = $request->file('lien_mp3');
        $audioName = time().'.'.$request->file('lien_mp3')->getClientOriginalExtension();
        $location = public_path() . '/audio/fampianarana/';
        $audio->move($location, $audioName);
        $fampianarana->lien_mp3 = $audioName;
        $fampianarana->save();

        return redirect()->route('fampianarana-member.index');
    }

    public function show($id)
    {
        $f = Fampianarana::find($id);
        return view('member::fampianarana.show',compact('f'));
    }

    public function edit($id)
    {
        $f = Fampianarana::find($id);
        return view('member::fampianarana.edit',compact('f'));
    }
    
    public function update(Request $request, Fampianarana $fampianarana)
    {
        $fampianarana->fill($request->all());
        $fampianarana->save();
        return redirect()->route('fampianarana-member.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $fampianarana = Fampianarana::find($id);
        File::delete(public_path().'/audio/fampianarana/'. $fampianarana->lien_mp3);
        $fampianarana->delete();
        return redirect()->route('fampianarana-member.index');
    }
}
