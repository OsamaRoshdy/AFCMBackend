@extends('layouts.frontend.app')


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
                                    <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
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
                        <h2>{{ getSection('resources_students')->title }}</h2>
                        <p>{{ getSection('resources_students')->description }}</p>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                {{ getSection('resources_students')->button }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 hvr-backward">
                    <div class="get_latest">
                        <h2>{{ getSection('resources_staff')->title }}</h2>
                        <p>{{ getSection('resources_staff')->description }}</p>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                {{ getSection('resources_staff')->button }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Events -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 hvr-backward">
                    <div class="card card_info">
                        <img src="{{ getSection('medical_scientific_sections')->image }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h1 class="card-title">{{ getSection('medical_scientific_sections')->title }}</h1>
                            <p class="card-text">{{ getSection('medical_scientific_sections')->description }}</p>
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                {{ getSection('medical_scientific_sections')->button }}
                            </button>
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
                                <div class="col-md-5">
                                    <img src="{{ $event->image }}" class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                        <p class="card-text">{{ $event->title }}</p>
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
                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                        {{ getSection('home_events_and_news')->button }}
                    </button>
                </div>
            </div>
            <div class="section__header">
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6 hvr-backward">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1646007086644-e19efeb2b02c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" style="height: 600px" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block w-100">
                                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        Feb 17 2022
                                    </button>
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block w-100">
                                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        Feb 17 2022
                                    </button>
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block w-100">
                                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        Feb 17 2022
                                    </button>
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
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
                            <h1>{{ $statistic->count }}</h1>
                            <span>{{ $statistic->name }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Why -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 hvr-forward">
                <div class="glance">
                    <div class="logo">
                        <a class="logo__img" href="#">
                            <img src="{{ asset('/AFMC-project/assets/images/logo.png') }}" alt="Logo">
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
    <section class="partners section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('home_partners')->title }}</h2>
                        <span>{{ getSection('home_partners')->description }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('icons/check.png') }}" class="check" alt="">
                        {{ getSection('home_partners')->button }}
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="container osama">
                    <section class="logo-carousel slider" data-arrows="true">
                        @foreach($partners as $partner)
                        <div class="slide">
                            <img src="{{ $partner->image }}">
                            <p class="text-center" style="font-size: 20px; color: #012a69; margin-top: 15px" >{{ $partner->name }}</p>
                        </div>
                        @endforeach                        @foreach($partners as $partner)
                        <div class="slide">
                            <img src="{{ $partner->image }}">
                            <p class="text-center" style="font-size: 20px; color: #012a69; margin-top: 15px" >{{ $partner->name }}</p>
                        </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </section>

    {{--  Media  --}}
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('media')->title }}</h2>
                        <span>{{ getSection('media')->description }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('icons/check.png') }}" class="check" alt="">
                        {{ getSection('media')->button }}
                    </button>
                </div>
            </div>
            <div class="row" style="height: 100vh">
                <div class="col-lg-12 my-auto">
                    <!-- player wrapper -->
                    <div class="col-lg-10 mx-auto py-4">
                        <div class="embed__container">
                            <div id="player"></div>
                        </div>
                        <div class="carousel__wrap mt-3">
                            <div class="owl-carousel">

                                @foreach($videos as $video)
                                <div data-video="{{ $video->url }}" class="item video-thumb {{ $loop->first ? 'active' : '' }}">
                                    <img
                                        src="https://img.youtube.com/vi/{{$video->url}}/hqdefault.jpg"
                                    />
                                </div>
                                @endforeach
                            </div>
                        </div>
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
@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel2@2.2.2/dist/owl.carousel.min.js"></script>
    <script>
        var tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '315',
                width: '560',
                videoId: '{{ $videos->first() ? $videos->first()->url : '' }}',
                playerVars: {
                    color: 'white',
                    showinfo: 0,
                    rel: 0,
                    enablejsapi: 1,
                    modestbranding: 1,
                    showinfo: 0,
                    ecver: 2,
                },
                events: {
                    onStateChange: onPlayerStateChange,
                    onReady: function () {
                        $('.ytp-expand-pause-overlay .ytp-pause-overlay').css(
                            'display',
                            'none'
                        );
                        $('.video-thumb').click(function () {
                            console.log('clicked');
                            var $this = $(this);
                            if (!$this.hasClass('active')) {
                                player.loadVideoById($this.attr('data-video'));
                                $('.video-thumb').removeClass('active');
                                $this.addClass('active');
                            }
                        });
                    },
                },
            });
            function onPlayerStateChange(e) {
                console.log('state');
                if (e.data == YT.PlayerState.ENDED) {
                    document.getElementById('playerWrap').classList.add('shown');
                }
            }
            document.getElementById('playerWrap').addEventListener('click', function () {
                player.seekTo(0);
                document.getElementById('playerWrap').classList.remove('shown');
            });
        }

        (function ($) {
            $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
                    loop: false,
                    margin: 10,
                    nav: true,
                    navText: [
                        "<i class='fas fa-chevron-left'></i>",
                        "<i class='fas fa-chevron-right'></i>",
                    ],
                    autoplay: false,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 3,
                        },
                        600: {
                            items: 4,
                        },
                        1000: {
                            items: 5,
                        },
                    },
                });
            });
        })(jQuery);

    </script>
    <script>
        $(document).ready(function() {
            $('.logo-carousel').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>

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
