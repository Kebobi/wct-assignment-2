<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $posts = Post::where('user_id', '=', auth()->user()->id)->paginate(10);

        return view('dashboard', [
            'posts' => $posts
        ]);
    }
}
