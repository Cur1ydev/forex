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
                <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                    <div class="uk-width-1-1">
                        <h1 class="uk-margin-remove">{{__('Hệ sinh thái Forex Việt Nam')}}</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top">{{__('Làm việc với chúng tôi theo cách bạn muốn.')}}</p>
                        <p>{{__('Với sự phát triển của công nghệ blockchain và tiền điện tử, nhu cầu giao dịch và sử dụng các loại tiền này ngày càng tăng cao. Foxy Exchanges hiểu được điều này và cung cấp cho người dùng các dịch vụ giao dịch tiền điện tử nhanh chóng, tiện lợi và an toàn.')}}</p>
                    </div>
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-seedling fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="#">{{__('Đầu tư')}}<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>{{__('Nhiều lựa chọn sản phẩm đầu tư giúp xây dựng danh mục đầu tư đa dạng')}}</p>
                        </div>
                    </div>
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-chart-bar fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="#">{{__('Kinh doanh')}}<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>{{__('Các công cụ giao dịch mạnh mẽ, tài nguyên, thông tin chi tiết và hỗ trợ')}}</p>
                        </div>
                    </div>
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-chart-pie fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="#">{{__('Quản lý tài sản')}}<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>{{__('Tư vấn tài chính tận tâm để giúp đạt được các mục tiêu cụ thể của riêng bạn')}}</p>
                        </div>
                    </div>
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-navy">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="#">{{__('Tư vấn đầu tư')}}<i
                                        class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>{{__('Nhiều lựa chọn chiến lược đầu tư từ các nhà quản lý danh mục đầu tư dày dạn kinh nghiệm')}}</p>
                        </div>
                    </div>
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-grey">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-funnel-dollar fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="#">{{__('Danh mục đầu tư thông minh')}}<i
                                        class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>{{__('Dịch vụ tư vấn đầu tư hoàn toàn tự động, mang tính cách mạng')}}</p>
                        </div>
                    </div>
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-orange">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-handshake fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="#">{{__('Cố vấn quỹ tương hỗ')}}<i
                                        class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>{{__('Hướng dẫn chuyên môn từ cố vấn địa phương độc lập dành cho các nhà đầu tư có giá trị ròng cao')}}</p>
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
                    <div class="uk-width-2-3@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto@m">
                                <div class="in-icon-wrap large primary-color uk-margin-right">
                                    <i class="fas fa-money-bill-wave fa-2x"></i>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3>{{__('Tại sao bạn nên đầu tư vào Forex Việt Nam')}}</h3>
                                <p>{{__('Foxy Exchanges là một thương hiệu được thành lập nhằm tạo ra một hệ sinh thái giao dịch tiền điện tử toàn diện, bao gồm nhiều sàn giao dịch uy tín và các dịch vụ liên quan đến phát triển token và coin. Foxy Exchanges hướng đến mục tiêu trở thành một trong những hệ sinh thái giao dịch tiền điện tử hàng đầu trên thế giới.')}}</p>
                                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                                    <div>
                                        <ul class="uk-list in-list-check">
                                            <li>{{__('Tiếp cận thị trường trực tiếp (DMA)')}}</li>
                                            <li>{{__('Đòn bẩy lên tới 1:500')}}</li>
                                            <li>{{__('Thanh toán T+0')}}</li>
                                            <li>{{__('Cổ tức trả bằng tiền mặt')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <h3>{{__('Ưu đãi cổ phiếu của chúng tôi')}}</h3>
                        <table class="uk-table uk-table-striped uk-text-small uk-text-center">
                            <thead>
                            <tr>
                                <th class="uk-text-center">{{__('TÊN')}}</th>
                                <th class="uk-text-center">{{__('TIỀN GỬI BAN ĐẦU')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{__('Forex Việt Nam')}}</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>{{__('Wfonews Việt Nam')}}</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>{{__('Zorotoken')}}</td>
                                <td>10%</td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="uk-button uk-button-text" href="#">{{__('Xem toàn bộ bảng chia sẻ')}}<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-card-16">
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                            <div class="uk-grid uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <h3>{{__('Nhận tới 600$ cộng với 60 ngày giao dịch cổ phiếu và ngoại hối miễn phí')}}</h3>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="#">{{__('Mở tài khoản của bạn')}}<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
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
