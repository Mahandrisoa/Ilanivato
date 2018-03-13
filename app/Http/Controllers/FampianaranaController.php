<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Member\Entities\Fampianarana;

class FampianaranaController extends Controller
{
    public function index() {
        $fampianarana = Fampianarana::orderBy('created_at', 'desc')->paginate(4);
        return view('visitor.fampianarana.index',compact('fampianarana'));
    }

    public function show($id){
        $fampianarana = Fampianarana::find($id);
        return view('visitor.fampianarana.show',compact('fampianarana'));
    }
}
