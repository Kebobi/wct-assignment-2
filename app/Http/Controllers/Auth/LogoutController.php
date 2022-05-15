<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class LogoutController extends Controller
{
    public function store() {
        
        auth()->logout();

        $posts = Post::paginate(10);

        return view('home', [
            'posts' => $posts
        ]);
    }
}
