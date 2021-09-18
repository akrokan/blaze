<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $post = Post::where('title', 'About')->first();
        $tags = Tag::orderBy('name')->get();
        //dd($post);
        return view('about', compact('post', 'tags'));
    }

    public function dashboard()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('dashboard', compact('posts'));
    }

    public function home()
    {
        $posts = Post::where('online', 1)->latest()->paginate(10);
        $tags = Tag::orderBy('name')->get();

        return view('index', compact('posts', 'tags'));
    }

    public function comments()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();

        return view('dashboard.comments', compact('comments'));
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('dashboard.posts', compact('posts'));
    }

    public function tags()
    {
//        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('dashboard.tags');
    }

}