<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\TypePost;
use Modules\Member\Http\Services\Post\PostServiceInterface;

class FitomboanaController extends Controller
{
    private $postService;

    protected $nbrPerPage = 5;

    protected $typeId = [10, 11];

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPaginate($this->nbrPerPage, $this->typeId);
        $links = $posts->setPath('')->render();
        return view('member::posts.fitomboana.index', compact('posts', 'links'));
    }

    public function create()
    {
        $types = TypePost::all()->where('type_post_id', '=', 4)->pluck('libelleType', 'id')->toArray();
        return view('member::posts.fitomboana.create', array('types' => $types));
    }

    public function store(Request $request)
    {
        $this->postService->store($request);
        return redirect()->route('fitomboana.index');
    }

    public function show($id)
    {
        $post = $this->postService->getById($id);
        return view('member::posts.fitomboana.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $types = TypePost::all()->where('type_post_id', '=', 4)->pluck('libelleType', 'id')->toArray();
        return view('member::posts.fitomboana.edit', compact('post', 'types'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->postService->update($request, $post);
        return redirect()->route('fitomboana.index');
    }

    public function destroy($id)
    {
        $this->postService->delete($id);
        return redirect()->route('fitomboana.index');
    }
}
