
@extends('layouts.app')
@section('contents')
<!--== Start Header Area Wrapper ==-->

<!--== End Header Area Wrapper ==-->

<!-- Start Slider Area Wrapper -->
@include('frontend.minimal.slider')
<!-- End Slider Area Wrapper -->

<!-- Start Call to Action Wrapper -->
{{-- <div class="call-to-action-wrapper bg-brand">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-start">
                <div class="call-action-inner d-lg-flex align-items-center justify-content-between">
                    <div class="call-action-inner-left mb-sm-22 mb-md-32 text-center text-lg-start">
                        
                    </div>
                    <div class="call-action-inner-right btn-group text-center text-lg-end">
                        <a href="contact.html" class="btn btn-dark">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Call to Action Wrapper -->

<section class="service-area-wrapper mt-84 mt-sm-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 mb-36">
                    <h2>Our Services</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row mtm-30">
            @forelse ($services as $service)
            
            <div class="col-sm-6 col-lg-4">
          
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    {{-- <div class="service-item__icon">
                        <i class=""><img  style="border-radius: 6px" src="{{asset('images/'.$service->image)}}" width="50px"></i>
                    </div> --}}

                    <div class="service-item__info">
                        <i class=""><img  style="border-radius: 2px" src="{{asset('images/'.$service->image)}}" width="50px"></i>
                        <h2><a href="{{route('subpages', encrypt($service->id))}}">{{$service->name}}</a></h2>
                        <p>{{$service->title}}</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            
            </div>

                
            @empty
                
            @endforelse
        </div>
    </div>
</section>

<!-- End Service Area Wrapper -->


<!-- Start News & Testimonial Area -->
<section class="testimonial-area-wrapper mt-90 mt-sm-60 bg-img" data-bg="assets/img/testimonial/home1-testi-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 white mb-38">
                    <h2>Testimonial</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonial-content-wrap">
                    <div class="ht-slick-wrapper">
                        <div class="ht-slick-slider slick-row-30"
                            data-slick='{"slidesToShow": 3, "dots": true, "autoplay": true, "arrows": false, "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}, {"breakpoint": 992,"settings":{"slidesToShow": 2}}]}'>
                            <!-- Start Single Testimonial Item -->
                           
                            @forelse ($testimonials as  $testm)
                            <!-- Start Single Testimonial Item -->
                            <div class="testimonial-item">
                                <div class="testimonial-item__quote">
                                    <p>{{substr($testm->content,0,200)}}</p>
                                </div>
                                <div class="testimonial-item__client">
                                    <figure class="testimonial-item__client__thumb">
                                        <img src="{{asset('images/'.$testm->image)}}" alt="Testimonial"/>
                                    </figure>
                                    <div class="testimonial-item__client__info">
                                        <h4>{{$testm->name}}</h4>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse
                           
                            <!-- End Single Testimonial Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
</section>
<!-- End View & Testimonial Area -->

<!-- Start Our Client Area -->
<div class="p-5 p-4">

</div>
<!-- End Our Client Area -->

@endsection
