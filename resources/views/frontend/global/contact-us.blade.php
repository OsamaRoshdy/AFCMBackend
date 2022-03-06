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
                                    <form method="post" action="contact-us">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control bg-hover-danger" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                            </br>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" name="email" rows="6" required></textarea>
                                            </br>
                                        </div>
                                        <div class="mx-auto">
                                            <button id="contact" type="submit" class="btn text-right"  style="background: #d70000; color: white">Submit</button></div>
                                    </form>
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
