@extends('pages.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/site/categ.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Admininstration</a></li>
      </ol>
      <h2 class="h1">
       College Administration
      </h2>
     </div>
   </div>
  </div>
</div>


@if(isset($rector->name))

 <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center border-bottom pt-5 mb-4">
             <img class="rounded-circle mb-4" src="{{asset('/assets/img/site/'.$rector->image)}}" width="200" height="200" alt="">
             <h4>
              @if(isset($rector->name)) {{$rector->name}} @endif
             </h4>
              <p>
               @if(isset($rector->name)){{$rector->name}} @endif
              </p>
             
            </div>

          </div>
        </div> <!-- END col-md-4 -->
        <div class="col-lg-8 mt-4">
          <div class="card shadow-v1 padding-30">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                {{$rector->name == 'rector'? 'welcome Message' : 'About'}}
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
              Biography
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <p  style="text-align:justify">
             @if(isset($rector->message)) {{substr($rector->message,0,650)}} 
            <br>  <button class="btn btn-primary" id="more"> Read More</button> 
<span style="text-align:justify" id="readMore" hidden>
 {{substr($rector->message,650,6000)}} 
</span>
@endif
              </div>
              <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
                <div class="row">
                  <div class="col-md-12 mt-4">
                    
                        <p style="text-align:justify">
                              @if(isset($rector->about)) {{$rector->about}} @endif
                        </p>
                      
                    
                  </div>
                 
                </div> <!-- END row-->
              </div> <!-- END tab-pane -->
             <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      </div> <!--END row-->
    </div> <!--END container-->
  </section>

  @else

<section class="paddingTop-20 bg-light">
    <div class="container">
    </div>
    </section>


  @endif

 <section class="padding-y-10 bg-light-v5">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center">
        <h2 class="mb-4">
         From the Administration Desk
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div> 
    </div> <!-- END row-->
    
    <div class="row mt-4">
      <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".1s">
        <div class="list-card align-items-center height-100p m-0 shadow-v1">
          <div class="col-md-4 p-4 p-md-5 border-right text-center">
            <img src="{{asset('/assets/img/news.jpg')}}" alt="">
          </div>
          <div class="col-md-8 p-4 p-md-5">
            <h6>
              Samsung Boost E-Learning At Yabatech With Donation Of Innovation Hub
            </h6>
            <p>
              <i class="ti-location-pin"></i>COllege Hall
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".2s">
        <div class="list-card align-items-center height-100p m-0 shadow-v1">
          <div class="col-md-4 p-4 p-md-5 border-right text-center">
            <img src="{{asset('/assets/img/skills.jpg')}}" alt="">
          </div>
          <div class="col-md-8 p-4 p-md-5">
            <h4>
              Skills Acquisition Centre Kicks Off Training
            </h4>
            <p>
              <i class="ti-location-pin"></i> College 
            </p>
          </div>
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