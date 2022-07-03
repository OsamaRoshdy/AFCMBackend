@extends('layouts.frontendV2.app', ['mainPage' => $page->id])

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $category->name }}</h2>

                <ul>
                    <li>
                        <a href="{{ $page->id == 1 ?  url('/') : url('/' . $page->slug) }}">
                            {{ $page->name }}
                        </a>
                    </li>
                    <li class="active">
                            {{ $category->name }}
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section  class="blog-area pt-20 pb-20">
        <div class="container">
            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-3 col-md-6"  >
                        <div class="single-blog">
                            <a href="{{ url('news/' . $new->id) }}" class="blog-img">
                                <img src="{{ $new->image }}" style="width: 500px!important;height: 350px!important;" alt="Image">
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
