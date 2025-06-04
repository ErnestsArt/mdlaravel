<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'post_status_id', 'user_id'];

    public function status()
    {
        return $this->belongsTo(PostStatus::class, 'post_status_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}