<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
//        "author",
        "title",
        "slug",
        "content",
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->orderBy('name');
    }

    public function scopeOnline($query, $b)
    {
        return $query->where('online', $b);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
//        return $this->belongsTo(User::class, 'author', 'username');
    }
}