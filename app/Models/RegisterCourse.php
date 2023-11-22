<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterCourse extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'register_courses';
    protected $fillable =

        [
            'name',
            'email',
            'phone_number',
            'option'
        ];
}
