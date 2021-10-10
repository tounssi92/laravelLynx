<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function scopePostWithTag($query, $keyword) {
        return $query->where('nom',$keyword)->join('tags', 'posts.tag_id', '=', 'tags.id');
    }
}
