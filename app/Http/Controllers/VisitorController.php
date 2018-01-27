<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Member\Entities\Calendar;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\Toriteny;

class VisitorController extends Controller
{
    protected $nb = 4;

    public function index()
    {
        $toriteny = Toriteny::all(['date','content']);
        $events   = Calendar::all(['date','event'])->sortBy('date',SCANDIR_SORT_DESCENDING,false)->take(4);
        return view('visitor.home', compact('toriteny','events'));
    }
}
