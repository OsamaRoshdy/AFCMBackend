@extends('layouts.frontend.app', ['mainPage' => 3])


@section('content')

    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('academic_staff_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('academic_staff_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <!-- E-learning and slider -->
    <div class="learning_slider">
        <div class="container">
            <div class="row">
                <!-- Start slider -->
                <div class="col-mg-12 col-lg-8">
                    <div
                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach($sliderGroup->sliders as $slider)
                                <div class="swiper-slide">
                                    <img src="{{ $slider->image }}"  class="image"/>
                                    <p>{{ $slider->description }}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($sliderGroup->sliders as $slider)
                                <div class="swiper-slide">
                                    <img src="{{ $slider->image }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- End slider -->

                <div class="col-md-12 col-lg-4">
                    <div class="learning">
                        <div class="overlay">
                            <h2>{{ getSection('staff_join')->title }}</h2>
                            <p class="text-center">{{ getSection('staff_join')->description }}</p>
                            <div class="text-end">
                                <a href="{{ url('/pages/how-to-join') }}" type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                    <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                                    {{ getSection('staff_join')->button }}
                                </a>
                            </div>
                        </div>
                        <img src="{{ getSection('staff_join')->image }}" style="height: 600px" class="d-block w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Events-->
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="col-md-10">
                <div class="section__title">
                    <h2 class="section-title">{{ getSection('academic_departments')->title }}</h2>
                    <span>{{ getSection('academic_departments')->description }}</span>
                </div>
            </div>

            <div class="swiper customSwiper2">
                <div class="swiper-wrapper">
                    @foreach($departments as $department)
                    <div class="swiper-slide customSwipperSlider">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider_img">
                                        <div class="overlay">
                                        </div>
                                        <img src="{{ asset('frontend/images/logo.png') }}" class="img-fluid customSliderImage" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h3>{{ $department->name }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>



        </div>
    </section>

    <!-- Latest Events-->
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('home_events_and_news')->title }}</h2>
                        <span>{{ getSection('home_events_and_news')->description }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-end">
                    <a type="button" href="{{ url('/news') }}" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                        {{ getSection('home_events_and_news')->button }}
                    </a>
                </div>
            </div>
            <div class="section__header">
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6 hvr-backward">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($news->take(2) as $index => $new)
                                @if($loop->first)
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" aria-label="Slide 3"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($news->take(2) as $new)
                                @if($loop->first)
                                    <div class="carousel-item active">
                                        <a href="{{ url('news/' . $new->id) }}">
                                            <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block w-100">
                                                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                    {{ $new->date }}
                                                </button>
                                                <div class="slider_body_bg">
                                                    <h5>{{ $new->title }}</h5>
                                                    <p style="font-size: 19px!important;">{{ $new->description }}</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <a href="{{ url('news/' . $new->id) }}">
                                            <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block w-100">
                                                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                    {{ $new->date }}
                                                </button>
                                                <div class="slider_body_bg">
                                                    <h5>{{ $new->title }}</h5>
                                                    <p style="font-size: 19px!important;">{{ $new->description }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">

                    <div class="row align-items-center">
                        @foreach($news->skip(1)->take(4) as $new)
                            <div class="col-md-6">

                                <div class="img_sec">
                                    <div class="overlay">
                                        <a href="{{ url('/news/' . $new->id) }}">
                                            <button type="button" class="btn btn-primary custom_button">
                                                {{ $new->date }}
                                            </button>
                                            <div class="slider_body_bg_small">
                                                <p>{{ $new->description }}</p>
                                            </div>
                                        </a>


                                    </div>
                                    <img src="{{ $new->image }}" class="img-fluid" alt="" srcset="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
