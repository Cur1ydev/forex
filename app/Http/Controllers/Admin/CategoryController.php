<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\CategoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    public function list()
    {
        $categories = $this->category->list();
        return view('admin.category.list', compact('categories'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'name' => 'required',
                    'parent_id' => 'required',
                    'status' => 'required'
                ];
            $message =
                [
                    'name.required' => 'Tên danh mục phải được nhập',
                    'parent_id.required' => 'Danh mục cha phải được chọn',
                    'status.required' => 'Trạng thái phải được chọn'
                ];
            $request->validate($rule, $message);
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'parent_id' => $request->parent_id,
                'status' => $request->status
            ];
            $this->category->create($data);
            return redirect()->route('admin.category.list');
        }
        $parents = Category::where('parent_id', 0)->with('children')->get();
        return view('admin.category.create', compact('parents'));
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'name' => 'required',
                    'parent_id' => 'required',
                    'status' => 'required'
                ];
            $message =
                [
                    'name.required' => 'Tên danh mục phải được nhập',
                    'parent_id.required' => 'Danh mục cha phải được chọn',
                    'status.required' => 'Trạng thái phải được chọn'
                ];
            $request->validate($rule, $message);
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'parent_id' => $request->parent_id,
                'status' => $request->status
            ];
            $this->category->update($request->id, $data);
            return redirect()->route('admin.category.list');
        }
        $categories = $this->category->getById($request->id);
        $parents = Category::where('parent_id', 0)->with('children')->get();
        return view('admin.category.update', compact('categories', 'parents'));
    }

    public function delete(Request $request)
    {
        $this->category->delete($request->id);
        return redirect()->route('admin.category.list');
    }

    public function trash()
    {
        $trash = $this->category->trash();
        return view('admin.category.trash', compact('trash'));
    }

    public function storeOnlyTrash(Request $request)
    {
        $this->category->onlyTrash($request->id);
        return redirect()->route('admin.category.list');
    }

    public function storeAllTrash()
    {
        $this->category->allTrash();
        return redirect()->route('admin.category.list');
    }
}
