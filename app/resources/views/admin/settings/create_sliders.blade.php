@extends('admin.layouts.admin')
@section('content')

        <div class="container-fluid h-100">

            <div class="row app-block">
                <div class="col-md-3 app-sidebar">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.sliderCreate')}}" class="btn btn-secondary btn-block"  style="color:#fff">
                                Add New Slider
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
                             
                                <form action="{{route('admin.sliderStore')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <li class="list-group-item">
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                                <div class="text-truncate app-list-title">Slider Images</div>
                                                <div class="pl-3 d-flex">
                                                    <span class="text-nowrap text-muted"></span>
                                                    
                                                </div>
                                            </div>
                                            <div class="text-muted d-flex justify-content-between">
                                                <div class="text-truncate small"></div>
                                                <div class="col-md-12">
                                                    <img src="" width="60px">
                                                    <div class="custom-file">
                                                     
                                                        <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                                            <label class="custom-file-label" for="customFile">Select Slider Images</label>
                                                        </div>
                                                        <small id="emailHelp" class="form-text text-muted"> Select Slider Image
                                                        </small>
                                                          @error('image')
                                                        <span class="invalid-feedback"> <small> *</small> </span>
                                                        @enderror
                                                    </div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title"> Slider Title</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Slider Title">
                                                    <small id="emailHelp" class="form-text text-muted">Slider Title
                                                    </small>
                                                    @error('title')
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
                                            <div class="text-truncate app-list-title">Slider Content</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea type="text" maxlength="100" name="content"   placeholder="Enter Slider content" value="{{old('content')}}" class="form-control @error('content') is-invalid @enderror"  >{{old('content')}} </textarea>
                                                    <small id="emailHelp" class="form-text text-muted">Slider Content
                                                    </small>
                                                    @error('content')
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
                                            <div class="text-truncate app-list-title">Select Services</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    
                                                    <select class="form-control" name="link" value="{{old('link')}}">
                                                    @foreach ($services as $service )
                                                    <option value="{{$service->id}}"> {{$service->name}} </option>
                                                    @endforeach
                                                    </select>
                                                    <small id="emailHelp" class="form-text text-muted">Select Service
                                                    </small>
                                                    @error('link')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                      
                                </li>
                                <div style="float:right" class="pr-5 pt-3">
                                    <button type="submit" class="btn btn-primary w-20">Add Slider</button>
                                </div>
                            </form>

                                
                             
                              
                               
                            </ul>
                          
                        </div>
                       
                    </div>
                </div>
                
            </div>

        </div>





@endsection