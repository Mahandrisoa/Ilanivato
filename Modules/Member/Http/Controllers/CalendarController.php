<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Calendar;

class CalendarController extends Controller
{
    public function index()
    {
        $calendars = Calendar::all()
            ->where('group_id', '=', Auth::user()->group->id)
            ->sortBy(function ($calendar){
                return $calendar->date;
            });
        return view('member::calendars.index', compact('calendars'));
    }

    public function create()
    {
        return view('member::calendars.create');
    }

    public function store(Request $request)
    {
        $str = str_replace('/', '-', $request->get('date'));
        $date = new \DateTime($str);
        $calendar = new Calendar();
        $calendar->date = $date;
        $calendar->event = $request->get('event');
        $calendar->group_id = Auth::user()->group->id;
        $calendar->save();
        return redirect()->route('calendars.index');
    }

    public function show()
    {
        return view('member::show');
    }

    public function edit(Calendar $calendar)
    {
        return view('member::calendars.edit', compact('calendar'));
    }

    public function update(Request $request, Calendar $calendar)
    {
        $str = str_replace('/', '-', $request->get('date'));
        $date = new \DateTime($str);
        $calendar->fill($request->all());
        $calendar->date = $date;
        $calendar->save();
        return redirect()->route('calendars.index');
    }

    public function destroy(Calendar $calendar)
    {
        $calendar->delete();
        return redirect()->route('calendars.index');
    }
}
