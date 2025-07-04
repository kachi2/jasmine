@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-7">
            <div class="card bg-secondary-gradient">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h6 class="card-title mb-3">Welcome back Admin!</h6>
                            <p>Manage your website easily.</p>
                            <ul class="mb-3">
                                <li>Post Blogs and manage post</li>
                                <li>Manage jobs and applicants</li>
                            </ul>
                            
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('images/files.svg')}}" alt="..." class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        <span>Admin Last Login</span>
                        
                    </h6>
                   
                    <div class="table-responsive mt-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                            <tr>
                                <th class="wd-40">Location</th>
                                <th class="wd-25 text-center">Login Ip</th>
                                <th class="wd-35 text-center">Date Login</th>
                                <th class="wd-35"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($logins as $login)
                            <tr>
                                <td> @php $details = json_decode(file_get_contents("http://ipinfo.io/$login->login_ip/json"));
                                      echo $details->city.", ".$details->country;
                                    @endphp
                                    </td>
                                <td class="text-center">{{$login->login_ip}}</td>
                                <td class="text-center text-success">{{$login->created_at}}</td>
                            </tr> 
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Recent Job Applicants</h6>
                    <ul class="list-group list-group-flush">
                        @forelse ($applicants as $appl)
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            
                            <div>
                                <h6 class="m-b-0">{{$appl->name}}</h6>
                                <small class="text-muted">{{$appl->email}}</small> <br>
                                <small class="text-muted">{{$appl->CientJobs->title}}</small>
                            </div>
                            <div class="ml-auto">
                                <span class="badge  mr-2 d-sm-inline d-none">{{$appl->created_at->diffForHumans()}}</span>
                                
                            </div>
                        </li> 
                        @empty
                            
                        @endforelse
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="card-title mb-3">Jobs Posted</h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                        <h2 class="mb-0 mr-2 font-weight-bold">{{count($jobs)}}</h2>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">{{count($applicant)}}</span> Applicants
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="avatar avatar-lg">
                                        <div class="avatar-title bg-success-bright text-success rounded-circle">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        
                    </div>
                    
                    
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="card-title mb-3">Blogs Posted</h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                        <h2 class="mb-0 mr-2 font-weight-bold">{{count($blogs)}}</h2>
                                        <p class="small text-muted mb-0 line-height-20">
                                            {{-- <span class="text-danger">- 2%</span> than last week --}}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="avatar avatar-lg">
                                        <div class="avatar-title bg-warning-bright text-warning rounded-circle">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>

         <div class="mb-5 pb-3"></div>

        </div>
    </div>
</div>
@endsection