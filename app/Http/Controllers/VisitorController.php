<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Modules\Member\Entities\Calendar;
use Modules\Member\Entities\Toriteny;

class VisitorController extends Controller
{
    protected $nb = 4;

    public function __construct()
    {
        Carbon::setLocale(Config::get('app.locale'));
        Carbon::setToStringFormat('d/m/Y à H:i:s');

    }

    public function index()
    {
        Carbon::setLocale('fr');
        $events = Cache::remember('events', 24 * 60 * 6, function () {
            return Calendar::orderBy('date', 'desc')->get();
        });
        $tts = Toriteny::orderBy('date', 'desc')->paginate(4);
        return view('visitor.home', compact('tts', 'events'));
    }

    public function getCalendars()
    {
        $calendars = Calendar::orderBy('date', 'asc')->get();
        return $calendars;
    }
}
