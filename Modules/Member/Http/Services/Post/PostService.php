<?php


namespace Modules\Member\Http\Services\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Post;

class PostService implements PostServiceInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getById($id)
    {
        return Post::find($id);
    }

    public function store(Request $request)
    {
        $post = new Post($request->all());
        $post->group_id = Auth::user()->group->id;
        $post->save();
    }

    public function getPaginate($n,$typeId)
    {
        $group = Auth::user()->group;
        $posts = Post::where('group_id', $group->id )->whereIn('type_post_id' , $typeId);
        return $posts->paginate($n);
    }

    
    public function destroy($id)
    {

    }
}