<?php

namespace Modules\Member\Http\Services\President;


use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\President;
use Modules\Member\Http\Services\Avatar\AvatarServiceInterface;
use Symfony\Component\HttpFoundation\Request;

class PresidentService implements PresidentServiceInterface
{
    private $avatarService;

    public function __construct(AvatarServiceInterface $avatarService)
    {
        $this->avatarService = $avatarService;
    }

    public function update(Request $request, President $president)
    {
        $directoryName = Auth::user()->group->directoryName;
        $president->name = $request->get('presidentName');
        if ($request->hasFile('presidentAvatar')) {
            $president->avatar = $this->avatarService->store($request, 'presidentAvatar', '/uploads/' . $directoryName . '/avatar');
        }
        $president->save();
    }

}