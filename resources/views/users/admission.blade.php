@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/tetfund.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Admissions</a></li>
      </ol>
      <h2 class="h1">
    ADMISSION LIST
      </h2>
     </div>
   </div>
  </div>
</div>


<section class="padding-y-10 border-bottom border-light">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12 mx-auto">
        <div class="table-responsive my-4">
          <table class="table">
            <thead class="thead-light" >
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Posted On</th>
                   <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($admission as $ee )
              <tr>
                <th scope="row">{{$ee->name}}</th>
                <td>{{$ee->created_at->format('d-m-Y')}}</td>
                 <td><a target="_blank" href="{{asset('/assets/doc/'.$ee->ad_file)}}"> <button class="btn btn-primary btn-sm">View List </button></a></td>
                <td>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>        
      </div>     
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->
    

  
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