@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($pages as $page )
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">
                                <a href="#" class="link-2">{{$page->title}}</a> 
                              @if($page->status == 1)  <span class="badge badge-success ml-2">Active</span>
                              @else 
                              <span class="badge badge-secondary ml-2">In-active</span>
                              @endif
                            </h5>

                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="{{route('admin.PagesEdit', encrypt($page->id))}}" class="dropdown-item">Edit</a>
                                    @if($page->status == 1) 
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.PagesDisable', encrypt($page->id))}}" class="dropdown-item">Disabled</a>

                                    @else
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.PagesActivate', encrypt($page->id))}}" class="dropdown-item">Activate</a>
                                    @endif
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.PagesDelete', encrypt($page->id))}}" class="dropdown-item text-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted small mt-1 mb-3"></div>
                        <div class="progress mb-2" style="height: 5px;">
                            <div class="progress-bar bg-primary"></div>
                            
                        </div>
                       <span style="font-weight:bold" class="p-2"> {{$page->Menu? $page->Menu->name : $page->subMenu->name }}</span>
                     
                        <p>{!! substr($page->contents,0,200) !!}.</p>
                        <div class="row">
                            <div class="col">
                                <div class="text-muted mb-1 small">Created</div>
                                <div>{{$page->created_at->format('d-m-y h:ia')}}</div>
                            </div>
                            <div class="col">
                                <div class="text-muted mb-1 small">Last Updated</div>
                                <div>{{$page->updated_at->format('d-m-y h:ia')}}</div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="card-body">
                        <div class="small mb-2"></div>
                        <div class="avatar-group">
                            <figure class="avatar avatar-sm">
                                <img src="{{asset('images/'.$page->metas)}}" >
                            </figure>
                           
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>

      

    </div>

  
@endsection