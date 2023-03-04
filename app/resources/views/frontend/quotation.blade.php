@extends('layouts.app')
@section('contents')

<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    <h1>Request a Service</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="">Request a Service<</a></li>
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
                <div class="col-12">
                    <div class="contact-page-form-area mt-90 mt-sm-60">
                        <div class="section-title-wrap mb-36 mb-sm-26">
                            <h2>Request a Service</h2>
                        </div>

                        <div class="contact-form">
                            <form id="contact-fom" action="{{route('request-service')}}" method="post">
                                @csrf
                                <div class="contact-form-content">
                                    <div class="row mb-20">
                                        <div class="col-lg-3">
                                            <div class="form-input-item">
                                                <input type="text" name="name" placeholder="Your Name*" required/>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-input-item">
                                                <input type="text" name="phone" placeholder="Your Phone"/>
                                            </div>
                                        </div>
                                        <input type="hidden" name="key" value="{{$key}}"> 

                                        <div class="col-lg-3">
                                            <div class="form-input-item">
                                                <input type="email" name="email" placeholder="Your Email*"
                                                       required/>
                                            </div>
                                        </div>
                                      
                                            <div class="col-lg-3">
                                                <div class="form-input-item">
                                                    <input type="text" name="address" placeholder="Your Address*" required/>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="row mb-20">
                                    <div class="col-lg-3">
                                            <div class="form-input-item">
                                                <input type="text" name="city" placeholder="Your City"/>
                                            </div>
                                        </div>
                                        <input type="hidden" name="key" value="{{$key}}"> 

                                        <div class="col-lg-3">
                                            <div class="form-input-item">
                                               
                                                <input type="date" name="start_date" placeholder="Start date of our service*"
                                                       required/>
                                                       Start date of our service
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-input-item">
                                                
                                                <input type="date" name="end_date" placeholder="End date of our service"
                                                       required/>
                                                       End date of our service
                                            </div>
                                        </div>
                                        
                                    </div>


                                    <div class="row mb-20">
                                        Kindly select your current need
                                        @foreach ($services as $service )
                                           
                                        <div class="col-lg-2">
                                            <div class="form-input-item">
                                              <input type="checkbox"  value="{{$service->name}}" name="services[]" placeholder="" /> {{$service->name}} 
                                            </div>
                                        </div>
                                              
                                              @endforeach
                                  
                                        
                                    </div>

                                    <div class="form-input-item">
                                        <textarea name="message" cols="30" rows="8"
                                                  placeholder="Write your Message*" required></textarea>
                                    </div>

                                    <div class="form-input-item">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </div>

                                <!-- Show Message Notification -->
                                @if(Session::has('message'))
                                        <span class="alert alert-{{Session::get('alert')}}"> {{Session::get('message')}}</span>
                                        @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection