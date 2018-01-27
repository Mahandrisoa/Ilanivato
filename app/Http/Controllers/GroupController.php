<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function index()
    {
        //Get all users and pass it to the view
        $groups = Group::all();
        return view('groups.index')->with('groups', $groups);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:120',
            'interlude' => 'required'
        ]);
        $group = Group::create($request->all());

        return redirect()->route('groups.index')
            ->with('flash_message',
                'Groupe ajouté avec success.');
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $this->validate($request, [
            'name' => 'required|max:120',
            'interlude' => 'required'
        ]);
        $group->fill($request->all());
        $group->save();

        return redirect()->route('groups.index')
            ->with('flash_message',
                'Group successfully edited.');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index')
            ->with('flash_message', 'Group successfully deleted.');
    }
}
