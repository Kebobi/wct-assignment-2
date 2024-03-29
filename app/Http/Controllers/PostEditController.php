<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostEditController extends Controller
{
    public function index(Post $post) {

        return view('posts.edit', [
            'post' => $post
        ]);
    }
}
