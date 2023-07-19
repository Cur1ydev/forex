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
    <main data-title="blog">
        <!-- blog content begin -->
        <div class="uk-section uk-margin-small-top">
            <div class="uk-container">
                <div class="uk-grid" data-uk-grid align="center">
                    <div class="uk-width-2-3@m">
                        <div class="in-blog-1" data-uk-grid>
                            @foreach($blogs as $blog)
                                <div class="in-stretch">
                                    <article class="uk-card uk-card-default uk-border-rounded">
                                        <div class="uk-card-media-top">
                                            <img src="{{asset($blog->images)}}"
                                                 alt="{{asset($blog->images)}}" width="80%">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3>
                                                <a href="{{route('blog',['slug' => $blog->slug])}}"
                                                   class="link-primary text-decoration-none">{{__($blog->name)}}</a>
                                            </h3>
                                            <p>{{__($blog->short_description)}}</p>
                                            <div class="uk-flex">
                                                <div class="uk-flex uk-flex-middle">
                                                    <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                        {{$blog->author}}
                                                        <span
                                                            class="uk-margin-small-left uk-margin-small-right">•</span>
                                                    </p>
                                                </div>
                                                <div class="uk-flex uk-flex-middle">
                                                    <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                        {{$blog->created_at->format('d-m-Y')}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-clearfix">
                                            <div class="uk-float-left">
                                                <span class="uk-label uk-label-warning in-label-small">Investing</span>
                                            </div>
                                            <div class="uk-float-right">
                                                <a href="{{route('blog',['slug' => $blog->slug])}}"
                                                   class="uk-button uk-button-text">Read more<i
                                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog content end -->
    </main>
@endsection
