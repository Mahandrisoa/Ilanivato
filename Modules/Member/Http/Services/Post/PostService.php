<?php


namespace Modules\Member\Http\Services\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\PostImage;

use Illuminate\Support\Facades\Input;

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
        // start
        $post->save();
        $imgRequest = Input::file('images');
        if ($imgRequest != null) {
            foreach ($imgRequest as $img) {
                $postImg = new PostImage();
                $postImg->image_path = $img;
                $postImg->post_id = $post->id;
                $postImg->save();
                $post->images()->save($postImg);
            }
        }
        // end
    }

    public function getPaginate($n, $typeId)
    {
        $group = Auth::user()->group;
        $posts = Post::where('group_id', $group->id)->whereIn('type_post_id', $typeId);
        return $posts->paginate($n);
    }


    public function delete($id)
    {
        Post::find($id)->delete();
    }

    public function update(Request $request, Post $post)
    {
        $post->fill($request->all());
        $post->save();
    }
}