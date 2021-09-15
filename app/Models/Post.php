<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    protected $fillable = ['title', 'content', 'image', 'is_public', 'author_id'];
}
