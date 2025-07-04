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
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="service-details-page-wrap">
        <div class="container">
            <div class="row">
               

                <div class="col-lg-9 order-0">
                    <div class="service-details-content">
                        
                            <div class="project-details-thumb ht-slick-slider" data-slick='{"arrows": false, "dots": true}'>
                              
                                <figure class="project-thumb-item">
                                    <img src="{{asset('images/'.$pages->metas)}}" style="max-width:250px"  alt="Project"/>
                                </figure>
                            </div>
                            <div class="service-details-info">
                            <h2>{{$pages->title}}</h2>
                            <p>{!! $pages->contents !!}</p>

                            
                        </div>

                    </div>

                </div>

                <div class="col-lg-3  order-lg-0">
                    <aside class="sidebar-wrapper">
                        <!-- Start Single Sidebar -->
                        <div class="sidebar-item">
                            <h3 class="sidebar-title">{{$pages->menu?$pages->Menu->name:$pages->subMenu->Menu->name}}</h3>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    @foreach ($sidebar as $menu )
                                    <li><a href="{{route('subpages', encrypt($menu->id))}}">{{$menu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection