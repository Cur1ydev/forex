<!-- footer begin -->
<footer>
    <div class="uk-section">
        <div class="uk-container uk-margin-top">
            <div class="uk-grid">
                <div class="uk-width-2-3@m">
                    <div class="uk-child-width-1-2@s uk-child-width-3-3@m" data-uk-grid="">
                        <div>
                            <h3>{{__('Forex Việt Nam')}}</h3>
                            <p>{{__('Với đội ngũ chuyên gia giàu kinh nghiệm và kiến thức sâu sắc về giao dịch ngoại hối, Forex Vietnam cung cấp các khóa học đào tạo đầy đủ và chất lượng cao. Khóa học được thiết kế từ cơ bản đến chuyên sâu, hy vọng sẽ giúp các trader mới bắt đầu có được kiến thức và kỹ năng cần thiết để đầu tư và giao dịch thành công trên thị trường này.')}}</p>
                        </div>
                        <div>
                            <h5>{{__('Các Menu chính')}}</h5>
                            <ul class="uk-list uk-link-text">
                                @foreach($category as $ct)
                                <li><a href="{{route('page',$ct->slug)}}">{{__($ct->name)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right@m">
                    <!-- social media begin -->
                    <div class="uk-flex uk-flex-column social-media-list">
                        <div><a href="#" class="color-facebook text-decoration-none"><i class="fab fa-facebook-square"></i> Facebook</a></div>
                        <div><a href="#" class="color-twitter text-decoration-none"><i class="fab fa-twitter"></i> Twitter</a></div>
                        <div><a href="#" class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a></div>
                        <div><a href="#" class="color-telegram text-decoration-none"><i class="fab fa-telegram"></i> Telegram</a></div>
                        <div><a href="#" class="color-youtube text-decoration-none"><i class="fab fa-youtube"></i> Youtube</a></div>
                    </div>
                    <!-- social media end -->
                </div>
            </div>
        </div>
        <hr class="uk-margin-large">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-2-3@m uk-text-small">
                    <ul class="uk-subnav uk-subnav-divider uk-visible@s" data-uk-margin="">
                        <li><a href="#">{{__('Về Forex Việt Nam')}}</a></li>
                        <li><a href="#">{{__('Chính sách bảo mật')}}</a></li>
                        <li><a href="#">{{__('Chính sách hoàn trả')}}</a></li>
                        <li><a href="#">{{__('Sự đồng ý của khách hàng')}}</a></li>
                    </ul>
                    <p class="copyright-text">©2023 Forex Viet Nam. All Rights Reserved.</p>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
                    <span class="uk-margin-right"><img src="{{asset('img/in-footer-mastercard.svg')}}" data-src="{{asset('img/in-footer-mastercard.svg')}}" alt="footer-payment" width="34" height="21" data-uk-img=""></span>
                    <span><img src="{{asset('img/in-footer-visa.svg')}}" data-src="{{asset('img/in-footer-visa.svg')}}" alt="footer-payment" width="50" height="16" data-uk-img=""></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
