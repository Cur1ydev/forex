@extends('client.layout')
@section('content')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main data-title="blog-single">
        <!-- blog content begin -->
        <div class="uk-section uk-margin-small-top">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                    <div class="uk-width-1-1 in-figure-available">
                        <img class="uk-width-1-1 uk-border-rounded" src="{{asset($blog->images)}}"
                             alt="The typical U.S. household is spending $445 more a month due to inflation">
                    </div>
                    <div class="uk-width-3-4@m">
                        <article class="uk-card uk-card-default uk-border-rounded in-flat-rounded-top">
                            <div class="uk-card-body">
                                <div class="uk-flex">
                                    <div class="uk-flex uk-flex-middle">
                                        <p class="uk-text-small uk-text-muted uk-margin-remove">
                                            {{$blog->author}}
                                            <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                        </p>
                                    </div>
                                    <div class="uk-flex uk-flex-middle">
                                        <p class="uk-text-small uk-text-muted uk-margin-remove">
                                            {{$blog->created_at->format('d-m-Y')}}
                                        </p>
                                    </div>
                                </div>
                                <h2 class="uk-margin-top uk-margin-medium-bottom">{{__($blog->name)}}</h2>
                                <p>{{__($blog->content)}}</p>

                            </div>
                            <div class="uk-card-footer uk-clearfix">
                                <div class="uk-float-left in-article-tags">
                                    <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                    <a href="../blog-finde483.html?tag=inflation" class="uk-link-muted">inflation</a>,&nbsp;
                                    <a href="../blog-find2623.html?tag=usa" class="uk-link-muted">usa</a>
                                </div>
                                <div class="uk-float-right in-article-share share-btn">
                                    <a class="uk-label color-facebook" data-id="fb"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="uk-label color-twitter" data-id="tw"><i class="fab fa-twitter"></i></a>
                                    <a class="uk-label color-pinterest" data-id="pi"><i class="fab fa-pinterest-p"></i></a>
                                    <a class="uk-label color-email" data-id="mail"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog content end -->
        <!-- disquss begin -->
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m">
                        @foreach($comments as $comment)
                            <div class="in-stretch">
                                <article class="uk-card uk-card-default uk-border-rounded">
                                    <div class="uk-card-body">
                                        <p>{{$comment->comment}}</p>
                                        <div class="uk-flex">
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    {{$comment->user->name}}
                                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                </p>
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    {{$comment->created_at->format('d-m-Y')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div><br>
                        @endforeach
                        <div id="disqus_thread">
                            @if($user && $user->role ==1)
                                <h2 class="uk-margin-small-top uk-text-center"><span
                                        class="in-highlight">{{__('Để lại bình luận của bạn')}}</span></h2>
                                <form action="{{route('comment')}}" method="post" id="contact-form"
                                      class="uk-form uk-grid-small uk-margin-medium-top" >
                                    @csrf
                                    <input hidden="" name="blog_id" value="{{$blog->id}}">
                                    <div class="uk-width-1-1">
                                    <textarea class="uk-textarea uk-border-rounded" id="message" name="comment" rows="6"
                                              placeholder="{{__('Bình luận')}}"></textarea>
                                    </div>
                                    <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded">{{__('Bình luận')}}</button>
                                </form>
                            @else
                                <h2 class="uk-margin-small-top uk-text-center"><span
                                        class="in-highlight">{{__('Hãy đăng nhập để bình luận ý tưởng của bạn')}}</span></h2>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- disquss content end -->
    </main>
@endsection
