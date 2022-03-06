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
