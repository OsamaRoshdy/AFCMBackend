@extends('layouts.frontend.app', ['mainPage' => 4])

@section('content')
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('academic_staff_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('academic_staff_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="data-block">
                <div class="col row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-header text-white" style="background: #d70000">
                                <h3><i class="fa fa-envelope"></i> Contact us</h3>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    {{ Form::open(['route' => 'contact_us.store']) }}
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            {{ Form::text('name', old('name'), ['class' => 'form-control bg-hover-danger']) }}
                                            @if ($errors->has("name"))
                                                <span class="form-text text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </br>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            {{ Form::email('email', old('email'), ['class' => 'form-control bg-hover-danger']) }}
                                            @if ($errors->has("email"))
                                                <span class="form-text text-danger">{{$errors->first('email')}}</span>
                                            @endif
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            {{ Form::textarea('message', old('message'), ['class' => 'form-control bg-hover-danger']) }}
                                            @if ($errors->has("message"))
                                                <span class="form-text text-danger">{{$errors->first('message')}}</span>
                                                @endif
                                            </br>
                                        </div>
                                        <div class="mx-auto">
                                            <button id="contact" type="submit" class="btn text-right"  style="background: #d70000; color: white">Submit</button></div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>

                </div>
                <br>
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3371.4233774434806!2d31.304141!3d30.084518000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55d2a4e47d79ee58!2sArmed%20Forces%20College%20of%20Medicine!5e1!3m2!1sen!2seg!4v1626552837125!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
