<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable =
        [
            'name',
            'slug',
            'content',
            'images',
            'author',
            'short_description',
            'comment',
            'user_id'
        ];

    public function comments(){
        return $this->hasMany(Comment::class,'blog_id');
    }
}
