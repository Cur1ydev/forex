<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function handle(Request $request)
    {
        $rule = [
            'comment' => 'required'
        ];
        $message = [
            'comment.required' => __('Vui lòng nhập bình luận')
        ];
        $request->validate($rule, $message);
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = auth()->user()->id;
        $comment->blog_id = $request->blog_id;
        $comment->save();
        return back();
    }
}
