@extends('layouts.frontendV2.app', ['mainPage' => 1])
@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js" integrity="sha512-sww7U197vVXpRSffZdqfpqDU2SNoFvINLX4mXt1D6ZecxkhwcHmLj3QcL2cJ/aCxrTkUcaAa6EGmPK3Nfitygw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop:true,
            auto:true,
            slideMargin: 0,
            thumbItem: 6,
            @if(app()->getLocale() !== 'en')
            rtl:true
            @endif
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#PartnerSlider").lightSlider({
                loop:true,
                item: 5,
                auto:true,
                @if(app()->getLocale() !== 'en')
                rtl:true,
                @endif
                responsive : [
                    {
                        breakpoint:800,
                        settings: {
                            item:3,
                            slideMove:1,
                            slideMargin:6,
                        }
                    },
                    {
                        breakpoint:480,
                        settings: {
                            item:2,
                            slideMove:1
                        }
                    }
                ]
            });
        });
    </script>
@endsection
@section('content')

    <section class="events-area events-area-style-two pt-20 pb-20">
        <div class="container">
            <div class="row ">
{{--            <div class="row align-items-center">--}}
                <div class="col-lg-8">
                    <div class="banner-img">
                        <div class="lightSliderHome">
                            <ul id="lightSlider">
                                @foreach($sliderGroup->sliders as $slider)
                                    <li data-thumb="{{ $slider->image }}">
                                        <img src="{{ $slider->image }}"/>
                                        <div class="caption">
                                            <a href="{{ $slider->url ? url($slider->url) : '#' }}">{{ $slider->description }}</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 " >
                    <div class="events-timer mb-0 ml-15 row align-items-center" style="height: 100%!important;">

                        <span style="font-size: 35px;text-decoration: underline" >{{ getSection('e-learning')->title }}</span>
                        <div class="event-img">
                            <img src="{{ getSection('e-learning')->image }}" style="width: 100%; max-height: 200px" alt="Image">
                        </div>
                        <p style="font-size: 14px; color: #FFF" > {{ getSection('e-learning')->description }}</p>

                        <a href="https://afcm.brightspace.com/d2l/login" target="_blank" class="default-btn">
                            {{ getSection('e-learning')->button }}
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Blog Area -->
    <section  class="blog-area pt-20">
        <div class="container">
            <div class="section-title">
                <h2>{{getSection('home_events_and_news')->title}}</h2>
            </div>
            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-6"  >
                        <div class="single-blog">
                        <a href="{{ url('news/' . $new->id) }}" class="blog-img">
                            <img src="{{ $new->image }}" style="width: 500px!important;height: 350px!important;" alt="Image">
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
            <div class="section-title" style="  margin: -8px auto 50px;text-align: center;">
                <a href="{{ route('news', ['p' => 1]) }}" class="default-btn text-center">
                    {{ getSection('home_events_and_news')->button }}
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Events Area -->
    <section class="events-area bg-color pt-20 pb-20">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="events-content mr-15">
                        <span>{{ getSection('home_upcoming_events')->title }}</span>
                        <h2>{{ getSection('home_upcoming_events')->description }}</h2>
                        <ul class="events-list">
                            @foreach($events as $event)
                                <li>
                                <div class="events-date">
                                    <h3 style="color: white; font-size: 35px" class="mb-2">{{ eventDate($event->date)->format('d') }} </h3>
                                    <span>{{ eventDate($event->date)->format('M Y') }}</span>
                                </div>
                                <h3>
                                    <a href="{{ url('events/' . $event->id) }}">
                                        {{ $event->title }}
                                    </a>
                                </h3>
                                <p style="margin: 10px">
                                    {{ $event->description }}
                                </p>

                                <a href="{{ url('events/' . $event->id) }}" class="read-more" style="margin: 10px">
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
                            <img src="{{ getSection('medical_scientific_sections')->image }}" alt="Image">
                        </div>

                        <h3 style="color: white">{{ getSection('medical_scientific_sections')->title }}</h3>
                        <span>{{ getSection('medical_scientific_sections')->description }}</span>

                        <a href="{{ getSection('medical_scientific_sections')->content_en }}" target="_blank" class="default-btn">
                            {{ getSection('medical_scientific_sections')->button }}
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Area -->

    <!-- Stat About Area -->
    <section class="about-area pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img mr-15">
                        <img src="{{ getSection('why_afcm')->image  }}" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <h2> {{ getSection('why_afcm')->title  }}</h2>

                        <p>
                            {!! getSection('why_afcm')->content !!}

                        </p>
                        <a href="{{ url('pages/44') }}" class="default-btn">
                            {{__('frontend.learn_more')}}
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Stat Admission Area -->
    <section class="admission-area pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="admission-content ml-15">
                        <h2>{{ getSection('glance')->title }}</h2>
                        <p>
                            {!! getSection('glance')->content !!}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="admission-img mr-15">
                        <img src="{{ getSection('glance')->image }}" alt="Image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Admission Area -->

    <!-- Start Statistics Area -->
    <section class="counter-area bg-color-f8fafb pt-20 pb-20">
        <div class="container">
            <div class="section-title">
                <h2>{{ getSection('statistics')->title }}</h2>
            </div>
            <div class="counter-bg">
                <div class="row">
                    @foreach($statistics as $statistic)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter bg-style">
                                <div class="row">
                                    <div class="col-12">
                                        <i class="{{ $statistic->icon }}"></i>
                                        <h2>
                                            <span dir="ltr" class="odometer odometer-auto-theme" data-count="{{ $statistic->count }}"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span></div></span>
                                        </h2>
                                    </div>
                                    <div class="col-12">
                                        <h4>{{ $statistic->name }}</h4>

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
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
    <!-- End Statistics Area -->


    <!-- Start Find A Courses Area -->
    <section style="padding-top: 20px!important; padding-bottom: 0px!important;" class="banner-area  banner-area-style-two  pt-20 pb-20" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title">
                <h2>{{ getSection('media')->title }}
                </h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ml-15">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                @if($videos->count())
                                    <div class="video-banner">
                                        <img src="https://i.ytimg.com/vi/{{$videos->first()->url}}/hqdefault.jpg" width="100%" alt="Image">

                                        <div class="video-button">
                                            <a href="https://www.youtube.com/watch?v={{$videos->first()->url}}" class="popup-youtube video-btn">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="row">
                                    @foreach($videos->skip(1) as $video)
                                        <div class="col-lg-6 col-sm-6" style="margin-bottom: 18px">
                                            <div class="video-banner">
                                                <img src="https://i.ytimg.com/vi/{{$video->url}}/hqdefault.jpg" alt="Image">

                                                <div class="video-button">
                                                    <a href="https://www.youtube.com/watch?v={{$video->url}}" class="popup-youtube video-btn">
                                                        <i class="flaticon-play-button"></i>
                                                    </a>
                                                </div>

                                                <div class="shape-1">
                                                    <img src="{{ asset('frontendV2/assets/images/banner/banner-shape.png') }}" alt="Image">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-title pt-70" style="  margin: -8px auto 50px;text-align: center;">
                <a href="{{ url('/gallery') }}" class="default-btn text-center">
                    {{ getSection('media')->button }}
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- End Find A Courses Area -->

    <!-- Start Partners Area -->
    <section class="counter-area pb-20">
        <div class="container">
            <div class="section-title">
                <h2>{{ getSection('home_partners')->title }}</h2>
            </div>
            <div class="counter-bg">
                <div class="row">
                    <ul id="PartnerSlider">
                        @foreach($partners as $partner)
                            <li class="text-center">
                                <a href="{{ $partner->url}}">
                                    <img src="{{$partner->image}}" style="height: 150px;height: 150px" class="img-fluid customSliderImage" alt="">
                                </a>

                            </li>
                        @endforeach
                    </ul>

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
    <!-- End Partners Area -->

@endsection
