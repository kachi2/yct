@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">News</h6>
                                <div>
                                    <a href="{{route('news.create')}}" class="mr-3">
                                        <i class="btn btn-success btn-sm">Create New</i>
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
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                  <th>School</th>
                                                  <th>Posted By</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(count($news) > 0)
                                        @foreach ($news as  $sp)
                                            <tr>
                                            <td>{{$sp->id}}</td>
                                                <td>
                                                    <a href="#">{{$sp->title}}</a>
                                                </td> 
                                                <td>
                                                    <a href="#">{!!substr($sp->content, 0, 200)!!}</a>
                                                </td>
                                                 <td>
                                                    <img src="{{asset('/assets/img/'.$sp->image)}}" width="50px" height="50px">
                                                </td> 
                                                <td>
                                                    <a href="#"> @if($sp->school_id == 0) {{'All Schools'}} @else {{$sp->school->name}} @endif</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$sp->user->name}}</a>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{route('news.edit', encrypt($sp->id))}}" class="dropdown-item">Edit</a>
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