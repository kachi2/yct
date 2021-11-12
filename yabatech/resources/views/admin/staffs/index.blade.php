@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Staff</h6>
                                <div>
                                    <a href="{{route('staff.create')}}" class="mr-3">
                                        <i class="btn btn-success btn-sm">Add New</i>
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
                                            <th class="text-left">S/N</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Category</th>
                                                  <th>Designation</th>
                                                  <th>Email</th>
                                                <th>Image</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(count($staff) > 0)
                                        @foreach ($staff as  $sp)
                                            <tr>
                                            <td>{{$sp->id}}</td>
                                                <td>
                                                    <a href="#">{{$sp->name}}</a>
                                                </td> 
                                                <td>
                                                    <a href="#">{{$sp->department->name}}</a>
                                                </td>
                                                 <td>
                                                    <a href="#">{{$sp->category->name}}</a>
                                                </td> 
                                                <td>
                                                    <a href="#">{{$sp->designation}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$sp->email}}</a>
                                                </td>
                                                <td>
                                                    <a href="#"><img src="{{asset('/assets/profile/'.$sp->image)}}" width="50px" height="50px"></a> 
                                                </td> 
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{route('staff.edit', encrypt($sp->id))}}" class="dropdown-item">Edit</a>
                                                                 <a href="{{route('admin.staff.assign', encrypt($sp->id))}}" class="dropdown-item">Assign an Office</a>
                                                       
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