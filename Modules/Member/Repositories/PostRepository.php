<?php

namespace Modules\Member;


use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Post;

class PostRepository
{
    protected $post;
    protected $auth;

    public function __construct(Post $post,Auth $auth)
    {
        $this->post = $post;
        $this->auth= $auth;
    }

    public function create(Post $post, Array $inputs)
    {
        $post->content = $inputs['content'];
        $post->group_id = $this->auth->group()->id;
        $post->save();
    }

    public function find($id)
    {
        return $this->post->findOrFail($id);
    }

    public function update($id, Array $array)
    {
        
    }
}