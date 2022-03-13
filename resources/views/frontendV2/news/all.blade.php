@extends('layouts.frontendV2.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ getSection('news_header')->title }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ getSection('news_header')->title }}</li>
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
                    <div class="col-lg-3 col-md-6"  >
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
                    <div class="pagination-area">
                        {{ $news->links('vendor.pagination.custom') }}
                    </div>

            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
