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
