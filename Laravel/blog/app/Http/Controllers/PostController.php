<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(){
        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save();

        return redirect('/');
    }
}
