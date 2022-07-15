<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        //$posts = Post::all();
        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
                $posts = Post::where('name', 'LIKE', "%$keyword%")->latest()->paginate($perPage);
        } else {
            $posts = Post::latest()->paginate($perPage);
        }

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Post::create(
            Request::validate([
            'title' => ['required', 'max:50'],
            'body' => ['required'],
            ])
        );
        return Redirect::route('posts')->with('success', 'Post created.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update(
            Request::validate([
            'title' => ['required', 'max:50'],
            'body' => ['required'],
            ])
        );

        return Redirect::route('posts')->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return Redirect::back()->with('success', 'Post deleted.');
    }

}
