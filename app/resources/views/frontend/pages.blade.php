@extends('layouts.app')
@section('contents')
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    <h1>{{$breadcrums }}</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="">{{$breadcrums }}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="our-services-page-content">
        <div class="container">
            <div class="row mtm-30">

                @foreach ($pages as  $page)
                <div class="col-sm-6 col-lg-4">
                    <!-- Start Single Service Item -->
                    <div class="service-item">
                        <figure class="service-item__thumb">
                            <a href="{{route('subpages', encrypt($page->id))}}"><img src="{{asset('images/'.$page->image)}}" alt="Service"/></a>
                            <figcaption class="service-item__thumb-hvr">
                                <a href="{{route('subpages', encrypt($page->id))}}" class="read-more"></a>
                                <a href="{{route('subpages', encrypt($page->id))}}" class="btn-link-icon" target="_blank"><i
                                        class="fa fa-external-link"></i></a>
                            </figcaption>
                        </figure>

                        <div class="service-item__info">
                            <h2><a href="#">{{$page->name}}</a></h2>
                            <p>{{$page->title}}</p>
                            <a href="{{route('subpages', encrypt($page->id))}}" class="btn-read-more">Read More</a>
                        </div>
                    </div>
                    <!-- End Single Service Item -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection