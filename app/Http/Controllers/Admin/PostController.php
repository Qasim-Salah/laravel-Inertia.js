<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::query()
            ->when(
                request('search'),
                fn($query) => $query->where('name', 'LIKE', '%' . request('search') . '%')
            )
            ->latest() ->paginate(5);
        return Inertia::render('Admin/Posts/IndexView', compact('posts'));
    }


    public function create()
    {
        return Inertia::render('Admin/Posts/CreateView');
    }


    public function store(PostRequest $request)
    {
        Post::create($request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with('message', 'Post Added');
    }


    public function edit(Post $post)
    {
        return Inertia::render('Admin/Posts/EditView', compact('post'));
    }


    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with('message', 'Post Updated');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('message', 'Post Deleted');
    }
}
