@extends('layouts.frontendV2.app', ['mainPage' => 3])
@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .lightSliderHome {
            width:100%;
        }
        .lightSliderHome ul {
            list-style: none outside none;
            padding-left: 0;
            margin-bottom:0;
        }
        .lightSliderHome li {
            display: block;
            float: left;
            cursor:pointer;
        }
        .lightSliderHome img {
            display: block;
            height: 500px;
            width: 100%;
            border-radius:10px;
        }
        .lightSlider > li {
            position: relative;
        }
        .caption {
            background-color: #ffffff52;
            @if(app()->getLocale() == 'en')
                border-left: 6px solid var(--optional-color);
            @else
                border-right: 6px solid var(--optional-color);
            @endif
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 10px;
            margin: 20px;
            color: #FFF;
            width: 85%;
            font-weight: bold;
        }
        .caption a {
            margin:0;
            color: white;
        }
        .lSPager li a img {
            height: 100px !important;
        }
        .lSPager .lSpg {
            text-align: center;
        }
        .lSSlideOuter .lSPager.lSpg > li:hover a, .lSSlideOuter .lSPager.lSpg > li.active a {
            background-color: var(--main-color);
        }
    </style>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js" integrity="sha512-sww7U197vVXpRSffZdqfpqDU2SNoFvINLX4mXt1D6ZecxkhwcHmLj3QcL2cJ/aCxrTkUcaAa6EGmPK3Nfitygw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop:true,
            slideMargin: 2,
            thumbItem: 6,
            vertical:true,
            controls: false,

        });
    </script>
@endsection
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.5}'>
    <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <span>Welcome to AFCM Staff</span>
                                <h1>Join AFCM Team</h1>

                                <div class="banner-btn">
                                    <a href="events.html" class="default-btn">
                                        Join
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="banner-img">
                                <div class="lightSliderHome">
                                    <ul id="lightSlider">
                                        @foreach($sliderGroup->sliders->skip(1) as $slider)
                                            <li data-thumb="{{ $slider->image }}">
                                                <img src="{{ $slider->image }}"/>
                                                <div class="caption">
                                                    <a href="">{{ $slider->description }}</a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


    </section>
    <!-- End Banner Area -->
    <!-- End Blog Area -->
    <section class="counter-area pt-100">
        <div class="container">
            <div class="section-title">
                <h2>{{ getSection('academic_departments')->title }}</h2>
            </div>
            <div class="counter-bg">
                <div class="row justify-content-md-center">
                    <div class="study-slider owl-carousel owl-theme">

                        @foreach($departments as $department)
                            <div class="single-study">
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <img src="{{ asset('frontendV2/assets/images/logo.png') }}" alt="">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <h3 class="text-center">
                                    <p>{{ $department->name }}</p>
                                </h3>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="shape counter-shape-1">
                    <img src="{{ asset('frontendV2/assets/images/counter-shape-1.png') }}" alt="Image">
                </div>
                <div class="shape counter-shape-2">
                    <img src="{{ asset('frontendV2/assets/images/counter-shape-2.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{getSection('home_events_and_news')->title}}</h2>
            </div>

            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-6"  >
                        <div class="single-blog">
                            <a href="{{ url('news/' . $new->id) }}" class="blog-img">
                                <img src="{{ $new->image }}" alt="Image">
                            </a>
                            <div class="blog-content">
                                <ul>
                                    <li>
                                        <i class="ri-calendar-line"></i>
                                        <span>{{ $new->date }}</span>
                                    </li>
                                </ul>

                                <h3>
                                    <a href="{{ url('news/' . $new->id) }}">
                                        {{ $new->title }}
                                    </a>
                                </h3>

                                <p>
                                    {{ $new->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="section-title">
                <a href="{{ url('/news') }}" class="default-btn text-center">
                    {{ getSection('home_events_and_news')->button }}
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

        </div>
    </section>
    <!-- End Blog Area -->


@endsection
