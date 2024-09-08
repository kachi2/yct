@extends('users.layout.app')
@section('content')
<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/'.$gallery->header_image) }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Schools</a></li>
      </ol>
      <h2 class="h1">
       {{$school->name}}
      </h2>
     </div>
   </div>
  </div>
</div>
 <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
              <div class="col-lg-2 " style="background:#fff">
           <div class="dropright  border-bottom  p-2" >
           <a href="{{route('schools.index')}}" class="  btn-outline-secondary"   >Welcome Page</a>
        </div>
         <div class="dropright p-2 border-bottom" >
           <a href="{{route('schoolHistory', encrypt($school->id))}}" class="    btn-outline-secondary">History</a>
        </div>
        <div class="dropright p-2 border-bottom">
           <a href="#" class="dropdown-toggle btn-outline-secondary"    data-toggle="dropdown">Departments</a>
          <div class="dropdown-menu">
            @foreach ($departments as $dpt )
            <a class="dropdown-item" href="#">
             <span>{{$dpt->name}}</span>
            </a>
                 @endforeach
             </div>
        </div>
        <div class="dropright p-2 border-bottom" >
           <a href="{{route('schoolStaff', encrypt($school->id))}}" class=" btn-outline-secondary">Staffs</a>
          </div>
        <div class="dropright p-2 border-bottom" >
           <a href="{{route('staff.profile', encrypt($dean->id))}}" class=" btn-outline-secondary ">Dean's Profile</a>
        </div>
        <div class="dropright p-2 border-bottom" >
           <a href="{{route('school.deans', encrypt($school->id))}}" class="btn-outline-secondary " >Past Deans</a>
        </div>
        
        </div> <!-- END col-md-4 --> 
      <div class="col-lg-10 mx-auto">
        <div class="table-responsive my-4">
          <table class="table">
            <thead class="thead-light" >
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Category</th>
                <th scope="col">Designation</th>
                
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($staffs as $staff)
           
              <tr>
               
                <td>  <img width="100px" src="{{asset('/assets/profile/'.$staff->image)}}"></td>
                <td scope="row">{{$staff->name}}</td>  
                <td scope="row">{{substr($staff->department->name, 0,20)}} </td> 
                <td scope="row">{{$staff->category->name}}</td> 
                    <td scope="row">{{$staff->designation}}</td> 
                <td scope="row" > <a href="{{route('staff.profile', encrypt($staff->id))}}" style="color:green"> View</a></td> 
              </tr>
            @endforeach
            </tbody>
          </table>    
        </div> <!-- END row-->
      </div>
      </div> <!--END row-->
    </div> <!--END container-->
  </section>

@endsection

@section('script')

<script>

$('#more').on('click', function(){
  //  alert('am here');
        document.getElementById('readMore').hidden = false;
        $('#more').attr('hidden', true);
});

</script>

@endsection