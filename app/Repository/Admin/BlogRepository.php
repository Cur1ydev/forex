<?php

namespace App\Repository\Admin;

use App\Interface\Admin\BlogInterface;
use App\Models\Blog;

class BlogRepository implements BlogInterface
{
    public function list()
    {
        return Blog::paginate(10);
    }

    public function getById($id)
    {
        return Blog::find($id);
    }

    public function create(array $data)
    {
        $blog = new Blog();
        $blog->name = $data['name'];
        $blog->slug = $data['slug'];
        $blog->content = $data['content'];
        $blog->images = $data['images'];
        $blog->author = $data['author'];
        $blog->short_description = $data['short_description'];
        return $blog->save();
    }

    public function update($id, array $data)
    {
        $blog = Blog::find($id);
        $blog->name = $data['name'];
        $blog->slug = $data['slug'];
        $blog->content = $data['content'];
        $blog->images = $data['images'];
        $blog->author = $data['author'];
        $blog->short_description = $data['short_description'];
        return $blog->save();
    }

    public function delete($id)
    {
        return Blog::find($id)->delete();
    }
    public function trash()
    {
        return Blog::onlyTrashed()->get();
    }
    public function onlyTrash($id)
    {
        return Blog::where('id', $id)->restore();
    }
    public function allTrash()
    {
        return Blog::onlyTrashed()->restore();
    }
}
