@extends('admin.layouts.admin')
@section('content')

        <!-- begin::page-header -->
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
               <form action='{{route('admin.categoryStore')}}' method='post', enctype='multipart/form-data'>
              @csrf
              <div class="card">
                        <div class="card-body">
                          <span style="float:right">  <a href="{{route('admin.category.index')}}"> View All Industryies</a></span>
                            <h6 class="card-title">Add New Job Industry</h6>
                          
                            <div class="row">
                                     <div class="col-md-12">
                                       <div class="form-group">
                                      <input type="text" name="name" placeholder="Enter Industry Name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" >
                                            <small id="emailHelp" class="form-text text-muted">Enter Industry Name
                                            </small>
                                            @error('name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                         </div>        
                            </div> 
                        </div>    
                    </div>
                         <div class="card">
                        <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-4">
                        <div class="p-5">
                             <button type="submit" class=" btn btn-primary w-10 p-3 ">Add Industry</button>
                           </div>
                           </div>
                           </div>
                        </div>
                        </div>
                      </form>

    </div>
                        </div>
                    </div>
                   

@endsection
@section('script')
<script>

$('.clockpicker-example').clockpicker({
    autoclose: true
});

$('input[name="audition_date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection