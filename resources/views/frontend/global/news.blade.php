@extends('layouts.frontend.app')


@section('content')

    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('news_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('news_header')->image }}" class="img-fluid" alt="">
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

            </div>
            <div class="section__header">
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6 hvr-backward">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($latestNews->take(3) as $index => $new)
                                @if($loop->first)
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" aria-label="Slide 3"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($latestNews->take(3) as $new)
                                @if($loop->first)
                                    <div class="carousel-item active">
                                        <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                {{ $new->date }}
                                            </button>
                                            <h5>{{ $new->title }}</h5>
                                            <p>{{ $new->description }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                {{ $new->date }}
                                            </button>
                                            <h5>{{ $new->title }}</h5>
                                            <p>{{ $new->description }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row align-items-center">
                        @foreach($latestNews->skip(3)->take(4) as $new)
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

    <!-- Upcoming Events -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news_events">

                        <h2>Upcoming Events</h2>
                        <p>Learn all about our comming events, conferences and more</p>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
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
    </div>



    <!-- Latest Events & News -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="latest_events_news">

                        <h2>Latest Events & News</h2>
                        <p class="title_p">Learn all about our comming events, conferences and more</p>
                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-md-3">
                                <div class="card_latest mb-3 hvr-forward">
                                    <div class="card">
                                        <img src="{{$new->image}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <span>{{$new->date}}</span>
                                            <h5 class="card-title">{{$new->title}}</h5>
                                            <p class="card-text">{{$new->description}}</p>
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
                <div class="col-12 text-center">
                    <div class="pagination">
                        {{ $news->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

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
@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel2@2.2.2/dist/owl.carousel.min.js"></script>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel2@2.2.2/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('youtube/assets/css/main.css') }}" />
    <style>
        .partners {
            background: rgb(237 237 237 / 70%);
            margin-top: 40px;
        }
        /* Slider */
        .slick-slide {
            margin: 0px 20px;
        }

        .logo-carousel {
            overflow: inherit;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-track::before,
        .slick-track::after {
            display: table;
            content: '';
        }

        .slick-track::after {
            clear: both;
        }

        .slick-track {
            padding: 1rem 0;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }
        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-arrow {
            position: absolute;
            top: 50%;
            background: url(https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true) center no-repeat;
            color: #fff;
            filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);
            border: none;
            width: 2rem;
            height: 1.5rem;
            margin-top: -16px;
            z-index: 99;
        }

        .slick-arrow.slick-next {
            right: -40px;
            transform: rotate(180deg);
        }

        .slick-arrow.slick-prev {
            left: -40px;
        }

        /* Media Queries */

        @media (max-width: 768px) {
            .slick-arrow {
                width: 1rem;
                height: 1rem;
            }
        }

    </style>
@endsection
