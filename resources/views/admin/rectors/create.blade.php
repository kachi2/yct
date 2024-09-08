@extends('admin.layout.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
              <form method="post" enctype="multipart/form-data" action="{{route('administration.store')}}">
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Create Administrator</h6>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name"  value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Name of the administrator">
                                            <small id="emailHelp" class="form-text text-muted">Name of the administrator, eg. Engr. obafemi omokungbe
                                            </small>
                                            @error('name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                      <div class="col-md-12">
                                         <div class="form-group">
                                           
                                           <select value="{{old('designation')}}" class="form-control @error('designation') is-invalid @enderror" name="designation"> 
                                          <option> Select Designation </option>
                                           @foreach ($nav as $cat )
                                                <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                           @endforeach
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select Administration Designation
                                            </small>
                                            @error('designation')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                              </div>
                                    
                                <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea id="summernote2" class="@error('about') is-invalid @enderror"  placeholder="Brief information about the administrator" name="about">{{old('about')}} </textarea>
                                     <small id="emailHelp" class="form-text text-muted">Brief information about the administrator
                                            </small>
                                            @error('about')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         <script>
                                            CKEDITOR.replace( 'summernote2' );
                                            </script>

                                    </div>
                                     </div>

                                         <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea id="summernote" class="@error('message') is-invalid @enderror" name="message">{{old('message')}}</textarea>
                                     <small id="emailHelp" class="form-text text-muted">Administration welcome Message
                                            </small>
                                            @error('message')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                    </div>
                                    
                                        <script>
                                            CKEDITOR.replace( 'summernote' );
                                            </script>


                                         </div>


                                               <div class="col-md-12">
                                  <div class="custom-file">
                                            <input type="file"name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose an image
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