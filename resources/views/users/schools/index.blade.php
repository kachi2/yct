@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/site/categ.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Schools</a></li>
      </ol>
      <h2 class="h1">
       School of Technology
      </h2>
     </div>
   </div>
  </div>
</div>


@if(isset($dean->name))

 <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center border-bottom pt-5 mb-4">
             <img class="rounded-circle mb-4" src="{{asset('/assets/img/site/'.$dean->image)}}" width="200" height="200" alt="">
             <h4>
              @if(isset($dean->name)) {{$dean->name}} @endif
             </h4>
              <p>
               @if(isset($dean->name)){{'Dean of '. $school->name}} @endif
              </p>
             
            </div>

          </div>
        </div> <!-- END col-md-4 -->
        <div class="col-lg-5 mlt-4">
          <div class="card shadow-v1 padding-10">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                {{'Welcome Message'}}
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <p  style="text-align:justify">
             @if(isset($dean->message)) {{substr($dean->message,0,650)}} 
            &nbsp; <button class="btn btn-primary btn-sm" id="more"> Read More</button> 
<span style="text-align:justify" id="readMore" hidden>
 {{substr($dean->message,650,6000)}} 
</span>
@endif
              </div>
              
             <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
         <div class="col-lg-3 mt-5 mt-md-0">
        <div class="card shadow-v2 z-index-5" data-offset-top-xl="-110">
          <div class="card-header bg-danger text-white border-bottom-0">
            <span class="lead font-semiBold text-uppercase">
              Notice Board
            </span>
          </div>
          
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              March 10th, 2021
            </p>
             <p>School Resumption</p>
            <a href="#" style="font-size:12px">
              School considers resumption of school activities on 22nd march, 2021.
              This news came after the academic board meeting on friday, 12th of march, 2021.

            </a>
             
          </div>
          
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              March 10th, 2021
            </p>
             <p>School Resumption</p>
            <a href="#" style="font-size:12px">
              School considers resumption of school activities on 22nd march, 2021.
              This news came after the academic board meeting on friday, 12th of march, 2021.

            </a>
             
          </div>
    
          
          </div>
        </div>
      </div>
      </div> <!--END row-->
    </div> <!--END container-->
  </section>

  @else

<section class="paddingTop-20 bg-light">
    <div class="container">
    </div>
    </section>


  @endif

<section class="paddingTop-10 paddingBottom bg-light-v2">
  <div class="container">
   
    <div class="row marginTop-50">
      <div class="col-md-6 my-2">
        <h3>
         {{$school->name}} Latest News and Events
        </h3>
      </div>
      <div class="col-md-6 my-2 text-md-right">
        <a href="#" class="btn btn-outline-primary">All News and Events</a>
      </div>
      <div class="col-12 mt-2">
        <div class="owl-carousel arrow-on-hover" 
        data-items="4"
        data-state-outer-class="py-4"
        data-arrow="true"
        data-autoplay="false"
        data-space="30"
        data-loop="true">
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="">
              <img class="w-100" src="{{asset('/assets/img/sas.jpg')}}" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
              </a>
           
            </div>
         </div>
         
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="">
              <img class="card-img-top" src="{{asset('/assets/img/qq.jpg')}}" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
              </a>
           
            </div>
         </div>
           <div class="card text-gray height-100p shadow-v2">
            <a href="">
            <img class="card-img-top" src="{{asset('/assets/img/sss.png')}}" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
              </a>
           
            </div>
         </div>
           <div class="card text-gray height-100p shadow-v2">
            <a href="">
          <img class="card-img-top" src="{{asset('/assets/img/sss.png')}}" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
              </a>
           
            </div>
         </div>  <div class="card text-gray height-100p shadow-v2">
            <a href="">
             <img class="card-img-top" src="{{asset('/assets/img/qq.jpg')}}" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
              </a>
           
            </div>
         </div>
        </div>
      </div>
    </div> <!-- END row-->
  <!-- END row-->
    
   <!-- END row-->
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