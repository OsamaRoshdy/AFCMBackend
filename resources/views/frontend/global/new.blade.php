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
    <!-- Post Detils -->
    <div class="post_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="background: #f5f5f5; padding: 15px" class="new_keywords">
                        <h3>{{ __('frontend.related_news') }}</h3>
                        @foreach($relatedNews as $relatedNew)
                        <div class="card_latest mb-3 hvr-forward">
                            <a href="{{ url('news/' .  $relatedNew->id) }}">
                                <div class="card">
                                    <img src="{{$relatedNew->image}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span>{{ $relatedNew->date }}</span>
                                        <h5 class="card-title">{{$relatedNew->title}}</h5>
                                        <p class="card-text">{{ $relatedNew->description }}</p>
                                        <a href="{{ url('news/' .  $relatedNew->id) }}" class="learn_more">{{__('frontend.learn_more')}} <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    @if($new->image_name)
                    <div class="image">
                        <img src="{{ $new->image }}" class="img-fluid" alt="">
                    </div>
                    @endif
                    <h2>{{ $new->title }}</h2>
                    <p>
                        {!! $new->content !!}
                    </p>
                        @if($new->images)
                    <div class="row">

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            @foreach($new->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ $image->image }}"  class="image"/>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            @foreach($new->images as $image)
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
