@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/'.$library->image) }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
      </ol>
      <h2 class="h1">
     Library Unit
      </h2>
     </div>
   </div>
  </div>
</div>


@if(isset($librarian->name))

 <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center pt-5 mb-4">
             <img class=" mb-4" src="{{asset('/assets/'.$library->image)}}"  alt="">
             
            </div>

          </div>
        </div> <!-- END col-md-4 -->
        <div class="col-lg-8 mlt-4">
          <div class="card shadow-v1 padding-10">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                {{'About'}}
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <p  style="text-align:justify">
             @if(isset($library->about)) {{substr($library->about,0,900)}} 
            &nbsp; <button class="btn btn-primary btn-sm" id="more"> Read More</button> 
<span style="text-align:justify" id="readMore" hidden>
 {{substr($library->about,650,6000)}} 
</span>
@endif
              </div>
              
             <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      
      </div>
      </div> <!--END row-->
    </div> <!--END container-->
  </section>

  @else

  @endif
<section class="padding-y-50 border-bottom border-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
       <h4> <span class="text-primary">image Gallery</span></h4>
     </div>
     <div class="col-12">
       <div class="owl-carousel" data-items="3" data-space="30" data-arrow="true">
        @php 
      $img = json_decode($library->gallery,true);
        @endphp
        @foreach ($img as  $images)
         <div class="media-viewer">
            <img class="media-viewer__media" src="{{asset('/assets/img/'.$images)}}" alt="">
            <div class="media-viewer__overlay bg-black-0_7 flex-center">
              <a href="{{asset('/assets/img/'.$images)}}" class="text-white font-size-30" data-fancybox="gallery">
                <i class="ti-plus"></i>
              </a>
            </div>
          </div>
          @endforeach
        
       </div>
     </div>
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