@extends('client.layout')
@section('content')
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
            <div id="particles-js" class="uk-light in-slideshow uk-background-contain"
                 data-src="img/in-equity-decor-1.svg" data-uk-img data-uk-slideshow>
                <hr>
                <ul class="uk-slideshow-items">
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                            class="uk-label uk-label-success in-label-small">New</span>
                                        {{__('Giao dịch thị trường trực tiếp với các nền tảng giao dịch hàng đầu.')}}
                                    </p>
                                    <h1 class="uk-heading-small">{{__('Forex Viet Nam - Nền tảng giao dịch tiềm năng hàng đầu thế giới.')}}</h1>
                                    <p class="uk-text-lead uk-visible@m">{{__('Đồng hành cùng Forex Viet Nam, cùng bạn đưa các dự án giao dịch đi khắp thế giới — vượt xa không gian tài khoản giao dịch của bạn.')}}</p>
                                </div>
                                <div class="in-slide-img">
                                    <img src="{{asset('images/in-equity-slide-1.png')}}" data-src="{{asset('images/in-equity-slide-1.png')}}" alt="image-slide"
                                         width="652" height="746" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                            class="uk-label uk-label-success in-label-small">New</span>{{__('Giao dịch thị trường trực tiếp với các nền tảng giao dịch hàng đầu.')}}
                                    </p>
                                    <h1 class="uk-heading-small">{{__('Forex Viet Nam - Tiếp cận với kinh nghiệm giao dịch mới.')}}</h1>
                                    <p class="uk-text-lead uk-visible@m">{{__('Đồng hành cùng Forex Viet Nam, cùng bạn đưa các dự án giao dịch đi khắp thế giới — vượt xa không gian tài khoản giao dịch của bạn.')}}</p>
                                </div>
                                <div class="in-slide-img">
                                    <img src="{{asset('images/in-equity-slide-2.png')}}" data-src="{{asset('images/in-equity-slide-2.png')}}" alt="image-slide"
                                         width="652" height="746" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-container">
                    <div class="uk-position-relative" data-uk-grid>
                        <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h4>{{__('Sản Phẩm Phổ Biến :')}}</h4>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom"
                     data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name red">EQ</span>
                                <h5 class="uk-margin-remove">{{__('Cổ Phiếu')}}</h5>
                            </div>
                            <p>{{__('Forex Việt Nam giúp người dùng truy cập hơn 19.000 cổ phiếu trên khắp các thị trường cốt lõi và mới nổi trên hơn 40 sàn giao dịch trên toàn thế giới.')}}</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">{{__('Khám phá')}}<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name green">LQ</span>
                                <h5 class="uk-margin-remove">{{__('Các Tùy Chọn')}}</h5>
                            </div>
                            <p>{{__('Truy cập hơn 1.200 tùy chọn được liệt kê trên cổ phiếu, chỉ số, lãi suất, dầu, vàng bạc, kim loại,..')}}</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">{{__('Khám phá')}}<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name blue">FU</span>
                                <h5 class="uk-margin-remove">{{__('Hợp đồng')}}</h5>
                            </div>
                            <p>{{__('Forex Việt Nam sẽ triển khai cho phép truy cập hơn 300 hợp đồng tương lai bao gồm các chỉ số vốn chủ sở hữu, năng lượng, kim loại, nông nghiệp, lãi suất và nhiều hơn nữa.')}}</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">{{__('Khám phá')}}<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name"><i class="fas fa-ellipsis-h fa-xs"></i></span>
                                <h5 class="uk-margin-remove">{{__('Nhiều sản phẩm hơn')}}</h5>
                            </div>
                            <p>{{__('Forex Viet Nam mở ra những khám phá đầy đủ các loại tiền mặt và các sản phẩm có đòn bẩy phát triển trên thị trường.')}}</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">{{__('Khám phá')}}<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-2 uk-background-contain uk-background-center" data-src="img/in-equity-2-bg.png"
             data-uk-img>
            <div class="uk-container uk-margin-top">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-2xlarge@m uk-text-center">
                        <span class="uk-label uk-label-warning">{{__('Thực hiện nhanh chóng, độ trễ thấp')}}<i
                                class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></span>
                        <h1 class="uk-margin-top">{{__('Nắm bắt cơ hội tiềm năng để đầu tư cùng Forex Viet Nam')}}</h1>
                        <p class="uk-text-lead uk-margin-medium-top">{{__('Forex Vietnam cũng đang phát triển các dự án liên quan đến token coin và công nghệ blockchain, mở rộng phạm vi đầu tư của các nhà đầu tư trên thị trường tài chính. Tất cả các hoạt động của Forex Vietnam đều được ứng dụng công nghệ thực hiện với mục tiêu mang lại giá trị cao nhất.')}}</p>
                    </div>
                    <div class="uk-width-3-4@m uk-margin-medium-top">
                        <img class="uk-align-center" src="{{asset('images/in-equity-2-img.png')}}" data-src="{{asset('images/in-equity-2-img.png')}}"
                             alt="image" width="758" height="334" data-uk-img>
                    </div>
                    <div class="uk-width-2xlarge@m uk-margin-medium-top">
                        <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center in-feature-box"
                             data-uk-grid>
                            <a href="#">
                            <span class="in-icon-wrap">
                                <img src="{{asset('img/in-equity-2-icon-1.svg')}}" data-src="{{asset('img/in-equity-2-icon-1.svg')}}" alt="icon-1" width="35"
                                     height="42" data-uk-img>
                            </span>
                                <p class="uk-margin-top">{{__('Ứng dụng công nghệ')}}</p>
                            </a>
                            <a href="#">
                            <span class="in-icon-wrap">
                                <img src="{{asset('img/in-equity-2-icon-2.svg')}}" data-src="{{asset('img/in-equity-2-icon-2.svg')}}" alt="icon-2" width="38"
                                     height="42" data-uk-img>
                            </span>
                                <p class="uk-margin-top">{{__('Giao dịch nhanh chóng')}}</p>
                            </a>
                            <a href="#">
                            <span class="in-icon-wrap">
                                <img src="{{asset('img/in-equity-2-icon-3.svg')}}" data-src="{{asset('img/in-equity-2-icon-3.svg')}}" alt="icon-3" width="42"
                                     height="42" data-uk-img>
                            </span>
                                <p class="uk-margin-top">{{__('Bảo mật thông tin')}}</p>
                            </a>
                            <a href="#">
                            <span class="in-icon-wrap">
                                <img src="{{asset('img/in-equity-2-icon-4.svg')}}" data-src="{{asset('img/in-equity-2-icon-4.svg')}}" alt="icon-4" width="42"
                                     height="42" data-uk-img>
                            </span>
                                <p class="uk-margin-top">{{__('Khóa học Forex Viet Nam')}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-3 in-offset-top-20">
            <div class="uk-container uk-margin-large-bottom">
                <div class="uk-grid uk-flex uk-flex-middle" align="center">
                    <div class="uk-width-expand@m">
                        <h1 class="uk-margin-small-bottom">{{__('Forex Vietnam đem đến cơ hội đầu tư mới, tối đa hóa lợi nhuận.')}}</h1>
                        <h3 class="uk-margin-top uk-text-warning">{{__('Forex Vietnam còn đang phát triển các dự án liên quan đến token coin và công nghệ blockchain, mở rộng phạm vi đầu tư của các nhà đầu tư trên thị trường tài chính.')}}</h3>
                        <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                        <ul class="uk-list in-list-check">
                            <li>{{__('Kết hợp của các tính năng tiên tiến và công nghệ GPT 4 thông minh')}}</li>
                            <li>{{__('Những khóa học đào tạo chất lượng cao của Forex Vietnam')}}</li>
                            <li>{{__('Cung cấp một sàn giao với quy mô đa quốc gia')}}</li>
                            <li>{{__('Hệ thống giao dịch tiền tệ trực tuyến hoàn chỉnh và tiên tiến')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-4">
            <div class="uk-container uk-margin-top uk-margin-medium-bottom">
                <div class="uk-grid uk-child-width-1-2@m in-testimonial-2" data-uk-grid>
                    <div class="uk-width-1-1@m uk-text-center">
                        <h1>{{__('Hơn 17.000 nhà giao dịch đã tham gia')}}</h1>
                    </div>
                    <div>
                        <div class="uk-background-contain uk-background-top-left" data-src="img/in-equity-4-blob-1.svg"
                             data-uk-img>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <div class="uk-background-primary uk-border-pill">
                                        <img class="uk-align-center uk-border-pill" src="img/in-lazy.gif"
                                             data-src="img/blockit/in-team-1.png" alt="client-1" width="100"
                                             height="100" data-uk-img>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove-bottom">Keilvin Devin</h5>
                                    <p class="uk-text-muted uk-margin-remove-top">{{__('Từ Việt Nam')}}</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>{{__('Với Forex Viet Nam rất thuận tiện cho nhà giao dịch, chênh lệch giá vàng tương đối thấp so với các nhà môi giới khác')}}</p>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="uk-background-contain uk-background-top-left" data-src="img/in-equity-4-blob-2.svg"
                             data-uk-img>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <div class="uk-background-primary uk-border-pill">
                                        <img class="uk-align-center uk-border-pill" src="img/in-lazy.gif"
                                             data-src="img/blockit/in-team-8.png" alt="client-2" width="100"
                                             height="100" data-uk-img>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove-bottom">{{__('Mr Đình Dũng')}}</h5>
                                    <p class="uk-text-muted uk-margin-remove-top">{{__('Từ Việt Nam')}}</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>{{__('Một trong những nhà môi giới ngoại hối tốt nhất mà tôi đã sử dụng! điều kiện giao dịch của họ là tuyệt vời.')}}</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="uk-width-1-1@m uk-text-center">
                        <a href="#" class="uk-button uk-button-text">{{__('Xem thêm các câu chuyện về nhà giao dịch từ khắp nơi trên thế giới')}}<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-5">
            <div class="uk-container uk-margin-remove-bottom">
                <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <div class="uk-flex uk-flex-left in-award">
                            <div class="uk-margin-small-right">
                                <img src="{{asset('img/in-equity-5-award-1.svg')}}" data-src="{{asset('img/in-equity-5-award-1.svg')}}" alt="award-1"
                                     width="91" height="82" data-uk-img>
                            </div>
                            <div>
                                <h6>{{__('ỨNG DỤNG GIAO DỊCH DI ĐỘNG TỐT NHẤT')}}</h6>
                                <p class="year">2019</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex uk-flex-left in-award">
                            <div class="uk-margin-small-right">
                                <img src="{{asset('img/in-equity-5-award-2.svg')}}" data-src="{{asset('img/in-equity-5-award-2.svg')}}" alt="award-2"
                                     width="91" height="82" data-uk-img>
                            </div>
                            <div>
                                <h6>{{__('NHÀ MÔI GIỚI FOREX ECN TỐT NHẤT')}}</h6>
                                <p class="year">2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-visible@m">
                        <div class="uk-flex uk-flex-left in-award">
                            <div class="uk-margin-small-right">
                                <img src="{{asset('img/in-equity-5-award-3.svg')}}" data-src="{{asset('img/in-equity-5-award-3.svg')}}" alt="award-3"
                                     width="91" height="82" data-uk-img>
                            </div>
                            <div>
                                <h6>{{__('ĐIỀU KIỆN GIAO DỊCH TỐT NHẤT')}}</h6>
                                <p class="year">2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div
            class="uk-section uk-section-primary uk-preserve-color in-equity-6 uk-background-contain uk-background-center"
            data-src="img/in-equity-decor-2.svg" data-uk-img>
            <div class="uk-container uk-margin-small-bottom">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-2xlarge@m uk-text-center">
                        <h1>{{__('Sẵn sàng để bắt đầu?')}}</h1>
                        <p class="uk-text-lead">{{__('Truy cập toàn cầu vào thị trường tài chính từ một tài khoản')}}</p>
                    </div>
                    <div class="uk-width-3-4@m uk-margin-medium-top">
                        <div class="uk-flex uk-flex-center uk-flex-middle button-app">
                            <div>
                                <a href="#" class="uk-button uk-button-secondary uk-border-rounded">{{__('Mở tài khoản của bạn')}}<i
                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="uk-margin-left uk-margin-right">
                                <p class="uk-margin-remove">{{__('Và tải ứng dụng')}}</p>
                            </div>
                            <div class="uk-margin-right">
                                <a href="#"><img src="{{asset('img/in-app-store.svg')}}" data-src="{{asset('img/in-app-store.svg')}}" alt="app-store"
                                                 width="120" height="40" data-uk-img></a>
                            </div>
                            <div>
                                <a href="#"><img src="{{asset('img/in-google-play.svg')}}" data-src="{{asset('img/in-google-play.svg')}}"
                                                 alt="google-play" width="135" height="40" data-uk-img></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
