<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\TypePost;
use Modules\Member\Http\Requests\CreatePostRequest;
use Modules\Member\Http\Services\Post\PostServiceInterface;

class FiombonanaController extends Controller
{
    private $postService;
    
    protected $nbrPerPage = 5;

    protected $typeId = [12,13,14,15,16];

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPaginate($this->nbrPerPage, $this->typeId);
        $links = $posts->setPath('')->render();
        return view('member::posts.fiombonana.index', compact('posts','links'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $types = TypePost::all()->where('type_post_id', '=', 5)->pluck('libelleType','id')->toArray();
        return view('member::posts.fiombonana.create', array('types' => $types));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $this->postService->store($request);
        return redirect()->route('fiombonana.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postService->getById($id);
        return view('member::posts.fiombonana.show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $types = TypePost::all()->where('type_post_id', '=', 5)->pluck('libelleType', 'id')->toArray();
        return view('member::posts.fiombonana.edit',compact('post','types'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $this->postService->update($request,$post);
        return redirect()->route('fiombonana.index');
    }

    public function destroy($id)
    {
        $this->postService->delete($id);
        return redirect()->route('fiombonana.index');
    }
}
