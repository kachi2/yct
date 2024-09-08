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
        @if(isset($dean->name))
        <div class="col-lg-7 mlt-4">
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
             @if(isset($dean->message)) {!!substr($dean->message,0,650)!!} 
            &nbsp; <button class="btn btn-primary btn-sm" id="more"> Read More</button> 
<span style="text-align:justify" id="readMore" hidden>
 {!!substr($dean->message,650,6000)!!} 
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
          
          @foreach ($notice as  $nots)
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              {{$nots->created_at->DiffForHumans()}}
            </p>
             <a href="{{route('noticeDetails', encrypt($nots->id))}}" style="font-size:13px">{!!$nots->headline!!} <span class="btn btn-outline-primary btn-sm"> Read More</span></a>
            
          </div>
              @endforeach      
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
         
         @foreach ($news as $new )
           <div class="card text-gray height-100p shadow-v2">
            <a href="{{route('news.details',encrypt($new->id))}}">
              <img class="w-100" src="{{asset('/assets/img/'.$new->image)}}" alt="" width="100px" height="200px">
            </a>
            <div class="p-4">
              <a href="{{route('news.details',encrypt($new->id))}}" class="h6">
                {{substr($new->title,0,40)}}{{strlen($new->title) > 40? '...':''}}
              </a>
           
            </div>
         </div>
            @endforeach
         
        </div>
      </div>
    </div> <!-- END row-->
  <!-- END row-->
    
   <!-- END row-->
  </div> <!-- END container-->
</section>

<section class="padding-y-100 border-bottom border-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
       <h4>{{$school->name}} <span class="text-primary">image Gallery</span></h4>
     </div>
     <div class="col-12">
       <div class="owl-carousel" data-items="4" data-space="30" data-arrow="true">
        @php 
      $img = json_decode($gallery->gallery,true);
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