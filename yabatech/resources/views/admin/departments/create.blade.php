@extends('admin.layout.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
              <form method="post" enctype="multipart/form-data" action="{{route('news.store')}}">
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add New Department</h6>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="title"  value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Name of Dept">
                                            <small id="emailHelp" class="form-text text-muted">Name of Department
                                            </small>
                                            @error('name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea id="summernote2" class="@error('description') is-invalid @enderror"  placeholder="Dpt decription" name="description">{{old('description')}} </textarea>
                                     <small id="emailHelp" class="form-text text-muted">Brief Info about Department
                                            </small>
                                            @error('content')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         <script>
                                            CKEDITOR.replace( 'summernote2' );
                                            </script>

                                    </div>
                                     </div>
                                          <div class="col-md-6">
                                         <div class="form-group">
                                           
                                           <select value="{{old('school_id')}}" class="form-control @error('school_id') is-invalid @enderror" name="school_id"> 
                                           @foreach ($schools as $cat )
                                                <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                           @endforeach
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select Department School
                                            </small>
                                            @error('designation')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                              </div>
                                        <div class="col-md-6">
                                  <div class="custom-file">
                                            <input type="file"name="images[]" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Select Images</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Select Department Image Gallery
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
                             <button type="submit" class="btn btn-primary w-100 p-3">Publish News</button>
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