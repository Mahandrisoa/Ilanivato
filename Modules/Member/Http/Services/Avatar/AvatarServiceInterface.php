<?php


namespace Modules\Member\Http\Services\Avatar;


use Symfony\Component\HttpFoundation\Request;

interface AvatarServiceInterface
{
    public function store(Request $request, $inputName, $directoryName);
}