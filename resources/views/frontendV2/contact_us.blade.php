@extends('layouts.frontendV2.app')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-26 pb-100" style="background-image: url('http://localhost/AFCMBackend/public/storage/images/blocks/item5.jpg')">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Contact Area -->
    <section class="contact-area ptb-70">
        <div class="container">
                {{ Form::open(['route' => 'contact.store']) }}
                    <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                        <br>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            <span>Send message</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                {{ Form::close() }}
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3371.4233774434806!2d31.304141!3d30.084518000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55d2a4e47d79ee58!2sArmed%20Forces%20College%20of%20Medicine!5e1!3m2!1sen!2seg!4v1626552837125!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2>Get in touch</h2>

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-2-fill"></i>
                                <span>Address</span>
                                Ihsan Abd El Quddus Street (from Al Khalifa Al Mumin Street), Sirah, Egypt.
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <span>Email</span>
                                <a href="mailto:Afcm@Mod.Gov.Eg">Afcm@Mod.Gov.Eg</a>
                            </li>
                            <li>
                                <i class="ri-phone-fill"></i>
                                <span>Phone</span>
                                <a href="tel:02-24032839">02-24032839</a>
                            </li>
                        </ul>

                        <h3>Follow Us</h3>

                        <ul class="social-link">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

@endsection
