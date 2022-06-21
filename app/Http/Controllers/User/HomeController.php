<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return Inertia::render('User/HomeView', compact('posts'));
    }

    public function show(Post $post)
    {
        return Inertia::render('User/ShowView', compact('post'));
    }
}
