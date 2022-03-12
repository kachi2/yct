@extends('admin.layout.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
              <form method="post" enctype="multipart/form-data" action="{{route('staff.assign.officeStore', encrypt($staff->id))}}">
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Assign Office to Staff</h6>
                            <div class="row">
                              <div class="col-md-12">
                                         <div class="form-group">
                                           
                                           <select value="{{old('role')}}" class="form-control @error('role') is-invalid @enderror" name="link"> 
                                          
                                           <option value="1">head of Department(HOD)</option>
                                            <option value="2">School Dean</option>
                                         
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select Office Category
                                            </small>
                                         
                                        </div>           
                              </div>
                               <div class="col-md-12">
                                        <div class="form-group">
                                                   <textarea name="message"></textarea>
                                                        <script>
                                                                CKEDITOR.replace( 'message' );
                                                        </script>
                                            <small id="emailHelp" class="form-text text-muted">write welcome message
                                            </small>
                                            @error('message')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
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
                             <button type="submit" class="btn btn-primary w-100 p-3">Update Staff Office</button>
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

$('input[name="date"]').daterangepicker({
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