@extends('layouts.frontend.app', ['mainPage' => 1])


@section('content')

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
                <!-- Start E-learning -->
                <div class="col-md-12 col-lg-4">
                    <div class="learning">
                        <div class="overlay">
                            <h2>{{ getSection('e-learning')->title }}</h2>
                            <p class="text-center">{{ getSection('e-learning')->description }}</p>
                            <div class="text-end">
                                <a type="button" href="https://afcm.brightspace.com/d2l/login" target="_blank" class="btn btn-primary custom_button hvr-wobble-vertical">
                                    <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                                    {{ getSection('e-learning')->button }}
                                </a>
                            </div>
                        </div>
                        <img src="{{ getSection('e-learning')->image }}" style="height: 600px" class="d-block w-100" alt="">
                    </div>
                </div>
                <!-- End E-learning  -->
            </div>
        </div>
    </div>

    <!-- Latest and Upgrade-->
    <div class="latest_upgrade">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hvr-forward">
                    <div class="get_latest">
                        <div class="overlay">
                        <h2>{{ getSection('resources_students')->title }}</h2>
                        <p>{{ getSection('resources_students')->description }}</p>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                                {{ getSection('resources_students')->button }}
                            </button>
                        </div>
                        </div>
                        <img src="{{ asset('frontend/images/image.png') }}" class="img-fluid latest_img" alt="">
                    </div>
                </div>

                <div class="col-md-6 hvr-backward">
                    <div class="get_latest">
                       <div class="overlay">
                       <h2>{{ getSection('resources_staff')->title }}</h2>
                        <p>{{ getSection('resources_staff')->description }}</p>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                                {{ getSection('resources_staff')->button }}
                            </button>
                        </div>
                       </div>
                       <img src="{{ asset('frontend/images/image.png') }}" class="img-fluid latest_img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Events -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="card card_info">
                        <img src="{{ getSection('medical_scientific_sections')->image }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h1 class="card-title">{{ getSection('medical_scientific_sections')->title }}</h1>
                            <p class="card-text">{{ getSection('medical_scientific_sections')->description }}</p>
                            <a href="{{ url('/staff') }}" type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                                {{ getSection('medical_scientific_sections')->button }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="events">
                        <h2>{{ getSection('home_upcoming_events')->title }}</h2>
                        <p>{{ getSection('home_upcoming_events')->description }}</p>
                        @foreach($events as $event)
                            <div class="card mb-3 hvr-forward">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <!-- <img src="{{ $event->image }}" class="img-fluid rounded-start" alt=""> -->
                                   <div class="date">
                                   <p class="text-center">22 </br> 03/2022</p>
                                   </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h6 class="card-text" style="color: black">{{ $event->title }}</h6>
                                        <p class="card-text">{{ $event->description }}</p>
                                        <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            @foreach($news->take(3) as $index => $new)
                                @if($loop->first)
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" aria-label="Slide 3"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($news->take(3) as $new)
                                @if($loop->first)
                                    <div class="carousel-item active">
                                        <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                {{ $new->date }}
                                            </button>
                                            <div class="slider_body_bg">
                                            <h5>{{ $new->title }}</h5>
                                            <p>{{ $new->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                {{ $new->date }}
                                            </button>
                                            <div class="slider_body_bg">
                                            <h5>{{ $new->title }}</h5>
                                            <p>{{ $new->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row align-items-center">
                        @foreach($news->skip(3)->take(4) as $new)
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

    <!-- Statistics -->
    <div class="statistics">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ getSection('statistics')->title }}</h2>
                        <p>{{ getSection('statistics')->description }}</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($statistics as $statistic)
                        <div class="col-md-6 col-lg-3">
                            <div class="box">
                            <i class="{{ $statistic->icon }}" aria-hidden="true"></i>
                            <h1 data-counterup-time="1500" data-counterup-delay="30" data-counterup-beginat="100" class="counter">{{ $statistic->count }}</h1>
                            <span>{{ $statistic->name }}</span>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    



    <div class="swiper customSwiper2">
        <div class="swiper-wrapper">    
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
                        <h3>mohamed</h3>
                        <span>title</span>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h3>mohamed</h3>
                        <span>title</span>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h3>mohamed</h3>
                        <span>title</span>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h3>mohamed</h3>
                        <span>title</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>


    

    

    <!-- Why -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 hvr-forward">
                <div class="glance">
                    <div class="logo">
                        <a class="logo__img" href="#">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo">
                        </a>
                        <a class="logo__dis" href="#">
                            {{ getSection('glance')->title }}
                        </a>
                    </div>
                    <p>
                        {!! getSection('glance')->content !!}
                    </p>
                    <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>


            <div class="col-md-12 col-lg-6 hvr-forward">
                <div class="why_join">
                    <div class="logo">
                        <a class="logo__dis" href="#">
                            {{ getSection('why_afcm')->title  }}
                        </a>
                    </div>
                    {!! getSection('why_afcm')->content !!}
                    <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    {{-- Partnrs   --}}

    {{--  Media  --}}

@endsection
