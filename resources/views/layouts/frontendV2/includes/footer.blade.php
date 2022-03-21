

<section class="application-submit-area">
    <div class="application-submit-bg">
        <div class="application-submit-content">
            <div class="section-title" style="  margin: -8px auto 50px;text-align: center;">
                <h2 class="color-white">Subscribe Now</h2>
                {{ Form::open(['route' => 'subscribe', 'class' => 'newsletter_form']) }}
                <div class="form-group">
                    {{ Form::email('email', old('email'), ['class'=>'input', 'placeholder' => 'Your Email ...']) }}
                </div>
                <br>
                <button type="Submit" class="default-btn">
                    {{ getSection('subscribe')->button }}
                </button>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</section>


<!-- Start Footer Area -->
<footer class="footer-area black-bg-color">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget bg-f9f5f1">
                    <a href="index.html" class="logo">
                        <img width="60%" src="{{ asset('frontendV2/assets/images/logo.png') }}" alt="Image">
                    </a>

                    <p>
                        To achieve excellence in medical education and scientific research and to become the regional reference in military medicine.
                    </p>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{ __('frontend.site_map') }}</h3>

                    <ul class="import-link">
                        @foreach(getLinksFooter() as $link)
                        <li>
                            <a href="{{ url('/' . $link->route) }}">{{ $link->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{ __('frontend.contact_us') }}</h3>

                    <ul class="address">
                        <li class="location">
                            <i class="ri-map-pin-line"></i>
                            <span>Address</span>
                            Ihsan Abd El Quddus Street (from Al Khalifa Al Mumin Street), Sirah, Egypt.
                        </li>
                        <li>
                            <i class="ri-mail-line"></i>
                            <span>Email</span>
                            <a href="mailto:info@unco.com">Afcm@Mod.Gov.Eg</a>
                        </li>
                        <li>
                            <i class="ri-phone-line"></i>
                            <span>Phone</span>
                            <a href="tel:+1-(514)-312-5678">02-24032839</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area">
    <div class="container">
        <p>
            Copyright <i class="ri-copyright-line"></i> 2022 AFCM
        </p>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->
