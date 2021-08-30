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
         Samsung Boost E-Learning At Yabatech With Donation Of Innovation Hub
         </h2>
         
         <div class="media align-items-center justify-content-between mb-5">
          <div class="media align-items-center">
            <img class="iconbox mr-3" src="{{asset('/assets/img/sss.png')}}">
          </div>
           <div class="text-gray">
             <span class="d-inline-flex align-items-center"> 
              <i class="ti-eye mr-1"></i> 2788
             </span>
             <span class="d-inline-flex align-items-center ml-2"> 
              <i class="fa fa-comment mr-1"></i>  23
             </span>
           </div>
         </div>
         
         <p>
           Investig ationes demons trave runt lectores legere liusry quod was legunt saepius claritas Investig tones. Pharetra dui, nec tincidunt ante mauris eu diam. Phasellus verra nisl vitae cursus aei uismod supen dise saepius claritas investig. Investiga tiones demonstr averun d lectores legere melius quod kequa legunt saepius. Claritas est etiam pro cessus dynamicus, qui sequitur mutatin onem consuetudium. Investiga tiones demonstr averunt lectores legere me liusked quod kequa legunt saepius.
         </p>
         <p>
          Business and Finance Sequitur <a href="#" class="text-primary">Education & University.</a> Investiga tiones demonstr aver unt lectores legere me lius quod ii qua legunt saepius. Claritas est etiam pro cessus.
         </p>
        
        
         <ul class="list-unstyled list-style-icon list-icon-check my-4">
            <li>Delivers solutions that help drive research analytics lectores </li>
            <li>Human capital research analytics bringing an approach </li>
            <li>Complex problems bringing an approach delivers solutions </li>
            <li>Works with senior executives to help them analytics bringing </li>
         </ul>       
       </div> <!-- END card-body-->
      </div> <!-- END card-->
      
      
       <div class="card shadow-v5 mt-5 padding-40">
        
         <ol class="list-unstyled comments-area">
           <li>
            
             <div class="media mb-5">
               <img class="iconbox iconbox-lg mr-3" src="assets/img/avatar/5.jpg" alt="">
               <div class="media-body">
  
                 <h4 class="h5 mb-0">
                   Randy Orton
                 </h4>
                 <p class="text-gray">
                   August 12, 2017
                 </p>
                 <p>
                   Business and Finance Sequitur mutatin was onem consue ktudium. Investiga tiones demonstr aver unt lectores legere me lius quod kqua legunt saepius.
                 </p>
               </div>
             </div>
             
             <ul>
               <li>
                 <div class="media mb-5">
                   <img class="iconbox iconbox-lg mr-3" src="assets/img/avatar/4.jpg" alt="">
                   <div class="media-body">
                    
                     <h4 class="h5 mb-0">
                       Randy Orton
                     </h4>
                     <p class="text-gray">
                       August 12, 2017
                     </p>
                     <p>
                       Business and Finance Sequitur mutatin was onem consue ktudium. Investiga tiones demonstr aver unt lectores legere me lius quod kqua legunt saepius.
                     </p>
                   </div>
                 </div>
               </li>
             </ul>
            
           </li>
           <li>   
           </li>
           <li class="text-center mt-5">
             <a href="#" class="btn btn-icon btn-outline-primary">
               <i class="ti-reload mr-2"></i> Load More
             </a>
           </li>
         </ol>
       </div>
      
       <div class="card shadow-v5 mt-5 padding-40">
          <h4>
            Leave a Reply
          </h4>
          <p>
            Your email address will not be published. Required fields are marked *
          </p>
          <form action="" method="POST">
            <div class="row mt-4">
              <div class="col-md-6 mb-4">
                <input type="text" class="form-control" placeholder="Name *">
              </div>
              <div class="col-md-6 mb-4">
                <input type="text" class="form-control" placeholder="Email *">
              </div>
            </div>
            <textarea class="form-control mb-4" rows="5" placeholder="Your text *"></textarea>
            <button class="btn btn-primary">Post Comment</button>
          </form>
       </div>
        
       
        
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
           <div class="mb-4">
              <a href="#">
                <img src="{{asset('/assets/img/qq.jpg')}}" alt="">
              </a>
              <h2 class="font-size-16 mt-2">
                <a href="#">
                 Ultimate Web Designer &  Developer Course
                </a>
              </h2>
           </div>
           <div class="mb-4">
              <a href="#">
                <img src="{{asset('/assets/img/sas.jpg')}}" alt="">
              </a>
              <h2 class="font-size-16 mt-2">
                <a href="#">
                   Web UI UX Design using Adobe XD 
                </a>
              </h2>
           </div>
           
           <div class="mb-4">
              <a href="#">
                <img src="{{asset('/assets/img/sss.png')}}" alt="">
              </a>
              <h2 class="font-size-16 mt-2">
                <a href="#">
                   Design in 2018
                </a>
              </h2>
           </div>
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
      <div class="widget">
         <h2 class="widget-title">
           Share this News
         </h2>
          <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
            <i class="ti-facebook"></i>
          </a>
          <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
            <i class="ti-twitter"></i>
          </a>
          <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
            <i class="ti-linkedin"></i>
          </a>
          <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
            <i class="ti-google"></i>
          </a>
          <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
            <i class="ti-pinterest"></i>
          </a>
          <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
            <i class="ti-instagram"></i>
          </a>
       </div> <!-- END widget--> 
       
      </aside> <!-- END col-lg-3 -->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>  <!-- END section -->
    
@endsection