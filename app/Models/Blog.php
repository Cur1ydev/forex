<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,SoftDeletes;

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
