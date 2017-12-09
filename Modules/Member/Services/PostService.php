<?php

namespace Modules\Member\Http\Services;


class PostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create(array $data)
    {
        $post = $this->postRepository->create($data);
        return $post;
    }

    public function find($id)
    {
        $post = $this->postRepository->find($id);
        return $post;
    }

    public function update($array)
    {
        $post = $this->postRepository->update($array);
        return $post;
    }

    public function destroy($id)
    {
        $this->postRepository->destroy($id);
    }
}