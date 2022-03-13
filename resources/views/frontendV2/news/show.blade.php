@extends('layouts.frontendV2.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $new->title }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ $new->title }}</li>
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
                        @if($new->image_name)
                        <div class="blog-details-img">
                            <img src="{{ $new->image }}" alt="Image">
                        </div>
                        @endif

                        <div class="blog-top-content">
                            <div class="blog-content">
                                {!! $new->content !!}
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
                                @foreach($relatedNews as $relatedNew)
                                    <li>
                                    <a href="{{ $relatedNew->id }}">
                                        {{ $relatedNew->title }}
                                        <img src="{{ $relatedNew->image }}" style="width: 80px;" alt="Image">
                                    </a>
                                    <span>{{ $relatedNew->date }}</span>
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
