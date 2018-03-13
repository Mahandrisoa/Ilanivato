<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Modules\Member\Entities\Historique;
use Modules\Member\Entities\HistoriqueImage;
use Modules\Member\Http\Requests\StoreHistoryRequest;

class HistoryController extends Controller
{
    public function index()
    {
        $group =Auth::user()->group;
        $histories = Historique::where('group_id', $group->id)->orderBy('date', 'asc')->paginate(10);
        return view('member::historiques.index', compact('histories','group'));
    }

    public function create()
    {
        return view('member::historiques.create');
    }

    public function store(Request $request)
    {
        $history = new Historique($request->all());
        $history->group_id = Auth::user()->group->id;
        $history->save();
        $imgRequest = Input::file('images');
        if($imgRequest != null) {
            foreach ($imgRequest as $img) {
                $hImg = new HistoriqueImage();
                $hImg->image_path = $img;
                $hImg->historique_id = $history->id;
                $hImg->save();
                $history->images()->save($hImg);
            }
        }
        return redirect()->route('histories.index');
    }

    public function edit($id)
    {
        $history = Historique::find($id);
        return view('member::historiques.edit', compact('history'));
    }

    public function update(Request $request,Historique $history)
    {
        //$str = str_replace('/', '-', $request->get('date'));
        //$date = new \DateTime($str);
        $history->fill($request->all());
        //$history->date = $date;
        $history->save();
        return redirect()->route('histories.index');
    }

    public function destroy(Historique $history)
    {
        $history->delete();
        return redirect()->route('histories.index');
    }
}
