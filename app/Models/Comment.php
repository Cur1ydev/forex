<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "comments";
    protected $fillable =
        [
            'comment',
            'user_id',
            'blog_id'
        ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function blog(){
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
