@extends('layouts.app')
@section('contents')
@if(isset($breadcrums))

<div class="page-header-area" style="background: #ddd url('{{asset('/images/'.$breadcrums->image)}}') no-repeat center">
   @else 
   <div class="page-header-area" style="background: #ddd url('{{asset('/images')}}') no-repeat center">
   @endif
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    {{-- <h1>Blog Details</h1> --}}
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                {{-- <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="">Blog Details</a></li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
</div>
<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="about-us-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-1 ">
                    <!-- Start Service Details Sidebar -->
                    <div class="service-details-sidebar mtm-40 mtm-sm-2 mtm-md-2">
                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single" style="background: #fff">
                            <h3 class="sidebar-heading">Job Feeds</h3>
                            <hr>
                            <div class="sidebar-body">
                                <div class="partner-content-wrap mt-50 mt-sm-40">
                                    <div class="row mtm-30">
                                        @forelse ($jobs as $job )
                                        <div class="col-md-12 p-3 mb-3" style="border: 1px solid #b2b2b260; border-radius:10px">
                                            <div class="discover-item">
                                                <div class="discover-item__thumb">
                                                    <img src="{{asset('/assets/img/partner/partner-1.jpg')}}" alt="Discover"/>
                                                </div>
                                                <div class="discover-item__info">
                                                    <span style="float:right"> Posted: {{$job->created_at->diffForHumans()}}</span>
                                                    <h6 style="color:#0099ff">{{$job->title}}</h6> 
                                                    <p style="color:#0099ff">{{$job->company}}</p>
                                                    <span  class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->location}}</span>   <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->job_type}}</span>   <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> ₦{{$job->salary_range}}</span> <br>
                                                   <span> Job Function: {{$job->industry->name}}</span> <br>
                                                   <hr>
                                                   <span> {!! substr($job->job_details,0,200) !!} <br> <a href="{{route('job-details', $job->id.'-'.$job->title)}}" class="badge bg-primary"> Apply for this Job</a></span>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->

                    </div>
                </div>

                <div class="col-lg-7 order-0">
                    <div class="about-discover-content mb-md-22 mb-sm-22">
                        <div class="about-discover-head">
                            <h4>Join the Team</h4>
                          
                        </div>

                        <div class="about-awards-content mt-46 mt-sm-36">
                            <div class="partner-content-wrap mt-50 mt-sm-40">
                                <div class="row mtm-30">
                                    <div class="col-md-12 p-3 mb-3" style="border: 1px solid #b2b2b260; border-radius:10px">
                                        <div class="discover-item">
                                            <div class="discover-item__thumb">
                                                <img src="{{asset('/assets/logo.png')}}" alt="Discover"/>
                                            </div>
                                            <div class="discover-item__info">
                                               
                                               <hr>
                                               <p style="text-align: justify"> {!! $team->job_details !!} </p> <br> 
                                                <br> 
                                            <p>
                                             <a href="{{route('joinJasmine',$team->id.'-'.$team->title)}}" class="btn-primary btn-lg"> Join our Team</a></span>
                                            
                                            </p>
                                            <div class="p-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                 

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection