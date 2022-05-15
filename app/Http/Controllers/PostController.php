<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('posts.index');
    }

    public function store(Request $request) {
        //validate
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'desc' => $request->desc,
            'category' => $request->category,
            'body' => $request->body,
        ]);

        $posts = Post::paginate(10);

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function destroy(Post $post) {

        if (!$post->ownedBy(auth()->user()) && !auth()->user()->is_admin) {
            return back();
        }

        $post->delete();

        return back();
    }
}