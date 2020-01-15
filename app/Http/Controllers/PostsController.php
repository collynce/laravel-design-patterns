<?php

namespace App\Http\Controllers;

use App\Repositories\PostInterface;

class PostsController extends Controller
{
    protected $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $this->post->all();
    }

    public function show($id)
    {
        $this->post->get($id);
    }


    public function destroy($id)
    {
        $this->post->delete($id);
    }
}
