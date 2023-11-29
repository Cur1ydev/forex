<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AuthCourseInterface;
use Illuminate\Http\Request;

class AuthCourseController extends Controller
{
    protected $authCourse;
    public function __construct(AuthCourseInterface $authCourse)
    {
        $this->authCourse = $authCourse;
    }
    public function list(){
        $registerCourses  = $this->authCourse->list();
        return view('admin.registerCourse.list',compact('registerCourses'));
    }

    public function delete(Request $request)
    {
        $authCourse = $this->authCourse->delete($request->id);
        if ($authCourse) {
            return redirect()->route('admin.registerCourse.list');
        }else{
            return redirect()->route('home');
        }
    }
}
