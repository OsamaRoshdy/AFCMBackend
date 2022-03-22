@extends('layouts.frontendV2.app')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $media->name }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ $media->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->



    <!-- Start Gallery Area -->
    <div class="gallery-area gallery-popup ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($media->images as $image)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-gallery" >
                        <img src="{{ $image->image }}"  style="height: 250px; width: 100%" alt="Image">

                        <div class="gallery-item-content">
                            <div class="gallery-link">
                                <a href="{{ $image->image }}">
                                    <i class="ri-add-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->

@endsection
