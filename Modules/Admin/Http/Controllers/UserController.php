<?php

namespace Modules\Admin\Http\Controllers;

use App\Group;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\EditUserRequest;
use Session;

//Importing laravel-permission models

//Enables us to output flash messaging

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users and pass it to the view
        $users = User::paginate(4);
        return view('admin::users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('name','id')->toArray();
        return view('admin::users.create',['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'name' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'group_id' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create($request->only('email', 'name', 'password','group_id')); //Retrieving only the email and password data

        return redirect()->route('users.index')
            ->with('flash_message',
                'Responsable ajouté avec success.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $groups = Group::pluck('name','id')->toArray();
        return view('admin::users.edit',['groups' => $groups, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        return redirect()->route('users.index')
            ->with('flash_message',
                'Responsable modifié avec success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('flash_message', 'Responsable supprimé avec success.');
    }
}
