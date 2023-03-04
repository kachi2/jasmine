@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($jobs as $job )
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">
                                <a href="#" class="link-2">{{$job->title}}</a> 
                              @if($job->status == 1)  <span class="badge badge-success ml-2">Active</span>
                              @else 
                              <span class="badge badge-secondary ml-2">In-active</span>
                              @endif
                            </h5>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('admin.JobsEdit', encrypt($job->id))}}" class="dropdown-item">Edit</a>
                                      <a href="{{route('admin.JobsApplied', encrypt($job->id))}}" class="dropdown-item">View Applicants</a>
                                    @if($job->status == 1) 
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.JobsDisable', encrypt($job->id))}}" class="dropdown-item">Disabled</a>

                                    @else
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.JobsActivate', encrypt($job->id))}}" class="dropdown-item">Activate</a>
                                    @endif
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.JobsDelete', encrypt($job->id))}}" class="dropdown-item text-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                         <div class="text-muted small mt-1 mb-3">{{$job->industry->name}}</div>
                        <div class="text-muted small mt-1 mb-3"></div>
                        <div class="progress mb-2" style="height: 5px;">
                            <div class="progress-bar bg-primary"></div>
                        </div>
                        {{-- <p>{!! substr($blog->contents,0,200) !!}.</p> --}}
                        <div class="row">
                            <div class="col">
                                <div class="text-muted mb-1 small">Location</div>
                                <div>{{$job->location}}</div>
                            </div>
                            <div class="col">
                                <div class="text-muted mb-1 small">Post On</div>
                                <div>{{$job->updated_at->format('d-m-y h:ia')}}</div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="card-body">
                        <div class="small mb-2"></div>
                        <div class="avatar-group">
                            <div>₦{{$job->salary_range}}</div>
                         
                        </div> &nbsp; &nbsp; 
                        <span class=""><i class="fa fa-eye"> </i> {{$job->views > 0? $job->views :'0'}}</span> 
                        <span style="float:right"> Applicants: {{$job->applicants > 0?$job->applicants:'0'  }}</span>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>

      

    </div>

  
@endsection