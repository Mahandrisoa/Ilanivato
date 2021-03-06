<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Member\Entities\MahafantatraFeno;

class MFHController extends Controller
{
    public function index()
    {
        $mfhs = MahafantatraFeno::all();
        return view('member::mfh.index', compact('mfhs'));
    }

    public function create()
    {
        return view('member::mfh.create');
    }

    public function store(Request $request)
    {
        $mfh = new MahafantatraFeno($request->all());
        try {
            $mfh->save();
        } catch (QueryException $e) {
            return response()->json(null, 500);
        }
        return response()->json($mfh, 201);
    }

    public function show()
    {
        return view('member::mfh.show');
    }

    public function edit($id)
    {
        $mfh = MahafantatraFeno::find($id);
        return view('member::mfh.edit', compact('mfh'));
    }

    public function update(Request $request, MahafantatraFeno $mfh)
    {
        $mfh->fill($request->all());
        $mfh->save();
        return redirect()->route('mahafantatra-feno.index');
    }

    public function destroy(Request $request)
    {
        $deleted = DB::delete('delete from mahafantatra_feno where mois= :mois and jour=:jour',[
            'mois' => $request->request->get('mois'),
            'jour' => $request->request->get('jour')
        ]);
        return response()->json($deleted,204);
    }
}
