@extends('layouts.frontendV2.app', ['mainPage' => 3])
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.5}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
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
