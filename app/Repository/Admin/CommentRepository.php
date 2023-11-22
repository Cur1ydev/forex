<?php

namespace App\Repository\Admin;

use App\Interface\Admin\CommentInterface;
use App\Models\Comment;

class CommentRepository implements CommentInterface
{
    public function list()
    {
        return Comment::with('user', 'blog')->paginate(10);
    }

    public function getById($id)
    {
        return Comment::find($id);
    }

    public function create(array $data)
    {
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->user_id = $data['user_id'];
        $comment->blog_id = $data['blog_id'];
        return $comment->save();
    }

    public function update($id, array $data)
    {
        $comment = Comment::find($id);
        $comment->comment = $data['comment'];
        $comment->user_id = $data['user_id'];
        $comment->blog_id = $data['blog_id'];
        return $comment->save();
    }

    public function delete($id)
    {
        return Comment::find($id)->delete();
    }

    public function trash()
    {
        return Comment::onlyTrashed()->with(['user', 'blog'])->get();
    }

    public function onlyTrash($id)
    {
        return Comment::where('id', $id)->restore();
    }

    public function allTrash()
    {
        return Comment::onlyTrashed()->restore();
    }
}
