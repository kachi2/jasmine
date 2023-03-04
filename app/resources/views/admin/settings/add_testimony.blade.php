@extends('admin.layouts.admin')
@section('content')

        <div class="container-fluid h-100">

            <div class="row app-block">
                <div class="col-md-3 app-sidebar">
                    <div class="card">
                        <div class="card-body">
                           Website Setup
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
                             
                                <form action="{{route('admin.settings.storeTestimonial')}}" method="post">
                                    @csrf
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Name</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name"  value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Enter Name">
                                                    <small id="emailHelp" class="form-text text-muted">Name of client
                                                    </small>
                                                    @error('name')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Testimonial</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea type="text" name="content"  value="{{old('content')}}" class="form-control @error('content') is-invalid @enderror" >{{old('content')}} </textarea>
                                                    <small id="emailHelp" class="form-text text-muted">Testimonial
                                                    </small>
                                                    @error('content')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                                      
                                </li>
                                <div style="float:right" class="pr-5 pt-3">

                                    <button type="submit" class="btn btn-primary w-20">Add Testimonial</button>
                                </div>
                            </form>

                                
                             
                              
                               
                            </ul>
                          
                        </div>
                       
                    </div>
                </div>
                
            </div>

        </div>





@endsection