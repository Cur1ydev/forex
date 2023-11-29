<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => [
                'required',
                'email'
            ],
            'domain_name' => 'required',
            'phone_number' => ['required', 'regex:/^(0[3|5|7|8|9])+([0-9]{8})$/']
        ];
        $mess = [
            'name.required' => 'Trường tên phải được nhập',
            'email.required' => 'Email phải được nhập',
            'email.email' => 'Email không hợp lệ',
            'phone_number.required' => 'Số điện thoại phải được nhập',
            'phone_number.regex' => 'Số điện thoại không hợp lệ',
            'domain_name.required' => 'Tên địa chỉ web phải được nhập'
        ];
        $request->validate($rules,$mess);
        Register::query()->create($request->all());
        return back();
    }
    public function list(Request $request){
        $regists = Register::query()->whereDomainName($request->domain)->get();
        return view('admin.register.index',compact('regists'));
    }
    public function delete(Request $request){
        $regist  = Register::query()->findOrFail($request->id);
        $regist?->delete();
        return back();
    }
}
