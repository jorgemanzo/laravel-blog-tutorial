<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Post;

class PostsController extends Controller
{

    private $active = 'home';

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts/index', ['posts' => $posts, 'active' => $this->active]);
    }

    public function create()
    {
        $active = 'create';
        return view('posts/create', compact('active'));
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::create(request(['title', 'body']));

        return redirect()->route('post', ['post' => $post->id]);
        
    }

    public function show(Post $post)
    {
        return view('posts/show', ['post' => $post, 'active' => $this->active]);
    }
}
