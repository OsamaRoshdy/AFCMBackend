@extends('layouts.frontendV2.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->title }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content mr-15">
                        <div class="blog-top-content">
                            <div class="blog-content">
                                {!! $page->content !!}
                                @if($page->images->count())
                                    <br>
                                    <div class="lightSliderHome" >
                                        <ul id="lightSlider">
                                            @foreach($new->images as $image)
                                                <li data-thumb="{{ $image->image }}">
                                                    <img src="{{ $image->image }}"/>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget-sidebar ml-15">
                        <div class="sidebar-widget search">
                            <form class="search-form">
                                <input class="form-control" name="search" placeholder="{{ __('frontend.search') }}" type="text">
                                <button class="search-button" type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>


                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">{{ __('frontend.related_news') }}</h3>

                            <ul>
                                @foreach($relatedPages as $relatedPage)
                                    <li>
                                        <a href="{{ $relatedPage->id }}">
                                            {{ $relatedPage->name }}
                                            <img src="{{ asset('frontendV2/assets/images/logo.png') }}" style="width: 40px;" alt="Image">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
