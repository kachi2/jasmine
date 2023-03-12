@extends('layouts.app')
@section('contents')

<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    <h1>Contact Us</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="contact-page-area-wrapper">
        <div class="container">
            <div class="row">
                

                <div class="col-lg-6 order-2 order-lg-2">
                    <div class="contact-map mt-md-50 mt-sm-30">
                        <div id="map_content" class="h-100" data-lat="6.5095" data-lng="3.3711"
                             data-zoom="12"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 order-1 order-lg-1">
                    <div class="section-title-wrap mb-24 mtm-8">
                        <h2>Get In Touch</h2>
                    </div>
                    <div class="office-info">
                        <p><i class="fa fa-map-marker"></i> {{$settings->address}}</p>
                        <p><i class="fa fa-phone"></i> {{$settings->site_phone}}</p>
                        <p><i class="fa fa-envelope-o"></i> {{$settings->site_email}}</p>
                        <p><i class="fa fa-clock-o"></i> {{$settings->opening_hours}}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="contact-page-form-area mt-90 mt-sm-60">
                        <div class="section-title-wrap mb-36 mb-sm-26">
                            <h2>Get In Touch</h2>
                        </div>

                        <div class="contact-form">
                            <form id="contact-form" action="{{route('contact-email')}}" method="post">
                                @csrf
                                <div class="contact-form-content">
                                    <div class="row mb-20">
                                        <div class="col-lg-4">
                                            <div class="form-input-item">
                                                <input type="text" name="name" placeholder="Your Name*" required/>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-input-item">
                                                <input type="text" name="phone" placeholder="Your Phone"/>
                                            </div>
                                        </div>
                                        <input type="hidden" name="key" value="{{$key}}"> 

                                        <div class="col-lg-4">
                                            <div class="form-input-item">
                                                <input type="email" name="email" placeholder="Your Email*"
                                                       required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-input-item">
                                        <textarea name="message" id="con_message" cols="30" rows="8"
                                                  placeholder="Write your Message*" required></textarea>
                                    </div>

                                    <p> @php echo captcha_img() @endphp </p>
                                    <p><input type="text" placeholder="Enter captcha" name="captcha">
                                     </p>

                                    <div class="form-input-item">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </div>

                                <!-- Show Message Notification -->
                                <div class="form-message mt-1"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection