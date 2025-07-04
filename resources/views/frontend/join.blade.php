@extends('layouts.app')
@section('contents')
@if(isset($breadcrums))
<div class="page-header-area" style="background: #ddd url('{{asset('/images/'.$breadcrums->image)}}')  center">
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
                
                <div class="col-lg-10 order-0">
                    <div class="about-discover-content mb-md-22 mb-sm-22">
                        <div class="about-discover-head">
                            <h4>{{$job->title}}</h4>
                          
                        </div>

                        <div class="about-awards-content mt-46 mt-sm-36">
                          

                            <div class="partner-content-wrap mt-50 mt-sm-40">
                                <div class="row mtm-30">
                                    <div class="col-md-12 p-3 mb-3" style="border: 1px solid #b2b2b260; border-radius:10px">
                                          @if(Session::has('message'))
                                        <span class="alert alert-{{Session::get('alert')}}"> {{Session::get('message')}}</span>
                                        @endif
                                        <div class="contact-form pt-3">
                                            <form id="contrm" action="{{route('join.team', $job->id.'-'.$job->title)}}" method="post" enctype="multipart/form-data">
                                              @csrf
                                                <div class="contact-form-content">
                                                    <div class="row mb-20">

                                                        <div class="col-lg-4">
                                                            <div class="form-input-item">
                                                                
                                                                <select name="job_type" > 
                                                                    <option readonly> Select Type of Job </option>
                                                                    <option value = "Executive - Personal Assistant"> Executive/Personal Assistant </option>
                                                                    <option value="Governess Services"> Governess Services </option>
                                                                    <option value="Care Givers"> Care Givers </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-input-item">
                                                                <input type="text" name="name"  value="{{old('name')}}" placeholder="Your Name*" required/>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-lg-4">
                                                            <div class="form-input-item">
                                                                <input type="text" name="phone" value="{{old('phone')}}" placeholder="Your Phone*" required/>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-lg-4">
                                                            <div class="form-input-item">
                                                                <input type="email" name="email" value="{{old('email')}}" placeholder="Your Email*" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-4">
                                                            <div class="form-input-item">
                                                                <input type="file"  name="image"  value="{{old('image')}}" id="image" placeholder="*" required/>
                                                                <label for="image"> Upload CV </label>
                                                            </div>
                                                        </div>
                                                        <p> @php echo captcha_img() @endphp </p>
                                                        <p><input type="text" placeholder="Enter captcha" name="captcha" required>
                                                         </p>
                                                    </div>
                                                    <div class="form-input-item">
                                                        <button type="submit" class="btn btn-primary">Apply for this job</button>
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
            </div>
        </div>
    </div>
</div>

@endsection