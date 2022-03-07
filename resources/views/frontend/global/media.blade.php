@extends('layouts.frontend.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('frontend/plugins/magnific/dist/magnific-popup.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('frontend/plugins/magnific/dist/jquery.magnific-popup.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.fluffychicken').magnificPopup({
                type: 'image',
                gallery:{enabled:true},
                removalDelay: 300,       // Delay in milliseconds before popup is removed
                mainClass: 'mfp-fade'   // Class that is added to popup wrapper and background
            });
        });
    </script>
@endsection

@section('content')

    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ $media->name }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('gallery_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <section class="section section--padding section--bg">
        <div class="container">

            <div class="parent-container row">
                @foreach($media->images as $image)
                    <div class="col-lg-3" style=" margin-bottom: 20px;" data-src="{{ $image->image }}" data-sub-html="{{ $image->title }}">
                        <a href="{{ $image->image }}" data-lg-size="45-45"   class="gallery-item fluffychicken" title="{{ $media->name }}">
                            <img src="{{ $image->image }}" class="img-fluid media_gallery_img" style="border-radius: 25px;" alt="remember your alt tag" />
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


@endsection


