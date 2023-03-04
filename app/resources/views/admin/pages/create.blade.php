@extends('admin.layouts.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action='{{route('admin.PagesStore')}}' method='post', enctype='multipart/form-data'>
                @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Create Product</h6>
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                      
                                      <select value="{{old('menu_id')}}" class="form-control @error('menu_id') is-invalid @enderror" name="menu_id" id="menu">  
                                     <option> Select Page Menu </option>
                                      @foreach ($Pagesmenu as $mne )
                                           <option value="{{$mne->id}}"> {{$mne->name}} </option>
                                      @endforeach
                                      </select>
                                      <small id="emailHelp" class="form-text text-muted">Select Page Menu
                                       </small>
                                       @error('menu_id')
                                       <span class="invalid-feedback"> <small> *</small> </span>
                                       @enderror
                                   </div>           
                                 </div>

                                 <div class="col-md-12" hidden id="subMenu_div">
                                  <div class="form-group">
                                    
                                    <select value="{{old('subMenu_id')}}" class="form-control @error('subMenu_id') is-invalid @enderror" name="subMenu_id" id="subMenu_id">  
                                   <option> Select Page Sub Menu </option>
                                         <option value="">  </option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">Select Page Sub Menu
                                     </small>
                                     @error('subMenu_id')
                                     <span class="invalid-feedback"> <small> *</small> </span>
                                     @enderror
                                 </div>           
                               </div>

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Page Title">
                                            <small id="emailHelp" class="form-text text-muted">Enter page title
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                        
                                         <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea id="summernote" class="@error('contents') is-invalid @enderror" name="contents">{{old('contents')}}</textarea>
                                     <small id="emailHelp" class="form-text text-muted">Page Contents
                                            </small>
                                            @error('contents')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                    </div>


                                         </div>


                                          <div class="col-md-6 pt-4">
                                              <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                                <label class="custom-file-label" for="customFile">Choose Page Cover Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose a cover image 
                                            </small>
                                              @error('image')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
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
                             <button type="submit" class="btn btn-primary p-3">Add Page</button>
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


let menu = {!! json_encode($Pagesmenu) !!}
  $('#menu').on('change', function(){
    var optn = "";
    $.each(menu, function(key, value){
      if(value.id == document.getElementById('menu').value){
    //  alert(document.getElementById('menu').value)
     if(value.has_child == 1){
      document.getElementById('subMenu_div').hidden = false;
      $.ajaxSetup({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
      $.ajax({
           url: "{{route('admin.page.getSubmenu', "")}}/" + value.id,
           type: "get",
           data: {
            id: value.id 
           },
           dataType: "json",
           success:function(response){
            $.each(response, function(key, menus) {
            console.log(menus.name);
             optn += '<option value="' + menus.id  + '">'+ menus.name +"</option>";
            });
            optns = "<option>"+ 'Select Sub Menu' +"</option>";
               $('#subMenu_id').empty(optns);
               $('#subMenu_id').append(optns);
               $('#subMenu_id').append(optn);
               

           }

      })


     }else{
      document.getElementById('subMenu_div').hidden = true;
     }
    }
  });
    

  })



$('.clockpicker-example').clockpicker({
    autoclose: true
});

$('input[name="date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 8000,
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