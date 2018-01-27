<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\TypePost;
use Modules\Member\Http\Requests\CreatePostRequest;
use Modules\Member\Http\Services\Post\PostServiceInterface;

class FiainamPanahyController extends Controller
{
    private $postService;

    protected $nbrPerPage = 5;

    protected $typeId = [8,9];

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPaginate($this->nbrPerPage, $this->typeId);
        $links = $posts->setPath('')->render();
        return view('member::posts.fiainam-panahy.index', compact('posts','links'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $types = TypePost::all()->where('type_post_id', '=', 3)->pluck('libelleType','id')->toArray();
        return view('member::posts.fiainam-panahy.create', array('types' => $types));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $this->postService->store($request);
        return redirect()->route('fiainam-panahy.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postService->getById($id);
        return view('member::posts.fiainam-panahy.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('member::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
