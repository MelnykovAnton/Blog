<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'author_id');
    }

    protected $fillable = ['title', 'content', 'is_public', 'author_id'];
}
