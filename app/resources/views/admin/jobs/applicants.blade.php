@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Job Applicants</h6>
                                <div>
                                    <a href="{{route('admin.addMenu')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                      View All Jobs
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                 <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-bordered">
                                           <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                 <th>Phone</th>
                                                 <th>CV</th>
                                                 <th>Date Applied</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(count($applicants) > 0)
                                        @foreach ($applicants as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{{$sp->name}}</a>
                                                </td>    
                                                <td> 
                                                    {{$sp->email}}  
                                                </td>    
                                                <td> 
                                                    {{$sp->phone}}  
                                                </td> 
                                                <td> 
                                                    <a href="{{asset('doc/'.$sp->cv)}}" target="_blank" class="btn btn-primary btn-sm" style="color:#fff">Download CV </a> 
                                                </td>  
                                                  <td>
                                                    <a href="#">{{$sp->created_at}}</a>
                                                </td>
                                            </tr>
                                              @endforeach
                                              @else 
                                              <tr>
                                              <td> No data available </td>
                                              </tr>
                                              @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
                  </div>

@endsection