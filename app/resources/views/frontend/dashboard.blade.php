
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
                    <div class="service-item__icon">
                        <i class=""><img  style="border-radius: 6px" src="{{asset('images/'.$service->image)}}" width="50px"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="{{route('subpages', encrypt($service->id))}}">{{$service->name}}</a></h2>
                        <p>{{$service->title}}.</p>
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
<section class="news-testimonial-area mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6">
                <div class="news-content-wrapper mb-md-80 mb-sm-50">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Our Blogs</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Start News Slider Arrows -->
                        <div class="ht-slick-arrows">
                            <button id="news-prev"><i class="fa fa-angle-left"></i></button>
                            <button id="news-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                        <!-- End News Slider Arrows -->
                    </div>

                    <!-- Start Recent News Content -->
                    <div class="news-content-inner mt-30">
                        <div class="ht-slick-wrapper">
                            <div class="ht-slick-slider slick-row-30"
                                 data-slick='{"slidesToShow": 1, "prevArrow":"#news-prev", "nextArrow":"#news-next", "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                                <!-- Start Single News Item -->
                                
                                @forelse ($blogs as $blog )
                               
                                <div class="news-item hvr-dir-item">
                                    <figure class="news-item__thumb">
                                        <a href="#"><img src="{{asset('images/'.$blog->image)}}" alt="Post"/></a>
                                        <figcaption class="news-item__thumb-hvr hvr-dir">
                                            <a href="{{asset('images/'.$blog->image)}}" class=""></a>
                                        </figcaption>
                                    </figure>

                                    <div class="news-item__info">
                                        <h2><a href="blog-details.html">{{$blog->title}}</a></h2>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-clock-o"></i> {{$blog->created_at->format('d/m/y')}}</a>
                                        </div>
                                        <p>{!! substr($blog->contents, 0, 400) !!}</p>
                                        <a href="{{route('pages',encrypt(8))}}" class="btn btn-brand">ReadMore</a>
                                    </div>
                                </div>    
                                @empty
                                    
                                @endforelse
                               
                                <!-- End Single News Item -->
                            </div>
                        </div>
                    </div>
                    <!-- End Recent News Content -->
                </div>
            </div>

            <div class="col-lg-5 col-xl-6">
                <div class="section-title-wrap mb-38">
                    <h2>Testimonial</h2>
                </div>

                <div class="testimonial-content-wrap">
                    <div class="ht-slick-slider" data-slick='{"slidesToShow": 1, "autoplay": false, "arrows": true}'>
                        <!-- Start Single Testimonial Item -->
                        @forelse ($testimonials as  $testm)
                        <div class="testimonial-item testimonial-item--3">
                            <div class="testimonial-item__quote">
                                <p style="color:#000; background:#595656" >{!! $testm->content !!}</p>
                            </div>
                            <div class="testimonial-item__client">
                                <figure class="testimonial-item__client__thumb">
                                    <img src="{{asset('images/'.$testm->image)}}" alt=""/>
                                </figure>
                                <div class="testimonial-item__client__info">
                                    <h4>{{$testm->name}}</h4>
                                </div>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End View & Testimonial Area -->

<!-- Start Our Client Area -->
<section class="our-client-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-wrap mb-44 mb-sm-30">
                    <!-- Start Section Title -->
                    {{-- <div class="section-title-wrap">
                        <h2>Our Clients</h2>
                    </div> --}}
                    <!-- End Section Title -->

                    <!-- Start News Slider Arrows -->
                    {{-- <div class="ht-slick-arrows ht-slick-arrows--two">
                        <button id="client-prev"><i class="fa fa-angle-left"></i></button>
                        <button id="client-next"><i class="fa fa-angle-right"></i></button>
                    </div> --}}
                    <!-- End News Slider Arrows -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-2">
                <!-- Start Our Clients Content -->
                {{-- <div class="our-client-content"> --}}
                    {{-- <div class="ht-slick-slider slick-row-20"
                         data-slick='{"slidesToShow": 6, "autoplay": true, "prevArrow":"#client-prev", "nextArrow":"#client-next", "responsive":[{"breakpoint": 481,"settings":{"slidesToShow": 2}}, {"breakpoint": 801,"settings":{"slidesToShow": 3}}, {"breakpoint": 992,"settings":{"slidesToShow": 4}}]}'>
                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/01.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/02.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/03.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/04.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/05.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/06.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/01.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/02.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->
                    </div> --}}
                {{-- </div> --}}
                <!-- End Our Clients Content -->
            </div>
        </div>
    </div>
</section>
<!-- End Our Client Area -->

@endsection
