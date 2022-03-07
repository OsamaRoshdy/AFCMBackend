@extends('layouts.frontend.app')


@section('content')
    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ $event->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('news_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- Post Detils -->
    <div class="post_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="background: #f5f5f5; padding: 15px ; border-radius: 15px" class="new_keywords">
                        <h3>{{ __('frontend.related_events') }}</h3>
                        @foreach($events as $eventNew)
                        <div class="card_latest mb-3 hvr-forward">
                            <div class="card">
                                <a href="{{ $eventNew->slug ?  : $eventNew->id }}">

                                <img src="{{ $eventNew->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span>{{ $eventNew->date }}</span>

                                    <h1 class="card-title" style="font-size: 25px!important;">{{ $eventNew->title }}</h1>
                                    <p class="card-text">{{ $eventNew->description }}</p>

                                </div>
                                </a>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-8">
                    @if($event->image_name != null)
                    <div class="image">
                        <img src="{{ $event->image }}" class="img-fluid" alt="">
                    </div>
                    @endif
                    <h2>{{ $event->title }}</h2>
                    <p>
                        {!! $event->content !!}
                    </p>
                        @if($event->has('images'))
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            @foreach($event->images as $image)
                                                <div class="swiper-slide">
                                                    <img src="{{ $image->image }}" />
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            @foreach($event->images as $image)
                                                <div class="swiper-slide">
                                                <img src="{{ $image->image }}" />
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                            @endif
                </div>
            </div>
        </div>
    </div>



@endsection
