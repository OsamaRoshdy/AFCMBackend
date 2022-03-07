@extends('layouts.frontend.app')


@section('content')
    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ $page->title }}</h1>
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
                    <div style="background: #e1e1e1;  border-radius: 25px; padding: 15px; " class="new_keywords">
                        <h3>{{ __('related_pages') }}</h3>
                        <br>
                        @foreach($relatedPages as $linkPage)
                            <h5>
                                <a href="{{ url('pages/'.$linkPage->route) }}" class="dropdown-item double-chevron--before" style="color: black">{{$linkPage->name}}</a>
                            </h5>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8"  style="background: #e1e1e1;  border-radius: 25px; padding: 15px; ">

                    {!! $page->content_ar !!}
                    <div class="row" style="border-radius: 25px;">
                        <div class="col-12 hvr-backward">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" style="border-radius: 25px;">
                                        <img src="https://images.unsplash.com/photo-1646007086644-e19efeb2b02c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" style="height: 600px;border-radius: 25px;" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px;border-radius: 25px;" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px;border-radius: 25px;" class="d-block w-100" alt="...">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
