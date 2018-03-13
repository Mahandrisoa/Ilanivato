<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\TypePost;
use Modules\Member\Http\Services\Post\PostServiceInterface;

abstract class AbstractPostController extends Controller
{
    private $postService;
    
    protected $nbrPerPage = 5;

    protected $typeId = array();

    protected $parentId;

    protected $typePostId;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPaginate($this->nbrPerPage, $this->typeId);
        $links = $posts->setPath('')->render();
        return view('member::posts.'. $this->typePost.'.index', compact('posts','links'));
    }

    public function create()
    {
        $types = TypePost::all()->where('type_post_id', '=', $this->typePostId )->pluck('libelleType','id')->toArray();
        return view('member::posts.'. $this->typePost.'.create', array('types' => $types));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->postService->update($request,$post);
        return redirect()->route( $this->typePost.'.index');
    }

    public function store(Request $request)
    {
        $this->postService->store($request);
        return redirect()->route( $this->typePost.'.index');
    }

    public function show($id)
    {
        $post = $this->postService->getById($id);
        return view('member::posts.'.$this->typePost.'.show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $types = TypePost::all()->where('type_post_id', '=', $this->typePostId )->pluck('libelleType', 'id')->toArray();
        return view('member::posts.'.$this->typePost. '.edit',compact('post','types'));
    }

    public function destroy($id)
    {
        $this->postService->delete($id);
        return redirect()->route($this->typePost.'.index');
    }
}
