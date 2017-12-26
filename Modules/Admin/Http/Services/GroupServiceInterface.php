<?php
/**
 * Created by PhpStorm.
 * User: mahandrisoa
 * Date: 12/9/17
 * Time: 9:48 PM
 */

namespace Modules\Admin\Http\Services;


use App\Group;
use Symfony\Component\HttpFoundation\Request;

interface GroupServiceInterface
{
    public function getAll();

    public function update(Request $inputs, Group $group);

    public function delete(Group $group);

    public function store(Request $inputs);
}