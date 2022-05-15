<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostPreviewController extends Controller
{
    public function index(Post $post) {

        return view('posts.preview', [
            'post' => $post
        ]);
    }
}
