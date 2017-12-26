<?php

namespace Modules\Admin\Http\Controllers;

use App\Group;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\CreateGroupRequest;
use Modules\Admin\Http\Requests\EditGroupRequest;
use Modules\Admin\Http\Services\GroupServiceInterface;

class GroupController extends Controller
{
    private $groupService;

    public function __construct(GroupServiceInterface $groupService)
    {
        $this->groupService = $groupService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::groups.index')->with('groups', $this->groupService->getAll());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return redirect('groups');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroupRequest $request)
    {
        $this->groupService->store($request);
        return redirect()->route('groups.index')->with('flash_message', 'Sampana/Sampan\'Asa,Fikamanana ajouté avec success.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('admin::groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function update(EditGroupRequest $request, Group $group)
    {
        $this->groupService->update($request, $group);
        return redirect()->route('groups.index')->with('flash_message', 'Modification de Sampana/Sampan\'Asa,Fikamanana avec success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $this->groupService->delete($group);
        return redirect()->route('groups.index')
            ->with('flash_message', 'Sampana/Sampan\'Asa,Fikamanana supprimé avec success.');
    }
}
