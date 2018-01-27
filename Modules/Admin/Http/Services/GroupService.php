<?php
/**
 * Created by PhpStorm.
 * User: mahandrisoa
 * Date: 12/9/17
 * Time: 9:44 PM
 */

namespace Modules\Admin\Http\Services;

use App\Group;
use Illuminate\Support\Facades\File;
use Modules\Member\Entities\Avatar;
use Modules\Member\Entities\Comptable;
use Modules\Member\Entities\President;
use Modules\Member\Entities\Secretaire;
use Modules\Member\Entities\Tresorier;
use Modules\Member\Entities\VicePresident;
use Modules\Member\Http\Services\Avatar\AvatarServiceInterface;
use Symfony\Component\HttpFoundation\Request;

class GroupService implements GroupServiceInterface
{
    protected $avatarService;

    public function __construct(AvatarServiceInterface $avatarService)
    {
        $this->avatarService = $avatarService;
    }

    public function getAll()
    {
        return $groups = Group::all();
    }

    public function store(Request $inputs)
    {
        $group = new Group($inputs->all());
        $group->directoryName = $this->transform($group->name);
        $result = File::makeDirectory(public_path() . '/uploads/' . $group->directoryName, 0777, true, true);
        $group->save();

        // Create bureaux
        $group->president()->save(new President(['name' => '']));
        $group->vicePresident()->save(new VicePresident(['name' => '']));
        $group->secretaire()->save(new Secretaire(['name' => '']));
        $group->comptable()->save(new Comptable(['name' => '']));
        $group->tresorier()->save(new Tresorier(['name' => '']));
    }

    private function transform($str)
    {
        $str = trim($str);
        $str = str_replace(' ', '_', $str);
        return $str;
    }

    public function update(Request $inputs, Group $group)
    {
        $group->fill($inputs->all());
        $group->save();
    }

    public function delete(Group $group)
    {
        File::deleteDirectory(public_path() . '/uploads/' . $group->directoryName);
        $group->delete();
    }
}