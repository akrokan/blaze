<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Livewire\Admin\Comments;
use App\Http\Livewire\Admin\Posts;
use App\Http\Livewire\Admin\Tags;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Auth\Profile;
use App\Http\Livewire\ShowPost;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\ShowPostsByTag;
use App\Http\Livewire\ShowPostsByUser;

// Guest
Route::get('/',                  ShowPosts::class)->name('home');
//Route::get('/{slug}',            ShowPost::class);
Route::get('/post/{slug}',       ShowPost::class)->name('show');
Route::get('/posts/tag/{tag}',   ShowPostsByTag::class);
Route::get('/posts/user/{user}', ShowPostsByUser::class);

// Auth
Route::middleware(['auth'])->group(function () {
    // Member
    Route::get('/{user}/profile',  Profile::class)->name('profile');

    // Admin
    Route::get('/admin/dashboard',      [PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/dashboard/comments',   Comments::class)->name('comments');
    Route::get('/dashboard/posts',      Posts::class)->name('posts');
    Route::get('/dashboard/tags',       Tags::class)->name('tags');
    Route::get('/dashboard/users',      Users::class)->name('users');

    Route::get( '/dashboard/post/create',    [PostController::class, 'create']);
    Route::post('/dashboard/post/store',        [PostController::class, 'store']);

    Route::get('/dashboard/comment/destroy/{id}',   [CommentController::class, 'destroy']);
});

require __DIR__.'/auth.php';
