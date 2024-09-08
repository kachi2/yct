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
   TetFund Physical Infrastructure
      </h2>
     </div>
   </div>
  </div>
</div>

   
<section class="padding-y-60 bg-light">
  <div class="container">

    
    <div class="row">
     @foreach($support as $ss)
      <div class="col-lg-4 col-md-6 marginTop-30">
        <div class="card height-100p shadow-v1">
          <img class="card-img-top" src="{{asset('/assets/img/'.$ss->image)}}" alt="">
          <div class="card-body">
            <a href="#" class="h4">
              {{$ss->headline}}
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div> <!-- END row-->
  </div> <!-- END container-->
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