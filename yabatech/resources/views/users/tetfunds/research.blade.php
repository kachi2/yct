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
    RESEARCH PROJECTS
      </h2>
     </div>
   </div>
  </div>
</div>


<section class="padding-y-100 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 text-center">
        <h4>LIST OF RESEARCH PROJECTS (RP) BENEFICIARIES

RESEARCH PROJECTS (RP) FINANCED WITH TETFUND INTERVENTION <span class="text-primary"></span><hr></h4>
      </div>
      <div class="col-lg-12 mx-auto">
        <div class="table-responsive my-4">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">S/NO</th>
                <th scope="col">LEAD RESEARCHER NAME</th>
                <th scope="col">DPT</th>
                <th scope="col">REASEARCH TITTLE/TOPICC TITTLED</th>
                <th scope="col">DURATION OF REASEARCH</th>
                <th scope="col">YEAR OF INTERVENTION</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($research as $ee )
              <tr>
                <th scope="row">{{$ee->id}}</th>
                <td>{{$ee->lead_research}}</td>
                <td>{{$ee->dpt}}</td>
                <td>{{$ee->title}}</td>
                <td>{{$ee->duration}}</td>
                 <td>{{$ee->year}}</td>
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