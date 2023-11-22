<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\BlogInterface;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $blog;

    public function __construct(BlogInterface $blog)
    {
        $this->blog = $blog;
    }

    public function list()
    {
        $blogs = $this->blog->list();
        return view('admin.blog.list', compact('blogs'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule = [
                'name' => 'required',
                'content' => 'required',
                'short_description' => 'required',
                'author' => 'required',
                'images' => 'required|mimes:jpg,png,jpeg|max:10000'
            ];
            $message = [
                'name.required' => 'Tên bài viết phải được nhập',
                'content.required' => 'Nội dung phải được nhập',
                'short_description.required' => 'Mô tả phải được nhập',
                'author.required' => 'Tác giả phải được nhập',
                'images.required' => 'Ảnh phải được chọn',
                'images.mimes' => 'Ảnh không đúng định dạng',
                'images.max' => 'Ảnh không được vượt quá :max'
            ];
            $request->validate($rule, $message);
            $images = $request->file('images');
            $nameImages = $images->getClientOriginalName();
            $upload = $images->storeAs('img/blogs', $nameImages, 'public');
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'content' => $request->input('content'),
                'images' => 'storage/' . $upload,
                'author' => $request->author,
                'short_description' => $request->short_description
            ];
            $this->blog->create($data);
            return redirect()->route('admin.blog.list');
        }
        return view('admin.blog.create');
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule = [
                'name' => 'required',
                'content' => 'required',
                'short_description' => 'required',
                'author' => 'required',
                'images' => 'required|mimes:jpg,png,jpeg|max:10000'
            ];
            $message = [
                'name.required' => 'Tên bài viết phải được nhập',
                'content.required' => 'Nội dung phải được nhập',
                'short_description.required' => 'Mô tả phải được nhập',
                'author.required' => 'Tác giả phải được nhập',
                'images.required' => 'Ảnh phải được chọn',
                'images.mimes' => 'Ảnh không đúng định dạng',
                'images.max' => 'Ảnh không được vượt quá :max'
            ];
            $request->validate($rule, $message);
            $images = $request->file('images');
            $nameImages = $images->getClientOriginalName();
            $upload = $images->storeAs('img/blogs', $nameImages, 'public');
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'content' => $request->input('content'),
                'images' => 'storage/' . $upload,
                'author' => $request->author,
                'short_description' => $request->short_description
            ];
            $this->blog->update($request->id, $data);
            return redirect()->route('admin.blog.list');
        }
        $blog = Blog::find($request->id);
        return view('admin.blog.update', compact('blog'));
    }

    public function delete(Request $request)
    {
        $this->blog->delete($request->id);
        return redirect()->route('admin.blog.list');
    }

    public function trash()
    {
        $trash = $this->blog->trash();
        return view('admin.blog.trash', compact('trash'));
    }

    public function storeOnlyTrash(Request $request)
    {
        $this->blog->onlyTrash($request->id);
        return redirect()->route('admin.blog.list');
    }

    public function storeAllTrash()
    {
        $this->blog->allTrash();
        return redirect()->route('admin.blog.list');
    }
}
