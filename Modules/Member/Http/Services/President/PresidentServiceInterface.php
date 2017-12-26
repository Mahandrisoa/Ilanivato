<?php


namespace Modules\Member\Http\Services\President;


use Modules\Member\Entities\President;
use Symfony\Component\HttpFoundation\Request;

interface PresidentServiceInterface
{
    public function update(Request $request, President $president);
}