@extends('layouts.frontendV2.app')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ getSection('gallery_header')->title }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ getSection('gallery_header')->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <section class="banner-area bg-2 banner-area-style-two jarallax " data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row align-items-center">
                <div class="section-title">
                    <h2>{{ __('frontend.videos') }}</h2>
                </div>
                <div class="col-lg-12">
                    <div class="ml-15">
                        <div class="row">

                                    @foreach($videos as $video)
                                        <div class="col-lg-4 col-sm-6" style="margin-bottom: 18px">
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
    </section>

    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('frontend.photos') }}</h2>
            </div>
            <div class="row justify-content-center">

                @foreach($mediaGroups as $mediaGroup)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <img src="{{ $mediaGroup->mainImage()->image }}"  style="height: 250px; width: 100%"  alt="Image">
                            <div class="gallery-item-content">
                                <div class="gallery-link">
                                    <a href="{{ url('/media/'.$mediaGroup->slug) }}">
                                        <h3 style="color:white;">{{ $mediaGroup->name }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
@endsection
