<header>
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="{{route('home')}}">
                        <img src="{{asset('images/logo-forex-nen-toi.png')}}" alt="logo" width="146" height="40">
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="{{route('home')}}">{{__('Trang Chủ')}}</a>
                        </li>
                        @foreach($category as $ct)
                            <li>
                                <a @if(!$ct->children->isNotEmpty()) href="{{route('page',['slug' => $ct->slug])}}" @endif>{{__($ct->name)}} @if($ct->children->isNotEmpty())
                                        <span data-uk-navbar-parent-icon></span>
                                    @endif</a>
                                @if($ct->children->isNotEmpty())
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            @foreach($ct->children as $children)
                                                <li>
                                                    <a href="{{route('page',['slug' => $children->slug])}}">{{__($children->name)}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <form action="{{route('changeLocale')}}" method="get">
                        <select name="locale" class="selected uk-button uk-button-primary"
                                onchange="this.form.submit()">
                            <option value="" hidden="">Chọn ngôn ngữ</option>
                            @foreach($languages as $language)
                                <option
                                    value="{{$language->code}}" {{$language->code == config('app.locale')?'selected':''}}>{{$language->short}}</option>
                            @endforeach
                        </select>
                    </form>
                    @if($user && $user->role ==1)
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">

                            <h5 class="uk-button uk-button-text">{{__('Xin chào ').\Illuminate\Support\Str::limit($user->name,15,'...')}}</h5>
                            <a href="{{route('log-out')}}" class="uk-button uk-button-primary">{{__('Đăng xuất')}}<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    @else
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="/login" class="uk-button uk-button-primary">{{__('Đăng nhập')}}<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>
