@extends('layouts.frontendV2.app')
@section('styles')
    <style>
        .input {
            height: 50px;
            width: 100%;
            border: none;
            background-color: #FFF;
            color: #131D3C;
            border-radius: 40px !important;
            padding: 5px 15px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
    </style>
@endsection
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.5}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span>Welcome to AFCM</span>
                                <h1>E-Learning Scholarship</h1>

                                <div class="banner-btn">
                                    <a href="events.html" class="default-btn">
                                        Submit
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="video-banner">
                                <div class="campus-experience-slider owl-carousel owl-theme">
                                    @foreach($sliderGroup->sliders as $slider)
                                        <div class="single-campus-experience" style="max-height: 500px;min-height:500px;background: url('http://localhost/AFCMBackend/public/storage/images/blocks/scientific.jpg') no-repeat;background-size: 100%;">
                                            <h3>{{ $slider->description }}</h3>
                                            <p>{{ $slider->description }}</p>

                                            <a href="campus-experience.html" class="read-more">
                                                Find out more
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    @endforeach


                                </div>

                            </div>

                            {{--                            <div class="banner-img">--}}
{{--                                <img src="{{ asset('http://localhost/AFCMBackend/public/storage/images/blocks/scientific.jpg') }}" alt="Image">--}}

{{--                                <img src="{{ asset('frontendV2/assets/images/banner/banner-img-1.jpg') }}" alt="Image">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- End Banner Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Latest Events & News</h2>
            </div>

            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-6"  >
                        <div class="single-blog">
                        <a href="blog-details.html" class="blog-img">
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
                    <div class="col-lg-4 col-md-6"></div>
                    <div class="col-lg-4 col-md-6 row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <a href="application.html" class="default-btn text-center">
                                Show more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="col-lg-4 col-md-6"></div>
            </div>


        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Events Area -->
    <section class="events-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="events-content mr-15">
                        <span>Events</span>
                        <h2>Upcoming events</h2>
                        <ul class="events-list">
                            @foreach($events as $event)
                                <li>
                                <div class="events-date">
                                    <span class="mb-2">{{ eventDate($event->date)->format('d  M') }} </span>
                                    <span>{{ eventDate($event->date)->format('Y') }}</span>
                                </div>
                                <h3>
                                    <a href="{{ url('events/' . $event->id) }}">
                                        {{ $event->title }}
                                    </a>
                                </h3>
                                <p>
                                    {{ $event->description }}
                                </p>

                                <a href="{{ url('events/' . $event->id) }}" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="events-timer ml-15">
                        <div class="event-img">
                            <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">
                        </div>

                        <h3 style="color: white">ACFM</h3>
                        <span>Medical Scientific Sections</span>

                        <a href="application.html" class="default-btn">
                            Browse
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Area -->

    <!-- Stat About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img mr-15">
                        <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <h2>Why Join AFCM ?</h2>

                        <p>
                            Begin a student at the AFCM results in many advantages

                            Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree Study for six years to get the bachelore degree
                        </p>
                        <a href="about.html" class="default-btn">
                            Find out more
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Stat Admission Area -->
    <section class="admission-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="admission-content ml-15">
                        <h2>AFCM In Glance</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="admissions.html" class="default-btn">
                            Overview
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="admission-img mr-15">
                        <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Admission Area -->

    <!-- Start Find A Courses Area -->
{{--    <section class="find-courses-area">--}}
{{--        <div class="find-courses-bg">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>AFCM Statistics--}}
{{--                    </h2>--}}
{{--                </div>--}}

{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="ml-15">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-3 col-sm-6">--}}
{{--                                    <div class="single-counter bg-172f41">--}}
{{--                                        <i class="flaticon-teacher"></i>--}}

{{--                                        <div class="count-title">--}}
{{--                                            <h2>--}}
{{--                                                <span class="odometer" data-count="640">00</span>--}}
{{--                                            </h2>--}}
{{--                                            <h4>Teachers</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-3 col-sm-6">--}}
{{--                                    <div class="single-counter">--}}
{{--                                        <i class="flaticon-graduated"></i>--}}

{{--                                        <div class="count-title">--}}
{{--                                            <h2>--}}
{{--                                                <span class="odometer" data-count="4517">00</span>--}}
{{--                                            </h2>--}}
{{--                                            <h4>Students</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-3 col-sm-6">--}}
{{--                                    <div class="single-counter bg-172f41">--}}
{{--                                        <i class="flaticon-book-1"></i>--}}

{{--                                        <div class="count-title">--}}
{{--                                            <h2>--}}
{{--                                                <span class="odometer" data-count="54">00</span>--}}
{{--                                            </h2>--}}
{{--                                            <h4>Subjects</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-3 col-sm-6">--}}
{{--                                    <div class="single-counter">--}}
{{--                                        <i class="flaticon-graduation-cap"></i>--}}

{{--                                        <div class="count-title">--}}
{{--                                            <h2>--}}
{{--                                                <span class="odometer" data-count="269">00</span>--}}
{{--                                            </h2>--}}
{{--                                            <h4>Degrees</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="counter-area bg-color-f8fafb pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>AFCM Statistics</h2>
            </div>
            <div class="counter-bg">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduated"></i>

                            <h2>
                                <span class="odometer odometer-auto-theme" data-count="4517"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span></div></span>
                            </h2>
                            <h4>Students</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-teacher"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer odometer-auto-theme" data-count="640"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                                </h2>
                                <h4>Teachers</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-book-1"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer odometer-auto-theme" data-count="54"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span>
                                </h2>
                                <h4>Subjects</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduation-cap"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer odometer-auto-theme" data-count="269"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span></div></span>
                                </h2>
                                <h4>Degrees</h4>
                            </div>
                        </div>
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
    <!-- End Find A Courses Area -->


    <!-- Start Find A Courses Area -->
    <section class="banner-area bg-2 banner-area-style-two jarallax pb-100" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title">
                <h2>AFCM Media
                </h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ml-15">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="video-banner">
                                    <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">

                                    <div class="video-button">
                                        <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>

                                    <div class="shape-1">
                                        <img src="{{ asset('frontendV2/assets/images/banner/banner-shape.png') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="video-banner">
                                            <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">

                                            <div class="video-button">
                                                <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>

                                            <div class="shape-1">
                                                <img src="{{ asset('frontendV2/assets/images/banner/banner-shape.png') }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-bottom: 18px" class="col-lg-6 col-sm-6">
                                        <div class="video-banner">
                                            <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">

                                            <div class="video-button">
                                                <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>

                                            <div class="shape-1">
                                                <img src="{{ asset('frontendV2/assets/images/banner/banner-shape.png') }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="video-banner">
                                            <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">

                                            <div class="video-button">
                                                <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>

                                            <div class="shape-1">
                                                <img src="{{ asset('frontendV2/assets/images/banner/banner-shape.png') }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="video-banner">
                                            <img src="http://localhost/AFCMBackend/public/storage/images/blocks/news.jpg" alt="Image">

                                            <div class="video-button">
                                                <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>

                                            <div class="shape-1">
                                                <img src="{{ asset('frontendV2/assets/images/banner/banner-shape.png') }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- End Find A Courses Area -->

@endsection
