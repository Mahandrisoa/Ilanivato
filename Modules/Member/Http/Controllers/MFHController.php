<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\MahafantatraFeno;

class MFHController extends Controller
{
    public function index()
    {
        $mfhs = MahafantatraFeno::all();
        return view('member::mfh.index',compact('mfhs'));
    }

    public function create()
    {
        return view('member::mfh.create');
    }

    public function store(Request $request)
    {
        $mfh = new MahafantatraFeno($request->all());
        $mfh->save();
        return redirect()->route('mahafantatra-feno.index');
    }

    public function show()
    {
        return view('member::mfh.show');
    }

    public function edit($id)
    {
        $mfh = MahafantatraFeno::find($id);
        return view('member::mfh.edit',compact('mfh'));
    }

    public function update(Request $request, MahafantatraFeno $mfh)
    {
        $mfh->fill($request->all());
        $mfh->save();
        return redirect()->route('mahafantatra-feno.index');
    }

    public function destroy(MahafantatraFeno $mfh)
    {
        $mfh->delete();
        return redirect()->route('mahafantatra-feno.index');
    }
}