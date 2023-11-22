<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\OptionTrade;
use App\Models\RegisterCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterCourseController extends Controller
{
    public function handle(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules =
                [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone_number' => 'required|regex:/^0[0-9]{9}$/',
                    'data.*' => 'required',
                    'checkbox' => 'required'
                ];
            $message =
                [
                    'name.required' => __('Họ và tên phải được nhập'),
                    'email.required' => __('Email phải được nhập'),
                    'email.email' => __('Email không đúng định dạng'),
                    'phone_number.required' => __('Số điện thoại phải được nhập'),
                    'phone_number.regex' => __('Số điện thoại không đúng định dạng'),
                    'checkbox.required' => __('Vui lòng chấp nhận điều khoản của chúng tôi'),
                    'data.*' => __('Vui lòng chọn đầy đủ các trường liên quan đến đầu tư tài chính,kinh nghiệm,giảng viên')
                ];
            $request->validate($rules, $message);
            $registerCourse = new RegisterCourse();
            $registerCourse->name = $request->name;
            $registerCourse->email = $request->email;
            $registerCourse->phone_number = $request->phone_number;
            $registerCourse->option = json_encode($request->data, JSON_UNESCAPED_UNICODE);
            $registerCourse->save();
        }
        $optionTrade = OptionTrade::with('value_trades')->get();
        return view('client.registercourse', compact('optionTrade'));
    }
}
