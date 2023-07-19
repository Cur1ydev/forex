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
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-5@m uk-text-center">
                            <h1 class="uk-margin-remove-bottom">{{__('Về Forex Việt Nam')}}</h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">{{__('Forex Vietnam là câu lạc bộ những nhà đầu tư chuyên nghiệp, tài trợ vốn quỹ đào tạo cho trader mới.')}}</p>
                        </div>
                    </div>
                    <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <div class="in-icon-wrap primary-color">
                                    <i class="fas fa-leaf fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h3>{{__('Câu lạc bộ đầu tư ngoại hối chuyên nghiệp')}}</h3>
                                <p class="uk-margin-remove-bottom">{{__('Forex Vietnam là một câu lạc bộ đầu tư ngoại hối chuyên nghiệp hàng đầu tại Việt Nam. Được thành lập với sứ mệnh cung cấp các dịch vụ đào tạo, tư vấn và quản lý tài khoản giao dịch cho các nhà đầu tư, Forex Vietnam đã trở thành địa chỉ tin cậy của những người yêu thích giao dịch ngoại hối.')}}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <div class="in-icon-wrap primary-color">
                                    <i class="fas fa-hourglass-end fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h3>{{__('Khóa học đào tạo đầy đủ và chất lượng')}}</h3>
                                <p class="uk-margin-remove-bottom">{{__('Với đội ngũ chuyên gia giàu kinh nghiệm và kiến thức sâu sắc về giao dịch ngoại hối, Forex Vietnam cung cấp các khóa học đào tạo đầy đủ và chất lượng cao. Khóa học được thiết kế từ cơ bản đến chuyên sâu, giúp các trader mới bắt đầu có được kiến thức và kỹ năng cần thiết để đầu tư và giao dịch thành.')}}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <div class="in-icon-wrap primary-color">
                                    <i class="fas fa-flag fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h3>{{__('Cung cấp các dịch vụ tư vấn và quản lý')}}</h3>
                                <p class="uk-margin-remove-bottom">{{__('Không chỉ có những khóa học đào tạo chất lượng cao, Forex Vietnam còn cung cấp các dịch vụ tư vấn và quản lý tài khoản giao dịch. Các chuyên gia của Forex Vietnam sẽ tư vấn và giúp các nhà đầu tư định hướng đầu tư, lập chiến lược giao dịch, quản lý rủi ro và quản lý tài khoản giao dịch.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url({{asset('img/blockit/in-team-background-1.png')}});" data-uk-parallax="bgy: -100">
                            <div class="uk-card-body">
                                <div class="uk-grid uk-flex uk-flex-center">
                                    <div class="uk-width-3-4@m uk-text-center">
                                        <h2>{{__('Lãnh đạo của chúng tôi')}}</h2>
                                        <p>{{__('Chúng tôi là một nhóm các nhà tư tưởng độc lập, đam mê, những người không bao giờ ngừng khám phá những cách thức mới để cải thiện giao dịch cho nhà đầu tư tự định hướng.')}}</p>
                                    </div>
                                </div>
                                <div class="uk-child-width-1-3@m uk-text-center uk-margin-small-bottom" data-uk-grid>
                                    <div>
                                        <img src="{{asset('img/blockit/in-team-1.png')}}" alt="image-team" width="200" height="200">
                                        <h4 class="uk-margin-small-top uk-margin-remove-bottom">Cynthia Dixon</h4>
                                        <span class="uk-label uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">Chief Executive Officer</span>
                                        <p>Omnis voluptas assumenda est dolor repellendus autem debit officiis</p>

                                    </div>
                                    <div>
                                        <img src="{{asset('img/blockit/in-team-4.png')}}" alt="image-team" width="200" height="200">
                                        <h4 class="uk-margin-small-top uk-margin-remove-bottom">Bryan Greene</h4>
                                        <span class="uk-label uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">Human Resources</span>
                                        <p>Omnis voluptas assumenda omnis dolor repellendus</p>

                                    </div>
                                    <div>
                                        <img src="{{asset('img/blockit/in-team-2.png')}}" alt="image-team" width="200" height="200">
                                        <h4 class="uk-margin-small-top uk-margin-remove-bottom">Arthur Parker</h4>
                                        <span class="uk-label uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">Executive Assistant</span>
                                        <p>Omnis voluptas assumenda omnis dolor repellendus</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m">
                        <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@m">
                                <h4 class="uk-text-muted">{{__('Những con số biết nói')}}</h4>
                                <h1 class="uk-margin-medium-bottom">{{__('Forex Việt Nam mở rộng trên nền tảng đa quốc gia')}}</h1>
                                <a href="#" class="uk-button uk-button-primary uk-border-rounded">{{__('Tìm hiểu thêm')}}<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                            </div>
                            <div class="uk-width-1-2@m">
                                <div class="uk-margin-large" data-uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <h1 class="uk-text-primary uk-text-right@m">
                                            <span class="count" data-counter-end="1035">0</span>
                                        </h1>
                                        <hr class="uk-divider-small uk-text-right@m">
                                    </div>
                                    <div class="uk-width-expand@m">
                                        <h4>{{__('Dự án thành công')}}</h4>
                                        <p>{{__('Dự án thành công cùng Forex Việt Nam - Giúp các nhà đầu tư tối ưu hóa lợi nhuận và hoàn thành dự án cũng như giảm thiểu rủi ro trong quá trình giao dịch. Forex Vietnam cũng hỗ trợ tài trợ vốn quỹ cho các trader mới có thể bắt đầu giao dịch với số vốn nhỏ hơn.')}}</p>
                                    </div>
                                </div>
                                <div class="uk-margin-large" data-uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <h1 class="uk-text-primary uk-text-right@m">
                                            <span class="count" data-counter-end="17534">0</span>
                                        </h1>
                                        <hr class="uk-divider-small uk-text-right@m">
                                    </div>
                                    <div class="uk-width-expand@m">
                                        <h4>{{__('Lượt giao dịch trên Forex Việt Nam')}}</h4>
                                        <p>{{__('Forex Vietnam cũng hỗ trợ tài trợ vốn quỹ cho các trader mới nên sự giao dịch rất sôi nổi  có thể bắt đầu giao dịch với số vốn nhỏ hơn. Điều này giúp các nhà đầu tư mới có thể tập trung vào việc học hỏi và cải thiện kỹ năng giao dịch mà không cần lo lắng về vấn đề tài chính.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
