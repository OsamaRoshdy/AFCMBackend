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
                    <div class="service_block hvr-forward">
                        <div class="card">
                            <img src="{{ $service->image }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i></h5>
                                <p class="card-text">{{ $service->description }} </p>
                                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                    <img src="icons/check.png" class="check" alt="">
                                    Learn More
                                </button>
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
                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('icons/check.png') }}" class="check" alt="">
                        {{ getSection('e-learning')->button }}
                    </button>
                </div>
                <img src="{{ getSection('e-learning')->image }}" class="img-fluid bg" alt="">
            </div>
        </div>
    </div>


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
                        <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
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
                            <div class="col-md-6 hvr-forward">
                                <div class="img_sec">
                                    <div class="overlay">
                                        <button type="button" class="btn btn-primary custom_button">
                                            {{ $new->date }}
                                        </button>
                                        <p>{{ $new->description }}</p>
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
@section('footer')
    <div class="footer__top">
        <div class="container">
            <h4 class="section-title section-title--white">{{ getSection('subscribe')->title }}</h4>
            <p>{{ getSection('subscribe')->description }}</p>
            <form class="newsletter_form " method="POST" action="">
                <input class="input" type="email" name="email" placeholder="Your Email ..." aria-label="email" autocomplete="off">
                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                    <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                    {{ getSection('subscribe')->button }}
                </button>

            </form>
        </div>
    </div>
@endsection
