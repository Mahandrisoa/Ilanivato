<?php


namespace Modules\Member\Http\Services\Post;


use Illuminate\Http\Request;

interface PostServiceInterface
{
    public function getPaginate($n);

    public function store(Request $request);
}