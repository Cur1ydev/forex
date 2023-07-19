<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('client.home.index');
    }

    public function blog(Request $request)
    {
        $slug = $request->slug;
        $blog = Blog::where('slug',$slug)->first();
        $comments = Comment::where('blog_id',$blog->id)->with('blog','user')->get();
        return view('client.blog',compact('blog','comments'));
    }

    public function handlePage(Request $request)
    {
        $slug = $request->slug;
        if ($slug == 'forex') {
            return view('client.page.forex');
        }
        if ($slug == 'he-sinh-thai') {
            return view('client.page.ecosystem');
        }
        if ($slug == 'tin-tuc') {
            $blogs = Blog::all();
            return view('client.page.blog', compact('blogs'));
        }
        if ($slug == 'khoa-hoc') {
            return view('client.page.course');
        }
        if ($slug == 'road-map') {
            return view('client.page.roadmap');
        }
        return view('errors.404');
    }
}
