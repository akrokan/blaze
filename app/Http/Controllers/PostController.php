<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('dashboard.create');
    }

    /*

    */
    public function store(StorePostRequest $request)
    {
//        $request = $request->validated();

        /*
            Check if $request exist
        */
        if (!$request->file) {
            return back()->with([
                'title'     => 'File not found',
                'content'   => 'You have to choose a file to import'
            ]);
        }

        /*
            Prepare the file for process
        */
        $file = $request->file;
        $path = $file->getRealPath();
        $file = fopen($path, 'r');
        $content = fread($file, filesize($path));
        fclose($file);

        /*
            Extract $header from $content
        */
        preg_match("#---[\s\S]*?---#i", $content, $header);
        if (!empty($header[0])) {
            $header = trim($header[0]);
            $content = preg_replace("#---[\s\S]*?---\s*#i", "", $content);
        } else {
            return back()->with([
                'title'     => 'File not valid',
                'content'   => 'The post need a proper header'
            ]);
        }

        /*
            Extract $title from $header
            Set $slug from $title
        */
        $title = "#(title):\s*(.*)#i";
        preg_match($title, $header, $title);
        if (!empty($title)) {
            $title = trim($title[2]);
            $slug = str::slug($title);
        }

        /*
            Extract $author from $header
        */
        $author = "#(author):\s*(.*)#i";
        preg_match($author, $header, $author);
        if (!empty($author)) {
            $author = trim($author[2]);
        }

        /*
            Store post with extracted values
        */
        $post = Post::create([
            'title' =>      $title,
            'slug' =>       $slug,
            'content' =>    $content,
            'user_id' =>    Auth::user()->id
        ]);

        /*
            Process Tags
        */
        if (!empty($request->get('tags')))
        {
            $names = explode(', ',$request->get('tags'));
            $ids = [];

            foreach ($names as $name)
            {
                $tag = Tag::firstOrCreate(['name' => $name]);
                $ids[] = $tag->id;
            }

            $post->tags()->sync($ids);
        }

        return redirect()->route('dashboard');          
    }
}