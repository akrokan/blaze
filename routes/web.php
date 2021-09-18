<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\ShowPostsByTag;
use App\Http\Livewire\ShowPostsByUser;

// Demo subdomain
Route::domain('demo.localhost')->group(function () {
    Route::get('/',     [PageController::class, 'about'])->name('about');
});

// Guest
Route::get('/',                  ShowPosts::class)->name('home');
Route::get('/about',        [PageController::class, 'about'])->name('about');
Route::get('/post/{slug}',  [PostController::class, 'show'] )->name('show');
Route::get('/posts/tag/{tag}',   ShowPostsByTag::class);
Route::get('/posts/user/{user}', ShowPostsByUser::class);

// Auth
Route::middleware(['auth'])->group(function () {
    // Member
    Route::get('/profile',  [PageController::class, 'profile'])->name('profile');

    // Admin
    Route::get('/dashboard',    [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/comments',       [PageController::class, 'comments'])->name('comments');
    Route::get('/dashboard/posts',          [PageController::class, 'posts']   )->name('posts');
route::get('dashboard/tags', \App\Http\Livewire\Tag::class)->name('tags');
    //    Route::get('/dashboard/tags',           [PageController::class, 'tags']    )->name('tags');
    Route::get('/dashboard/post/create',    [PostController::class, 'create']);
    Route::get('/dashboard/post/delete/{id}', [PostController::class, 'destroy']);
    Route::get('/dashboard/post/switch/{id}', [PostController::class, 'switchState']);
    Route::post('/dashboard/post/store',        [PostController::class, 'store']);
    Route::get('/dashboard/comment/destroy/{id}',   [CommentController::class, 'destroy']);
});

require __DIR__.'/auth.php';
