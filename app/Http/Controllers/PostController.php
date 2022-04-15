<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() 
    {
        return view('posts/index', ['posts' => Post::all()]);
    }
    public function new()
    {
        return view('posts/new');
    }
    public function create(Request $request)
    {
        $post = new Post;
        $post->content = $request->content;
        $post->save();
        return redirect('posts');
    }
    public function show($id) 
    {
        $posts = Post::all();
        $post = $posts->find($id);
        return view('posts/show', ['post' => $post]);
    }
    public function edit($id)
    {
        $posts = Post::all();
        $post = $posts->find($id);
        return view('posts/edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->content = $request->content;
        $post->save();
        return redirect('posts');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        return view('posts/delete', ['post' => $post]);
    }
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('posts');
    }
}
