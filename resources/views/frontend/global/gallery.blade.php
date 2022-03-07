@extends('layouts.frontend.app')

@section('styles')

    <style>
        .video {
            aspect-ratio: 16 / 9;
            width: 100%;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
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
                <div class="col-md-12 col-lg-8 hvr-backward">
                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/{{ $videos->first()->url }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                            allowfullscreen></iframe>
                    </div>
                    <br>

                </div>
                <div class="col-md-12 col-lg-4">
                    @foreach($videos->skip(1)->take(2) as $video)
                        <div class="video-container">
                            <iframe
                                src="https://www.youtube.com/embed/{{$video->url}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                allowfullscreen></iframe>
                        </div>
                        <br>
                    @endforeach
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
                @foreach($mediaGroups as $mediaGroup)
                    <div class="col-lg-3" style="    margin-bottom: 20px;" data-src="{{ $mediaGroup->mainImage()->image }}" data-sub-html="{{ $mediaGroup->name }}">
                        <a href="{{ url('/media/'.$mediaGroup->slug) }}" data-lg-size="45-45" class="gallery-item" data-src="{{ $mediaGroup->mainImage()->image }}" data-sub-html="{{ $mediaGroup->name }}">
                            <img alt="{{ $mediaGroup->name }}" class="img-fluid media_gallery_img" src="{{ $mediaGroup->mainImage()->image }}" />
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


@endsection
