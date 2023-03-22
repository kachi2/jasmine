@extends('admin.layouts.admin')
@section('content')
        <div class="container-fluid h-100">
            <div class="row app-block">
                <div class="col-md-3 app-sidebar">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.settings.createTestimonial')}}" class="badge badge-info p-2"  style="color:#fff">
                                Add New Testimonial
                            </a>
                        </div>
                        <div class="app-sidebar-menu">
                            @include('admin.settings.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-md-9 app-content">
                    <div class="app-content-overlay"></div>
                    <div class="card card-body app-content-body">
                        <div class="app-lists">
                            <ul class="list-group list-group-flush">
                              @forelse ($testimony as $tt )
                              <li class="list-group-item">
                                <div class="flex-grow-1 min-width-0">
                                    <div class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="text-truncate app-list-title">{{$tt->name}}</div>
                                        <div class="pl-3 d-flex">
                                            <span class="text-nowrap text-muted"></span>
                                            <div class="dropdown ml-3">
                                                <a href="#" class="btn btn-outline-light btn-sm" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{route('admin.settings.editTestimonial', encrypt($tt->id))}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('admin.settings.deleteTestimonial', encrypt($tt->id))}}">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-muted d-flex justify-content-between">
                                        <div class="text-truncate small"></div>
                                        <div class="col-md-12">
                                            <p>{!! $tt->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>  
                                @empty 
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection