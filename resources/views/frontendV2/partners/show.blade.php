@extends('layouts.frontendV2.app')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $partner->name }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ $partner->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-content mr-15">

                        <div class="blog-top-content">
                            <div class="blog-content">
                                <h1>{{ $partner->name }}</h1>
                                {!! $partner->description !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
