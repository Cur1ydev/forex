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
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-3-5@m">
                        <h1 class="uk-margin-remove"><span class="in-highlight">{{__('Tri thức là sự đầu tư khôn ngoan')}}</h1>
                        <p class="uk-text-lead uk-text-muted">{{__('Khóa học được Forex Vietnam biên tập và tổng hợp dựa trên kinh nghiệm giao dịch từ chính bản thân. Bao gồm đầy đủ các thông tin chi tiết, các kiến thức cần thiết nhất mà 1 trader mới bước chân vào thị trường này cần phải biết.')}}</p>
                        <span class="uk-label uk-border-rounded">
                      <i class="fas fa-book fa-sm uk-margin-small-right uk-visible@s"></i>{{__('Học')}}
                  </span>
                        <i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left uk-margin-small-right"></i>
                        <span class="uk-label uk-border-rounded">
                      <i class="fas fa-lightbulb fa-sm uk-margin-small-right uk-visible@s"></i>{{__('Hiểu')}}
                 </span>
                        <i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left uk-margin-small-right"></i>
                        <span class="uk-label uk-border-rounded">
                      <i class="fas fa-chart-area fa-sm uk-margin-small-right uk-visible@s"></i>{{__('Giao dịch')}}
                  </span>
                    </div>
                    <div class="uk-width-2-5@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-expand@m">
                                    <h3 class="uk-margin-remove-bottom">{{__('Forex Academy')}}</h3>
                                    <p class="uk-margin-small-top">{{__('Forex Vietnam với mong muốn mang đến một nguồn kiến thức luôn được cập nhật liên tục và chính xác nhất đến học viên.')}}</p>
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{route('form-investor')}}">{{__('Tham gia khóa học')}}<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                <div class="uk-width-auto@m uk-visible@m">
                                    <div class="in-icon-wrapper transparent uk-margin-top">
                                        <i class="fas fa-user-graduate fa-5x"></i>
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
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                            <tbody>
                            <tr>
                                <td class="uk-width-1-3@m">
                                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                        <div class="uk-width-auto">
                                            <div class="in-icon-wrap primary-color">
                                                <i class="fas fa-users fa-lg"></i>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3>{{__('Forex Begin')}}</h3>
                                        </div>
                                    </div>
                                </td>
                                <td>{{__('Khóa học Forex Begin với kiến thức nền tảng giúp người mới hiểu về Khái niệm ngoại hối. Học về các loại hàng hoá và thời điểm tốt để giao dịch Forex hiệu quả.')}}</td>
                                <td class="uk-width-1-5@m uk-text-right@m">
                                    <a href="{{route('form-investor')}}" class="uk-button uk-button-text">{{__('Tham gia khóa học')}}<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-width-1-3@m">
                                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                        <div class="uk-width-auto">
                                            <div class="in-icon-wrap primary-color">
                                                <i class="fas fa-tools fa-lg"></i>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3>{{__('Phân tích kỹ thuật Forex')}}</h3>
                                        </div>
                                    </div>
                                </td>
                                <td>{{__('Học phân tích kỹ thuật là một chặng đường dài, mang lại nhiều cảm hứng cho các nhà đầu tư. Việc để cảm xúc dẫn dắt trong khóa học sẽ vô cùng nguy hiểm cho người mới.')}}</td>
                                <td class="uk-width-1-5@m uk-text-right@m">
                                    <a href="{{route('form-investor')}}" class="uk-button uk-button-text">{{__('Tham gia khóa học')}}<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-width-1-3@m">
                                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                        <div class="uk-width-auto">
                                            <div class="in-icon-wrap primary-color">
                                                <i class="fas fa-chart-area fa-lg"></i>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3>{{__('Phân tích cơ bản Forex')}}</h3>
                                        </div>
                                    </div>
                                </td>
                                <td>{{__('Phân tích cơ bản là một thành phần không thể thiếu của một Khóa học Forex dành cho người mới. Nếu chỉ biết nhìn biểu đồ mà không thể giải thích lý do gây ra các biến động trên biểu đồ, thì không khác nào chúng ta Ăn cơm mà không hiểu Hạt Gạo được trồng cấy thế nào.')}}</td>
                                <td class="uk-width-1-5@m uk-text-right@m">
                                    <a href="{{route('form-investor')}}" class="uk-button uk-button-text">{{__('Tham gia khóa học')}}<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="uk-flex uk-flex-center uk-margin-medium-top uk-margin-bottom">
                            <div class="uk-width-3-4@m">
                                <div class="uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">{{__('Học viện nhanh')}}</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">{{__('Video hướng dẫn')}}</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">{{__('Khóa học')}}</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">{{__('Sách điện tử')}}</a>
                                    </div>
                                    <div class="uk-visible@m">
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">{{__('Thuật ngữ')}}</a>
                                    </div>
                                    <div class="uk-visible@m">
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">{{__('Thông tin giao dịch')}}</a>
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
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-primary uk-box-shadow-small uk-border-rounded uk-background-cover" style="background-image: url(img/blockit/in-card-background-1.jpg);">
                            <div class="uk-card-body">
                                <h2 class="uk-margin-remove-bottom">{{__('Tài khoản demo miễn phí')}}</h2>
                                <p class="uk-margin-small-top">{{__('Thực hành giao dịch Cổ phiếu và CFD trong môi trường không có rủi ro.')}}</p>
                                <a class="uk-button uk-button-primary uk-border-rounded" href="#">{{__('Mở tài khoản')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
