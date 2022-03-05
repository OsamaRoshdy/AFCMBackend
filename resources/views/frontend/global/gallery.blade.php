@extends('layouts.frontend.app')


@section('content')

    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('gallery_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('gallery_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

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

    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('media')->title }}</h2>
                        <span>{{ getSection('media')->description }}</span>
                    </div>
                </div>
            </div>

            <div class="row gallery-container" id="animated-thumbnails-gallery">
            @foreach($images as $image)
           <div class="col-lg-3" style="    margin-bottom: 20px;" data-src="{{ $image->image }}" data-sub-html="{{ $image->title }}">
           <a data-lg-size="45-45" class="gallery-item" data-src="{{ $image->image }}" data-sub-html="{{ $image->title }}">
           <img alt="{{ $image->title }}" class="img-fluid media_gallery_img" src="{{ $image->image }}" />
                        </a>
           </div>
            @endforeach
            </div>

            <!-- <div class="row">
                <div class="gallery-container" id="animated-thumbnails-gallery">
                    @foreach($images as $image)
                        <a data-lg-size="45-45" class="gallery-item" data-src="{{ $image->image }}" data-sub-html="{{ $image->title }}">
                            <img alt="{{ $image->title }}"  style="width: 300px; height: 300px; margin: 5px"  class="img-responsive" src="{{ $image->image }}" />
                        </a>
                    @endforeach
                </div>
            </div> -->
            <div class="col-12 text-center">
                <div class="pagination">
                    {{ $images->links('vendor.pagination.custom') }}
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

    <script src="{{ asset('lightGallery/dist/lightgallery.min.js') }}"></script>
    <script src="{{ asset('lightGallery/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>



    <script>
        lightGallery(document.getElementById('animated-thumbnails-gallery'), {
            animateThumb: false,
            zoomFromOrigin: false,
            allowMediaOverlap: true,
            toggleThumb: true,
        });
    </script>
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
    <link rel="stylesheet" href="{{ asset('lightGallery/dist/css/lightgallery-bundle.min.css') }}" />
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
