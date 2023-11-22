<?php

namespace App\Repository\Admin;

use App\Interface\Admin\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{
    public function list()
    {
        return Category::where('parent_id', 0)->with('children')->get();
    }

    public function getById($id)
    {
        return Category::find($id);
    }

    public function create(array $data)
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->parent_id = $data['parent_id'];
        $category->status = $data['status'];
        return $category->save();
    }

    public function update($id, array $data)
    {
        $category = Category::find($id);
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->parent_id = $data['parent_id'];
        $category->status = $data['status'];
        return $category->save();
    }

    public function delete($id)
    {
        return Category::find($id)->delete();
    }
    public function trash()
    {
        return Category::onlyTrashed()->with('parent')->get();
    }
    public function onlyTrash($id)
    {
        return Category::where('id', $id)->restore();
    }
    public function allTrash()
    {
        return Category::onlyTrashed()->restore();
    }
}
