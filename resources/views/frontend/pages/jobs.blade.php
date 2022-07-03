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
                        <h3>{{ __('frontend.related_pages') }}</h3>
                        <br>
                        @foreach($relatedPages as $linkPage)
                            <h5>
                                <a href="{{ url('pages/'.$linkPage->route) }}" class="dropdown-item double-chevron--before" style="color: black">{{$linkPage->name}}</a>
                            </h5>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8"  style="  border-radius: 25px; padding: 15px; ">

                    @foreach($jobs as $job)
                        <div class="row">
                            <div class="card mb-3 hvr-forward">
                                <div class="card-body">
                                    <a href="{{ url('jobs/' . $job->id) }}">
                                        <h3 class="card-text" style="color: black">{{ $job->title }}</h3>
                                    <p class="card-text">{{ $job->description }}</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection
