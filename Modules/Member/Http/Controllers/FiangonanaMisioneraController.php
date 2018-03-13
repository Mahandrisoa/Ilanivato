<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Modules\Member\Entities\FgMImage;
use Modules\Member\Entities\FgMisionera;

class FiangonanaMisioneraController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $missions = FgMisionera::all();
        $images = FgMImage::all();
        return view('member::fiangonana-misionera.index', compact('missions','images'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('member::fiangonana-misionera.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $mission = new FgMisionera([
            'intitule' => $request->request->get('intitule')
        ]);
        $mission->save();
        $imgRequest = Input::file('images');
        foreach ($imgRequest as $img) {
            $fgImg = new FgMImage();
            $fgImg->image_path = $img;
            $fgImg->fg_misionera_id = $mission->id;
            $fgImg->save();
            $mission->images()->save($fgImg);
        }
        return redirect()->route('fiangonana-misionera-member.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('member::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('member::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
