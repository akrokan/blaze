<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $post = Post::where('title', 'About')->first();
        $tags = Tag::orderBy('name')->get();

        return view('about', compact('post', 'tags'));
    }

    public function dashboard()
    {
        $comments = Comment::All()->count();
        $posts    = Post::orderBy('id')->get();
        $users    = User::All()->count();

        return view('dashboard', compact('comments', 'posts', 'users'));
    }
}