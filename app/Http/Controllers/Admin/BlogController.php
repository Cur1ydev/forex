<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\BlogInterface;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('admin.blog.create');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
