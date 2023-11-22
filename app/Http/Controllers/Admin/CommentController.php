<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\CommentInterface;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $comment;

    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

    public function list()
    {
        $comments = $this->comment->list();
        return view('admin.comment.list', compact('comments'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'comment' => 'required',
                    'user_id' => 'required',
                    'blog_id' => 'required'
                ];
            $message =
                [
                    'comment.required' => 'Tên danh mục phải được nhập',
                    'user_id.required' => 'Danh mục cha phải được chọn',
                    'blog_id.required' => 'Trạng thái phải được chọn'
                ];
            $request->validate($rule, $message);
            $data = [
                'comment' => $request->comment,
                'user_id' => $request->user_id,
                'blog_id' => $request->blog_id,
            ];
            $this->comment->create($data);
            return redirect()->route('admin.comment.list');
        }
        return view('admin.comment.create');
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'comment' => 'required',
                    'user_id' => 'required',
                    'blog_id' => 'required'
                ];
            $message =
                [
                    'comment.required' => 'Tên danh mục phải được nhập',
                    'user_id.required' => 'Danh mục cha phải được chọn',
                    'blog_id.required' => 'Trạng thái phải được chọn'
                ];
            $request->validate($rule, $message);
            $data = [
                'comment' => $request->comment,
                'user_id' => $request->user_id,
                'blog_id' => $request->blog_id,
            ];
            $this->comment->update($request->id, $data);
            return redirect()->route('admin.comment.list');
        }
        $comment = $this->comment->getById($request->id);
        return view('admin.comment.update', compact('comment'));
    }

    public function delete(Request $request)
    {
        $this->comment->delete($request->id);
        return redirect()->route('admin.comment.list');
    }

    public function trash()
    {
        $trash = $this->comment->trash();
        return view('admin.comment.trash', compact('trash'));
    }

    public function storeOnlyTrash(Request $request)
    {
        $this->comment->onlyTrash($request->id);
        return redirect()->route('admin.comment.list');
    }

    public function storeAllTrash()
    {
        $this->comment->allTrash();
        return redirect()->route('admin.comment.list');
    }
}
