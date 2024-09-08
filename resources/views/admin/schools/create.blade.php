@extends('admin.layout.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
              <form method="post" enctype="multipart/form-data" action="{{route('admin.school.store')}}">
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Create School</h6>
                            <div class="row">
                                      <div class="col-md-12">
                                         <div class="form-group">
                                           
                                           <select value="{{old('school')}}" class="form-control @error('school') is-invalid @enderror" name="school"> 
                                          <option> Select School  </option>
                                           @foreach ($menus as $cat )
                                                <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                           @endforeach
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select School
                                            </small>
                                            @error('school')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                              </div>
                                    
                                <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea id="summernote2" class="@error('history') is-invalid @enderror"  placeholder="Brief History of School" name="history">{{old('history')}} </textarea>
                                     <small id="emailHelp" class="form-text text-muted">School History
                                            </small>
                                            @error('history')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         <script>
                                            CKEDITOR.replace( 'summernote2' );
                                            </script>

                                    </div>
                                     </div>
                                       <div class="col-md-12">
                                           <div class="custom-file">
                                            <input type="file"name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose Header Image
                                            </small>
                                              @error('image')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         </div>

                                         <div class="col-md-12">
                                           <div class="custom-file">
                                            <input type="file" multiple name="images[]" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Select Gallery Image
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
                             <button type="submit" class="btn btn-primary w-100 p-3">Add New Administration</button>
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