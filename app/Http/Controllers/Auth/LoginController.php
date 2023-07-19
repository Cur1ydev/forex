<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isFalse;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('Post')) {
            $rule = [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ];
            $message = [
                'email.required' => __('Email phải được nhập'),
                'email.email' => __('Email không đúng định dạng'),
                'password.required' => __('Mật khẩu phải được nhập'),
                'password.min' => __('Mật khẩu phải lớn hơn :min ký tự')
            ];
            $request->validate($rule, $message);
            $credential = $request->only('email', 'password');
            if (Auth::attempt($credential)) {
                $user = Auth::user();
                if ($user->role == 0) {
                    return redirect()->route('admin.home');
                }
            } else {
                return back()->with('loginfalse', 'Thông tin đăng nhập không chính xác');
            }
        }
        return view('auth.login');
    }
}
