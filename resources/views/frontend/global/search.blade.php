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
                <div class="col-12">
                    <div class="news_events">
                        <h2>{{ __('frontend.events') }}</h2>
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
                        <h2>{{ __('frontend.news') }}</h2>
                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-md-6 col-lg-4 col-xl-3">
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

            </div>
        </div>
    </div>

@endsection
