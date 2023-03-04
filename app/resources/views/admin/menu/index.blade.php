@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Website</h6>
                                <div>
                                    <a href="{{route('admin.addMenu')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                        <i class="fa fa-bars"> Create New Menu</i>
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
                                                <th>Sub Menu</th>
                                                 <th>Created At</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(count($Pagemenus) > 0)
                                        @foreach ($Pagemenus as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{{$sp->name}}</a>
                                                </td>    
                                                <td> 
                                                    @forelse ($sp->subMenu as $sub )
                                                       - {{$sub->name}} &nbsp;  <a  onclick="return confirm('Are you sure')" href="{{route('admin.subMenu.delete',encrypt($sub->id))}}" style="color:red"> <i class="fa fa-times"> </i></a>    &nbsp; 
                                                       <a href="{{route('admin.subMenu.edit', encrypt($sub->id))}}" style="color:green"> <i class="fa fa-edit"></i> </a> <br>
                                                    @empty
                                                        
                                                    @endforelse    
                                                </td>    
                                                  <td>
                                                    <a href="#">{{$sp->created_at}}</a>
                                                </td>
                                                        
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{route('admin.menu.edit', encrypt($sp->id))}}" class="dropdown-item">Edit Menu</a>
                                                            @if($sp->status == 0)
                                                            <a href="{{route('admin.MenuEnable',  encrypt($sp->id))}}" class="dropdown-item " style="color:green">Enable</a>
                                                            @else 
                                                            <a href="{{route('admin.MenuDisable',  encrypt($sp->id))}}" class="dropdown-item" style="color:red">Disable</a>
                                                            @endif
                                                            <a href="{{route('admin.subMenu.Create', encrypt($sp->id))}}" class="dropdown-item">Add Sub Menu</a>
                                                             </div>
                                                    </div>
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