<?php

namespace Modules\Member\Http\Controllers;

use App\Events\PostSent;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Mockery\CountValidator\Exception;
use Modules\Member\Entities\Post;
use Modules\Member\Entities\TypePost;
use Modules\Member\Http\Requests\CreatePostRequest;
use Modules\Member\Http\Services\Post\PostServiceInterface;

class FiainamPanahyController extends Controller
{
    private $postService;

    protected $nbrPerPage = 5;

    protected $typeId = [8, 9];

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPaginate($this->nbrPerPage, $this->typeId);
        $links = $posts->setPath('')->render();
//        $group = Auth::user()->group;
//        try {
//            broadcast(new PostSent($group));
//        } catch (Exception $e) {
//
//        }
//        Event::fire(new PostSent($group));
        return view('member::posts.fiainam-panahy.index', compact('posts', 'links'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $types = TypePost::all()->where('type_post_id', '=', 3)->pluck('libelleType', 'id')->toArray();
        return view('member::posts.fiainam-panahy.edit', compact('post', 'types'));
    }

    public function create()
    {
        $types = TypePost::all()->where('type_post_id', '=', 3)->pluck('libelleType', 'id')->toArray();
        return view('member::posts.fiainam-panahy.create', array('types' => $types));
    }

    public function store(CreatePostRequest $request)
    {
        $this->postService->store($request);
        return redirect()->route('fiainam-panahy.index');
    }

    public function show($id)
    {
        $post = $this->postService->getById($id);
        return view('member::posts.fiainam-panahy.show', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->postService->update($request, $post);
        return redirect()->route('fiainam-panahy.index');
    }

    public function destroy($id)
    {
        $this->postService->delete($id);
        return redirect()->route('fiainam-panahy.index');
    }
}
