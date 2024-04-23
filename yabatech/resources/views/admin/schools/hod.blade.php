@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Department HOD</h6>
                                <div>
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
                                                <th>Welcome Message</th>
                                                  <th>status</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(count($hods) > 0)
                                        @foreach ($hods as  $sp)
                                            <tr>
                                            <td>{{$sp->id}}</td>
                                                <td>
                                                    <a href="#">{{$sp->staff->name}}</a>
                                                </td> 
                                                <td>
                                                <a href="#">{{$sp->department->name}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{!!substr($sp->message,0,100) !!}</a> 
                                                </td> 
                                                
                                                <td>
                                                <a href="#">@if($sp->expired_at == null) Active @else Tenure Ended @endif</a>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        @if($sp->is_active != 2)
                                                                 <a href="{{route('administration.disabled', encrypt($sp->id))}}" class="dropdown-item " style="color:red">Mark Expired</a>
                                                            @else
                                                                   <a href="{{route('administration.enable', encrypt($sp->id))}}" class="dropdown-item " style="color:green">Return Tenure</a>
                                                          @endif
                                                            <a href="{{route('admin.hodEdit', encrypt($sp->id))}}" class="dropdown-item">Edit</a>
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