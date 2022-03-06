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

    <!-- Latest Events-->
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('home_events_and_news')->title }}</h2>
                        <span>{{ getSection('home_events_and_news')->description }}</span>
                    </div>
                </div>

            </div>
            <div class="section__header">
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6 hvr-backward">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($latestNews->take(3) as $index => $new)
                                @if($loop->first)
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" aria-label="Slide 3"></button>
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($latestNews->take(3) as $new)
                                @if($loop->first)
                                    <div class="carousel-item active">
                                        <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                {{ $new->date }}
                                            </button>
                                            <h5>{{ $new->title }}</h5>
                                            <p>{{ $new->description }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ $new->image }}" style="height: 600px" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                                {{ $new->date }}
                                            </button>
                                            <h5>{{ $new->title }}</h5>
                                            <p>{{ $new->description }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row align-items-center">
                        @foreach($latestNews->skip(3)->take(4) as $new)
                            <div class="col-md-6 hvr-forward">
                                <div class="img_sec">
                                    <div class="overlay">
                                        <button type="button" class="btn btn-primary custom_button">
                                            {{ $new->date }}
                                        </button>
                                        <p>{{ $new->description }}</p>
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

    <!-- Upcoming Events -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news_events">

                        <h2>Upcoming Events</h2>
                        <p>Learn all about our comming events, conferences and more</p>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card mb-3 hvr-forward">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="images/image.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Latest Events & News -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="latest_events_news">

                        <h2>Latest Events & News</h2>
                        <p class="title_p">Learn all about our comming events, conferences and more</p>
                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-md-3">
                                <div class="card_latest mb-3 hvr-forward">
                                    <div class="card">
                                        <img src="{{$new->image}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <span>{{$new->date}}</span>
                                            <h5 class="card-title">{{$new->title}}</h5>
                                            <p class="card-text">{{$new->description}}</p>
                                            <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </a>
                                        </div>
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
