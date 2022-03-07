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

    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 hvr-backward">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($news->take(2) as $index => $new)
                                @if($loop->first)
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" aria-label="Slide 3"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($news->take(2) as $new)
                                @if($loop->first)
                                    <div class="carousel-item active">
                                        <a href="{{ url('news/' . $new->id) }}">
                                            <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block w-100">
                                                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                    {{ $new->date }}
                                                </button>
                                                <div class="slider_body_bg">
                                                    <h5>{{ $new->title }}</h5>
                                                    <p style="font-size: 19px!important;">{{ $new->description }}</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <a href="{{ url('news/' . $new->id) }}">
                                            <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block w-100">
                                                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                    {{ $new->date }}
                                                </button>
                                                <div class="slider_body_bg">
                                                    <h5>{{ $new->title }}</h5>
                                                    <p style="font-size: 19px!important;">{{ $new->description }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">

                    <div class="row align-items-center">
                        @foreach($news->skip(1)->take(4) as $new)
                            <div class="col-md-6">

                                <div class="img_sec">
                                    <div class="overlay">
                                        <a href="{{ url('/news/' . $new->id) }}">
                                            <button type="button" class="btn btn-primary custom_button">
                                                {{ $new->date }}
                                            </button>
                                            <div class="slider_body_bg_small">
                                                <p>{{ $new->description }}</p>
                                            </div>
                                        </a>


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
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news_events">
                        <h2>{{ getSection('home_upcoming_events')->title }}</h2>
                        <p>{{ getSection('home_upcoming_events')->description }}</p>
                        <div class="row events">
                            @foreach($events as $event)
                                <div class="col-md-12 col-lg-6">
                                    <div class="card mb-3 hvr-forward">
                                        <div class="row g-0">
                                            <div class="col-md-2">
                                            <!-- <img src="{{ $event->image }}" class="img-fluid rounded-start" alt=""> -->
                                                <div class="date">
                                                    <p class="text-center">{{$event->date}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="card-body">
                                                    <a href="{{ url('events/' . $event->id) }}">
                                                        <h3 class="card-text" style="color: black">{{ $event->title }}</h3>
                                                    </a>
                                                    <p class="card-text">{{ $event->description }}{{ $event->description }}{{ $event->description }}{{ $event->description }}</p>
                                                    <a href="{{ url('events/' . $event->id) }}" class="learn_more"
                                                            style="display: block;text-align: end;color: #333;font-size: 14px;"
                                                    >
                                                        {{ __('frontend.learn_more') }} <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </a>
                                                </div>
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
    </section>




    <!-- Latest Events & News -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="latest_events_news">
                        <h2>{{ getSection('home_events_and_news')->title }}</h2>
                        <p class="title_p">{{ getSection('home_events_and_news')->description }}</p>
                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-md-3">
                                <div class="card_latest mb-3 hvr-forward">
                                    <div class="card">
                                        <a href="{{ url('news/' . $new->id) }}">
                                            <img src="{{$new->image}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <span>{{$new->date}}</span>
                                                <h5 class="card-title">{{$new->title}}</h5>
                                                <p class="card-text">{{$new->description}}</p>
                                                <a href="" class="learn_more">{{ __('frontend.learn_more') }} <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </a>

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
