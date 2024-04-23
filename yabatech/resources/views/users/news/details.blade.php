@extends('users.layout.app')
@section('content')



<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/site/categ.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">News</a></li>
      </ol>
      <h2 class="h1">
       College News
      </h2>
     </div>
   </div>
  </div>
</div>
    

    
<section class="pt-5 paddingBottom-150 bg-light-v2">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mt-4">
      
      <div class="card">        
        <div class="card-body">
        
       <!-- <audio controls class="w-100 mt-4">
          <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>-->
        
         <h2 class="my-4">
        {{$news->title}}
         </h2>
         
         <div class="media align-items-center justify-content-between mb-5">
          <div class="media align-items-center">
            <img class="iconbox mr-3" src="{{asset('/assets/img/'.$news->image)}}">
          </div>
           <div class="text-gray">
             <span class="d-inline-flex align-items-center"> 
              <i class="ti-calendar mr-1"></i> {{$news->created_at->format('M d, Y h:iA')}}
             </span>
           
           </div>
         </div>
         
         <p>
       {!!$news->content!!}  </p>
         <p>
         <div class="sharethis-inline-share-buttons"></div>
        </p>  
             
       </div> <!-- END card-body-->
      </div> <!-- END card-->
     
      </div> <!-- END col-lg-9 -->
      
      <aside class="col-lg-3 mt-4"> 
      
       <div class="widget widget_search">
        <form action="" method="POST"> 
          <div class="input-group">
            <input type="text" class="form-control border-0 pr-0 pl-3 u-py-15" placeholder="Search" required="">
            <button type="submit" class="input-group-btn btn bg-white">
              <span class="ti-search"></span>
            </button>
          </div>
        </form>
       </div> <!-- END widget--> 
       <div class="widget">
         <h2 class="widget-title">
           Latest Post
         </h2>
         @foreach ($latest as $lat )
           <div class="mb-4">
              <a href="{{route('news.details',encrypt($lat->id))}}">
                <img  src="{{asset('/assets/img/'.$lat->image)}}"alt="">
              </a>
              <h2 class="font-size-16 mt-2">
                <a href="#">
                 {{substr($lat->title,0,40)}}{{strlen($lat->title) > 40? '...':''}}
                </a>
              </h2>
           </div>
               @endforeach
          
       </div> <!-- END widget-->
       
      <div class="widget">
         <h2 class="widget-title">
           Archives List
         </h2>
         <ul>
          <li><a href="">December 2017 (5)</a></li>
          <li><a href="">November 2017 (4)</a></li>
          <li><a href="">January 2016 (10)</a></li>
          <li><a href="">March 2015 (22)</a></li>
          <li><a href="">May 2014 (6)</a></li>
          <li><a href="">October 2012 (16)</a></li>
         </ul>
       </div> <!-- END widget--> 
   <!-- END widget--> 
       
      </aside> <!-- END col-lg-3 -->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>  <!-- END section -->
    
@endsection