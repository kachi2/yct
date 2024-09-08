@extends('admin.layout.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
              <form method="post" enctype="multipart/form-data" action="{{route('staff.update', encrypt($staff->id))}}">
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Staff</h6>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name"  value="{{$staff->name}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Name of Staff">
                                            <small id="emailHelp" class="form-text text-muted">Name of the staff, eg. Engr. obafemi omokungbe
                                            </small>
                                            @error('name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                           
                                           <select value="{{$staff->category->id}}" class="form-control @error('category_id') is-invalid @enderror" name="category_id"> 
                                          <option value="{{$staff->category->id}}"> {{$staff->category->name}} </option>
                                           @foreach ($category as $cat )
                                                <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                           @endforeach
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select Staff Category
                                            </small>
                                            @error('category_id')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                              </div>
                              <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="text"value="{{$staff->designation}}"  name="designation"  value="{{old('designation')}}" class="form-control @error('designation') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Staff Designation">
                                            <small id="emailHelp" class="form-text text-muted">Staff Office e.g Office of the Dean
                                            </small>
                                            @error('designation')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                              </div>
                                        <div class="col-md-6">
                                         <div class="form-group">
                                           
                                           <select value="{{$staff->department_id}}" class="form-control @error('department_id') is-invalid @enderror" name="department_id"> 
                                          <option value="{{$staff->department->id}}"> {{$staff->department->name}}</option>
                                           @foreach ($department as $dpt )
                                                <option value="{{$dpt->id}}"> {{$dpt->name}} </option>
                                           @endforeach
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select Department
                                            </small>
                                            @error('department_id')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                                     </div>

                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="office"  value="{{$staff->departments}}" class="form-control @error('office') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Staff Office">
                                            <small id="emailHelp" class="form-text text-muted">Staff Office e.g Office of the Dean
                                            </small>
                                            @error('office')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="qualification"  value="{{$staff->qualification}}" class="form-control @error('qualification') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Staff qualification">
                                            <small id="emailHelp" class="form-text text-muted">Staff qualification e.g BSc. Computer Science
                                            </small>
                                            @error('qualification')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="publication"  value="{{$staff->publication}}" class="form-control @error('publication') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Staff publication">
                                            <small id="emailHelp" class="form-text text-muted">Staff publication
                                            </small>
                                            @error('publication')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="research_areas"  value="{{$staff->research_areas}}" class="form-control @error('research_areas') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Staff research areas">
                                            <small id="emailHelp" class="form-text text-muted">Staff research areas
                                            </small>
                                            @error('research_areas')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email"  value="{{$staff->email}}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Staff email">
                                            <small id="emailHelp" class="form-text text-muted">Staff email
                                            </small>
                                            @error('email')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                               <div class="col-md-6">
                                               <img src="{{asset('/assets/profile/'.$staff->image)}}" width="50px" height="50px">
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
                                           <div class="col-md-12">
                                        <div class="form-group">
                                                   <textarea name="bio"></textarea>
                                                        <script>
                                                                CKEDITOR.replace( 'bio' );
                                                        </script>
                                            <small id="emailHelp" class="form-text text-muted">Bio profile
                                            </small>
                                            @error('bio')
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
                             <button type="submit" class="btn btn-primary w-100 p-3">Add New Staff</button>
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