@extends('users.layout.app')
@section('styles')
    <!-- Include additional page css files here-->
@endsection
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
  </ol>
        <div class="carousel-inner">
             @foreach ($sliders as $slider )
            <div class="carousel-item padding-y-80 height-80vh {{$slider->is_active ==1? 'active': ''}}">
                <div
                    class="bg-absolute"
                    data-dark-overlay="0"
                    style="
              background: url({{asset('/assets/img/'.$slider->image)}})
                no-repeat;
            "
                ></div>
              
            </div>
                  @endforeach
         </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
  </a>
</div>


<section class="paddingTop-10 paddingBottom bg-light-v2">
  <div class="container">
   
    <div class="row marginTop-50">
      <div class="col-md-6 my-2">
        <h3>
         Latest News and Events
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
         @foreach ($news as  $new)
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


<section class="padding-y-30" data-primary-overlay="7" style="background: url(assets/img/1920/962.jpg) no-repeat"><div class="container">
</section>
    <!-- Start section-->
<section class="bg-light-v2 padding-y-10">
  <div class="container">
    <div class="row">
       <div class="col-lg-6 marginTop-20">
        <div class="card">
        <center>  <img src="{{asset('')}}assets/img/site/rector.jpg"  height="350px" width="350px" alt=""/></center>
          <div class="card-body" style="padding-left:100px">
           <p class="text-dark">
            {{$rector->name}}
             <br> {{$rector->designation}},
               Yaba College of Technology
           </p>
           <h4>
         
          </div>
        </div>
      </div>
        <div class="col-md-6 mt-3">
        <h2>
         <small class="text-primary d-block">
           Hello, and Welcome to
         </small>
          Yaba COllege of Technology.
        </h2>
       
        <p style="text-align:justify">
      {{substr($rector->message,0,600)}}
       <a href="{{route('administration',$rector->link)}}" class="btn btn-outline-primary"> Read More</a>
      </div>
   
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
  <section
        class="padding-y-100"
        data-primary-overlay="7"
        style="
        background: url(assets/img/site/graduate.jpg) no-repeat;
        background-size: cover;
        background-attachment: fixed;
      "
    >
    </section> 
<section class="padding-y-10">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row align-items-center">
          <div class="col-md-6 my-5">
           <div class="position-relative">
            <img class="rounded w-100" src="{{asset('/assets/img/endup.jpg')}}" alt="">
            <a href="https://youtu.be/VnzXU2nrffA" data-fancybox class="iconbox iconbox-lg bg-white position-absolute absolute-center">
              <i class="ti-control-play text-primary"></i>
            </a>
           </div>
          </div>
          <div class="col-md-6 mt-4">
            <h2>
              <small class="d-block text-gray">Watch our videos</small>
             on <span class="text-danger">Youtube</span> 
              
            </h2>
            <p class="my-4">
       HIGHLIGHTS OF YABATECH TECHPRO CONFERENCE
Subscribe to our youtube channel (Yabatech Webometrics) to watch other videos.
            </p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-5 mt-md-0">
        <div class="card shadow-v2 z-index-5" data-offset-top-xl="-160">
          <div class="card-header bg-danger text-white border-bottom-0">
            <span class="lead font-semiBold text-uppercase">
              Notice Board
            </span>
          </div>
          
          @foreach ($notices as $notice )
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              {{$notice->created_at->DiffForHumans()}}
            </p>
             <h6>{{$notice->headline}}</h6>
            <a href="{{route('noticeDetails', encrypt($notice->id))}}">{{substr($notice->content,0,100)}}
            </a>
             <a href="{{route('noticeDetails', encrypt($notice->id))}}" class="btn btn-outline-primary">
              Read More
            </a>
          </div>
          @endforeach
    
          
        
          <div class="p-4">
          
          </div>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
    <section
        class="padding-y-100"
        data-primary-overlay="7"
        style="
        background: url(assets/img/site/graduate.jpg) no-repeat;
        background-size: cover;
        background-attachment: fixed;
      "
    >
   
 
        <!-- END container-->
    </section>   

    <section class="paddingTop-50 paddingBottom-100">
  <div class="container">
    <div class="row">
     
      <div class="col-md-6 mt-5">
        <h2 class="mb-4">
          Facebook Page
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mb-5"></div>
        
        <div class="mb-5 wow fadeIn" data-wow-delay=".1">
          <div class="media mb-3">    
          </div>
         <div class="fb-page" data-href="https://web.facebook.com/Yabatech/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://web.facebook.com/Yabatech/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Yabatech/">Yaba College of Technology - Yabatech</a></blockquote></div>
        </div>
        
     
        
      </div> 
     
      <div class="col-md-6 mt-5">
        <h2 class="mb-4">
        Instagram Page
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mb-5"></div>
        
        <div class="mb-5 wow fadeIn" data-wow-delay=".1">
        
          <p>
        <a href="https://www.instagram.com/yabatechofficial/?utm_source=ig_embed&ig_rid=90f7f2ea-fd5b-47df-a4af-a084f860dad8"> </p>
         
        </div>
        
       
        
      </div> 
      
    </div> <!-- END row-->

  </div> <!-- END container-->
</section>



@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
