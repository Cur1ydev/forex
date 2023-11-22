@extends('client.layout')
@section('content')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{route('home')}}">{{__('Trang chủ')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                    <div class="uk-width-2-5@m">
                        <h3 class="uk-margin-small-top uk-text-center">{{__('ĐĂNG KÝ KHOÁ ĐÀO TẠO KIẾN THỨC & KỸ NĂNG ĐẦU TƯ ')}}</h3>
                        <h4 class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">{{__('100% miễn phí, ngoài ra học viên có đủ kiến thức có thể tham gia hội viên cùng chúng tôi')}}</h4>
                        <form action="{{route('form-investor')}}" method="post" id="contact-form"
                              class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="">
                            @csrf
                            <div class="uk-width-1-1 uk-inline">
                                <span class="uk-form-icon fas fa-user fa-sm"></span>
                                <input class="uk-input uk-border-rounded" id="name" name="name" type="text"
                                       placeholder="{{__('Họ và tên')}}" value="{{old('name')}}">
                            </div>
                            @error('name')
                            <h6 align="center" style="color: red">{{$message}}</h6>
                            @enderror

                            <div class="uk-width-1-1 uk-inline">
                                <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                <input class="uk-input uk-border-rounded" id="email" value="{{old('email')}}"
                                       name="email" type="email"
                                       placeholder="{{__('Địa chỉ Email')}}">
                            </div>
                            @error('email')
                            <h6 align="center" style="color: red">{{$message}}</h6>
                            @enderror
                            <div class="uk-width-1-1 uk-inline">
                                <span class="uk-form-icon fas fa-phone fa-sm"></span>
                                <input class="uk-input uk-border-rounded" value="{{old('phone_number')}}"
                                       id="phone_number" name="phone_number"
                                       type="text" placeholder="{{__('Số điện thoại')}}">
                            </div>
                            @error('phone_number')
                            <h6 align="center" style="color: red">{{$message}}</h6>
                            @enderror
                            @foreach($optionTrade as $ot)
                                <div class="uk-width-1-1">
                                    <label>
                                        <select class="uk-input uk-border-rounded" name="data[{{$ot->name}}]">
                                            <option hidden value>{{__($ot->name)}}</option>
                                            @foreach($ot->value_trades as $value)
                                                <option
                                                    value="{{$value->name}}" {{old("data.$ot->name") == $value->name ?'selected':''}}>{{__($value->name)}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            @endforeach
                            @error('data.*')
                            <h6 align="center" style="color: red">{{$message}}</h6>
                            @enderror
                            <div class="uk-width-1-1 uk-inline">
                                <label class="flex">
                                    <input name="checkbox" value="0" type="checkbox">
                                    <p>{{__('Tôi đồng ý với ')}}<a
                                            href="#">{{__('Điều khoản và điều kiện tham gia thị trường ngoại hối')}}</a>
                                        và <a href="#">{{__('Điều khoản bảo mật của hệ thống')}}</a></p>
                                </label>
                            </div>
                            @error('checkbox')
                            <h6 align="center" style="color: red">{{$message}}</h6>
                            @enderror
                            <div class="uk-width-1-1">
                                <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded"
                                >{{__('Đăng ký')}}</button>
                            </div>
                        </form>
                    </div>
                    <div class="uk-width-3-5@m" align="center">
                        <img src="{{asset('img/img-course.jpg')}}" alt="{{asset('img/img-course.jpg')}}" width="100%">
                        <h5>{{__('Giảng viên: Mr Đình Dũng')}}</h5>
                        <p>{{__('Theo dõi và tham gia cộng đồng học viên của giảng viên Đình Dũng ')}} <a
                                href="https://t.me/dinhdungofficial" target="_blank">{{__('tại đây')}}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
