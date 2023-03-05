@extends('layouts.app')
@section('contents')

<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    <h1>Error Page</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="">Error Page</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="service-details-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-0">
                    <div class="service-details-content">
                        
                            <div class=" ht-slick-slider">
                              <center> 
                              <a href="{{route('index')}}"> <figure class="project-thumb-item">
                                    <img src="{{asset('images/error.png')}}" alt="" width="500px">
                                </figure>
                            </a> 
                        </center>
                            
                            </div>

                            
                        </div>

                    </div>

                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection