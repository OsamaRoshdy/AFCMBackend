@extends('layouts.frontend.app', ['mainPage' => 2])

@section('content')
    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('student_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('student_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <!-- Student Services -->
    <div class="student_services">
        <div class="container">
            <h2>{{ getSection('student_services')->title }}</h2>
            <p class="header_p">{{ getSection('student_services')->description }}</p>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-6">
                    <div class="service_block">
                            <div class="card">

                                <img src="{{ $service->image }}" class="card-img-top" alt="">

                                    <div class="card-body">

                                        <h5 class="card-title">{{ $service->title }}
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i></h5>
                                    <p class="card-text">{{ $service->description }} </p>
                                    <div class="center_btn">
                                    <a href="{{ url('news/' . $service->id) }}" type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                                        Learn More
                                    </a>
                                    </div>

                                    </div>

                            </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Title Page -->
    <div class="e-learning">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('e-learning')->title }}</h1>
                    <p>{{ getSection('e-learning')->description }}</p>
                    <a href="https://afcm.brightspace/d2l/login" type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                        {{ getSection('e-learning')->button }}
                    </a>
                </div>
                <img src="{{ getSection('e-learning')->image }}" class="img-fluid bg" alt="">
            </div>
        </div>
    </div>




    <!-- Latest Events-->
    <section class="section section--padding section--bg latet_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('home_events_and_news')->title }}</h2>
                        <span>{{ getSection('home_events_and_news')->description }}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="my_button">
                    <a type="button" href="{{ url('/news') }}" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                        {{ getSection('home_events_and_news')->button }}
                    </a>
                    </div>

                </div>
            </div>
            <div class="section__header">
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-5 xxl-6">
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
                                        <a href="{{ url('news/' . $new->id) }}" class="carousel_item">
                                            <img src="{{ $new->image }}" class="d-block w-100 customImage" alt="...">
                                            <div class="carousel-caption">
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
                                        <a href="{{ url('news/' . $new->id) }}" class="carousel_item">
                                            <img src="{{ $new->image }}"  class="d-block w-100 customImage" alt="...">
                                            <div class="carousel-caption">
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
            <div class="col-md-12 col-lg-12 col-xl-7 xxl-6">

                    <div class="row align-items-center">
                        @foreach($news->skip(1)->take(4) as $new)
                            <div class="col-md-12 col-lg-6">

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
                                <img src="{{ $new->image }}" class="img-fluid sec_images" alt="">
                            </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Student FAQ -->
    <div class="student_faq">
        <div class="container">
            <h2>Students FAQ</h2>
            <p class="header_p">Preview all your colleagues questions and get full answers</p>
            <div class="row">
                <div class="col-lg-12">
                    @foreach($faqs as $faq)
                        <div class="faq_section hvr-forward">
                            <h3> <i class="fa fa-minus" aria-hidden="true"></i> {{$faq->question}}</h3>
                            <p>
                                {{$faq->answer}}
                            </p>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
