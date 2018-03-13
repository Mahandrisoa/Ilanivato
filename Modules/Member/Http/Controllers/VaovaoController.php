<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Vaovao;

class VaovaoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $vaovao = Vaovao::all();
        return view('member::vaovao.index',compact('vaovao'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('member::vaovao.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $str = str_replace('/', '-', $request->get('date'));
        $date = new \DateTime($str);
        $vaovao = new Vaovao($request->all());
        $vaovao->date = $date;
        $vaovao->save();
        return redirect()->route('vaovao-member.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('member::vaovao.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $vaovao = Vaovao::find($id);
        return view('member::vaovao.edit',compact('vaovao'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $str = str_replace('/', '-', $request->get('date'));
        $date = new \DateTime($str);
        $vaovao = Vaovao::find($id);
        $vaovao->fill($request->all());
        $vaovao->date = $date;
        $vaovao->save();
        return redirect()->route('vaovao-member.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        Vaovao::find($id)->delete();
        return redirect()->route('vaovao-member.index');
    }
}
