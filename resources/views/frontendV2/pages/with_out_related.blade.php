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

                    @if($link->parent)
                        @if($link->parent->parent)
                            <li class="active">
                                <a>
                                    {{$link->parent->parent->name}}
                                </a>
                            </li>
                        @endif

                        <li class="active">
                            <a>
                                {{$link->parent->name}}
                            </a>
                        </li>

                    @endif
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
                        @if($page->image_name)
                            <div class="blog-details-img">
                                <img src="{{ $page->image }}" alt="Image">
                            </div>
                        @endif
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

            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
