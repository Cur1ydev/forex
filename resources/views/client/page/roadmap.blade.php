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
        <!-- sectio content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-margin-medium-bottom">
                            <h1 class="uk-margin-remove">{{__('Forex Việt Nam Road Map')}}</h1>
                            <p class="uk-text-lead">{{__('Forex Viet Nam là một câu lạc bộ đầu tư ngoại hối chuyên nghiệp hàng đầu tại Việt Nam. Được thành lập với sứ mệnh cung cấp các dịch vụ đào tạo, tư vấn và quản lý tài khoản giao dịch cho các nhà đầu tư, Forex Vietnam đã trở thành địa chỉ tin cậy của những người yêu thích giao dịch ngoại hối.')}}</p>
                            <p class="uk-text-lead">{{__('Nhằm cung cấp cho người dùng một lộ trình phát triển minh bạch và rõ ràng để nắm bắt cơ hội đầu tư tiềm năng. Forex Vietnam đưa ra mốc kế hoạch như sau và đừng ngần ngại cho chúng tôi biết điều gì là quan trọng đối với bạn.')}}</p>
                            <p>{{__('Bạn có thể theo dõi tiến trình của chúng tôi trên Twitter')}} <a href="#"><i class="fab fa-twitter"></i><span class="uk-text-lowercase">@equity-fx</span></a></p>
                        </div>
                    </div>
                    <div class="uk-width-1-1 in-timeline-1">
                        <hr>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m">
                            <div>
                                <div class="in-timeline-branch">
                                    <div class="uk-flex">
                                        <div class="in-icon-wrap primary-color">
                                            <i class="fas fa-clipboard-check fa-lg"></i>
                                        </div>
                                        <div class="in-timeline-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">{{__('Quý 2 - 2023')}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-small uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                        <ul class="uk-list in-list-check">
                                            <li>{{__('Xây dựng trải nghiệm và tìm kiếm trợ giúp từ các chuyên gia Forex')}}</li>
                                            <li>{{__('Lên kế hoạch dự án chi tiết và khai thác Forex ở những đề mục chuyên sâu')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-timeline-branch">
                                    <div class="uk-flex">
                                        <div class="in-icon-wrap primary-color">
                                            <i class="fas fa-cog fa-lg"></i>
                                        </div>
                                        <div class="in-timeline-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">{{__('Quý 3 - 2023')}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-small uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                        <ul class="uk-list in-list-check">
                                            <li>{{__('Tạo lập và cài đặt website')}}</li>
                                            <li>{{__('Cập nhật và bổ sung kế hoạch')}}</li>
                                            <li>{{__('Sử dụng thêm mạng xã hội và tạo nội dung')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-timeline-branch">
                                    <div class="uk-flex">
                                        <div class="in-icon-wrap primary-color">
                                            <i class="fas fa-flask fa-lg"></i>
                                        </div>
                                        <div class="in-timeline-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">{{__('Quý 4 - 2023')}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-small uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                        <ul class="uk-list in-list-check">
                                            <li>{{__('Tiện ích mở rộng cho các trình duyệt phổ biến khác')}}</li>
                                            <li>{{__('Chế độ xem danh sách cho các nhiệm vụ')}}</li>
                                            <li>{{__('Hoàn thiện kế hoạch và tổng kết thời gian và khối lượng cụ thể')}}</li>
                                        </ul>
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
