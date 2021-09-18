<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {

    }

    public function destroy($id)
    {
        $comment = Comment::where('id', $id)->first();

        Comment::destroy($comment);

        return back();
    }

    public function index()
    {

    }
}