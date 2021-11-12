@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('/assets/img/staff.jpg')}}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Staff</a></li>
      </ol>
      <h2 class="h1">
        Staff List
      </h2>
      
     </div>
      <form class="col-lg-5 my-2 ml-auto">
        <div class="input-group bg-white rounded p-1">
          <input type="text" class="form-control border-white" placeholder="Search for a staff" required="">
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
        </div>
      </form>
   </div>
  </div>
</div>
    
<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
   <div class="row align-items-start">
   <!-- END col-lg-3 -->
     <div class="col-lg-9 order-1 order-lg-1">
       <div class="row">
       @foreach ($staffs as $staff )
      <div class="col-md-3 marginTop-30">
        <div href="#" class="card text-gray shadow-v1">
        <a href="{{route('staff.profile', encrypt($staff->id))}}">  <img class="card-img-top" src="{{asset('/assets/profile/'.$staff->image)}}" alt=""></a>
          <div class="p-2 ">
            <a href="{{route('staff.profile', encrypt($staff->id))}}" class="p">
              {{substr($staff->name,0,20).'..'}}
            </a>
          </div>
          <div class="p-2 media  justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1" style="font-size:12px">
             <span class="btn-light">Department:</span> {{substr($staff->department->name, 0,20)}} 
              </li>
             <li class="mb-1" style="font-size:12px">
              <span class="btn-light">  Designation:</span>  {{$staff->designation}}
              </li>
            </ul>
          </div>
        </div>
      </div>
        @endforeach
      
     
    
      
        <div class="col-12 marginTop-70">
          <ul class="pagination pagination-primary justify-content-center">
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-angle-left small"></i>
              </a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">1</a>
            </li>
            <li class="page-item active disabled mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">2</a>
            </li>
            <li class="page-item disabled mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-more-alt"></i>
              </a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">16</a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-angle-right small"></i>
              </a>
            </li>
          </ul>
        </div>
       </div> <!-- END row-->
     </div> <!-- END col-lg-9 -->
     <aside class="col-lg-3 order-2 order-lg-2">
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">By Departments</h4>
         <ul class="card-body list-unstyled mb-0">
          @foreach ($departments as $dpt )
               <li class="mb-2"><a href="">{{$dpt->name}}</a></li>
               <hr>
          @endforeach
        
         </ul>
       </div>
      
     </aside>
   </div> <!-- END row-->
    
  </div> <!-- END container-->
</section>
   



 

@endsection
