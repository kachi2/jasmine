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
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-52 mb-xl-30">
    <div class="blog-page-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-page-content-inner">
                        <div class="row news-grid">

                            @forelse ($blogs as  $blog)
                            <div class="col-sm-12 col-lg-4">
                                <!-- Start Single News Item -->
                                <div class="news-item">
                                    <figure class="news-item__thumb">
                                        <a href="#"><img src="{{asset('/assets/img/news/post-01.jpg')}}" alt="Post"/></a>
                                    </figure>

                                    <div class="news-item__info">
                                        <h2><a href="#">{{$blog->title}}</a></h2>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-clock-o"></i>
                                                {{$blog->created_at->format('d/m/y')}}</a>
                                        </div>
                                        <p style="color:#fff">{!! substr($blog->contents, 0, 500) !!}
                                            </p>
                                        {{-- <a href="{{route('blog.details', encrypt($blog->id))}}" class="btn btn-brand">Read More</a> --}}
                                    </div>
                                </div>
                                <!-- End Single News Item -->
                            </div>

                            @empty
                                
                            @endforelse 

                          

                        </div>

                        {{-- <div class="row">
                            <div class="col-12">
                                <!-- Start Pagination Wrap -->
                                <div class="pagination-wrap mt-60 mt-md-40 mt-sm-40">
                                    <ul class="pagination justify-content-center">
                                        <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                        <li><a href="#" class="current">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End Pagination Wrap -->
                            </div>
                        </div> --}}
                    </div>
                </div>

                {{-- <div class="col-lg-3">
                    <div class="sidebar-area mt-md-52 mt-sm-52">
                        <aside class="sidebar-wrapper">
                          
                            <!-- End Single Sidebar -->

                            <!-- Start Single Sidebar -->
                            <div class="sidebar-item">
                                <h3 class="sidebar-title">Popular Post</h3>
                                <div class="sidebar-body">
                                    <div class="recent-news">
                                        @forelse($popular as $post)
                                        <div class="recent-news-item">
                                            <figure class="recent-news-item__thumb">
                                                <a href="{{route('blog.details', encrypt($post->id))}}"><img src="{{asset('assets/img/news/post-01.jpg')}}"
                                                                                 alt="Recent News"/></a>
                                            </figure>

                                            <div class="recent-news-item__info">
                                                <h3><a href="{{route('blog.details', encrypt($post->id))}}">{{$post->title}}</a></h3>
                                                <div class="news-meta">
                                                    <span class="post-date"><i
                                                            class="fa fa-clock-o"></i>{{$post->created_at->format('d/m/y')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @empty 

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Sidebar -->

                            <!-- Start Single Sidebar -->
            
                            <!-- End Single Sidebar -->
                        </aside>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection