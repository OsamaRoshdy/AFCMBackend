@extends('layouts.frontendV2.app')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-26 pb-100" style="background-image: url('http://localhost/AFCMBackend/public/storage/images/blocks/item5.jpg')">
        <div class="container">
            <div class="page-title-content">
                <h2>Search</h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}l">
                            Home
                        </a>
                    </li>

                    <li class="active">Search</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Blog Area -->
    <section  class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-6"  >
                        <div class="single-blog">
                            <a href="{{ url('news/' . $new->id) }}" class="blog-img">
                                <img src="{{ $new->image }}" alt="Image">
                            </a>
                            <div class="blog-content">
                                <ul>
                                    <li>
                                        <i class="ri-calendar-line"></i>
                                        <span>{{ $new->date }}</span>
                                    </li>
                                </ul>

                                <h3>
                                    <a href="{{ url('news/' . $new->id) }}">
                                        {{ $new->title }}
                                    </a>
                                </h3>

                                <p>
                                    {{ $new->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

@endsection
