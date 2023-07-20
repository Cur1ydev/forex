@extends('client.layout')
@section('content')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{route('home')}}">{{__('Trang Chủ')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main>
        <!-- sectio content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-margin-medium-bottom">
                            <h1 class="uk-margin-remove">{{__('Đã xảy ra lỗi')}}</h1>
                            <p class="uk-text-lead">{{__('Vui lòng thử lại sau')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
