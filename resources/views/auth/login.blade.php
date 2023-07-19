<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Indonez">
    <meta name="theme-color" content="#FCB42D">
    <!-- preload assets -->
    <link rel="preload" href="{{asset('fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/archivo-v18-latin-regular.woff2')}}" as="font" type="font/woff2"
          crossorigin>
    <link rel="preload" href="{{asset('fonts/archivo-v18-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/archivo-v18-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('css/style.css')}}" as="style">
    <link rel="preload" href="{{asset('js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('js/utilities.min.js')}}" as="script">
    <link rel="preload" href="{{asset('js/config-theme.js')}}" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- uikit -->
    <script src="{{asset('js/vendors/uikit.min.js')}}"></script>
    <!-- favicon -->
    <link rel="icon" href="{{asset('images/icon.jpg')}}" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/apple-touch-icon.png')}}">
    <title>Login - Forex Việt Nam   </title>
</head>

<body>
<main>
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary uk-light uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid" data-uk-height-viewport="expand: true">
                <div
                    class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                    style="background-image: url({{asset('img/in-signin-image.jpg')}});">

                </div>
                <div class="uk-width-expand@m uk-flex uk-flex-middle">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-3-5@m">
                            <div class="uk-text-center in-padding-horizontal@s">
                                <a class="uk-logo" href="{{route('home')}}">
                                    <img src="{{asset('images/logo-forex-nen-toi.png')}}"
                                         data-src="{{asset('images/logo-forex-nen-toi.png')}}" alt="logo" width="146"
                                         height="40" data-uk-img>
                                </a>
                                <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">{{__('Đăng nhập vào tài khoản của bạn')}}</p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form" method="post" action="{{route('login')}}">
                                    @csrf
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="email" required name="email"
                                               value=""
                                               type="email" placeholder="{{__('Email')}}">
                                    </div>
                                    @error('email')
                                    <h6 align="center" style="color: red">{{$message}}</h6>
                                    @enderror
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" name="password" value=""
                                               type="password" placeholder="{{__('Mật khẩu')}}">
                                    </div>
                                    @error('password')
                                    <h6 align="center" style="color: red">{{$message}}</h6>
                                    @enderror
                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label><input class="uk-checkbox" type="checkbox">{{__('Ghi nhớ đăng nhập')}}
                                        </label>
                                    </div>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right"><a class="uk-link-reset"
                                                                         href="#">{{__('Quên mật khẩu?')}}</a></label>
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button
                                            class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                            type="submit" name="submit">{{__('Đăng nhập')}}</button>
                                    </div>
                                    @if(session('loginfalse'))
                                        <h6 align="center" style="color: red">{{session('loginfalse')}}</h6>
                                    @endif
                                </form>
                                <!-- login form end -->
                                <p class="uk-heading-line"><span>{{__('Hoặc đăng nhập với')}}</span></p>
                                <div class="uk-margin-medium-bottom">
                                    <a class="uk-button uk-button-small uk-border-rounded color-google"
                                       href="{{route('google.login')}}"><i
                                            class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    {{--                                    <a class="uk-button uk-button-small uk-border-rounded uk-margin-small-left color-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>--}}
                                </div>
                                <span class="uk-text-small">{{__('Không có tài khoản?')}} <a
                                        href="#">{{__('Đăng ký')}}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
<!-- javascript -->
<script src="{{asset('js/utilities.min.js')}}"></script>
<script src="{{asset('js/config-theme.js')}}"></script>
</body>
</html>
