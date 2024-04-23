@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/tetfund.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">TETFUNDS</a></li>
      </ol>
      <h2 class="h1">
    STAFF TRAINING
      </h2>
     </div>
   </div>
  </div>
</div>


<section class="padding-y-100 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 text-center">
        <h4>TETFUND ACADEMIC STAFF TRAINING & DEVELOPMENT BENEFICIARIES (2009 TO DATE) <span class="text-primary"></span><hr></h4>
      </div>
      <div class="col-lg-12 mx-auto">
        <div class="table-responsive my-4">
          <table class="table">
            <thead class="thead-light" >
              <tr>
                <th scope="col">S/NO</th>
                <th scope="col">Date of Funding</th>
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Programmes</th>
                <th scope="col">University of Study</th>
                <th scope="col">Country</th>
                <th scope="col">Start Year</th>
                   <th scope="col">End Year</th>
                   <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($training as $ee )
              <tr>
                <th scope="row">{{$ee->id}}</th>
                <td>{{$ee->funding_date}}</td>
                <td>{{$ee->name}}</td>
                <td>{{$ee->sex}}</td>
                <td>{{$ee->programme}}</td>
                 <td>{{$ee->university}}</td>
                 <td>{{$ee->country}}</td>
                 <td>{{$ee->start_year}}</td>
                  <td>{{$ee->end_year}}</td>
                  <td>{{$ee->remark}}</td>
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