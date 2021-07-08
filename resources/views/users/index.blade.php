@extends('users.layout.app')
@section('styles')
    <!-- Include additional page css files here-->
@endsection
@section('content')
    <div id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel">
       

        <div class="carousel-inner">
            <div class="carousel-item padding-y-80 height-80vh active">
                <div
                    class="bg-absolute"
                    data-dark-overlay="0"
                    style="
              background: url({{asset('/assets/img/assa.png')}})
                no-repeat;
            "
                ></div>
              <!--  <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto text-center text-white">
                            <h2 class="font-weight-bold animated slideInUp">
                                Nabteb Inspects Yabatech Workplaces Training Centres
                            </h2>
                            <p class="lead animated fadeInUp">
                                The National Business and Technical Examination Board (NABTEB)
                                recently inspects several workplaces in computer village
                                Ikeja, that will serve as Yabatech Training Centre for mobile
                                phones and computer hardware repairs and maintenance under the
                                National Skills Qualification Framework (NSQF).
                            </p>
                            <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp"
                            >Read More</a
                            >
                           
                        </div>
                    </div>
                </div>  -->
            </div>

            <div class="carousel-item padding-y-80 height-80vh">
                <div
                    class="bg-absolute"
                    data-dark-overlay="0"
                    style="
              background: url({{asset('/assets/img/ada.png')}})
                no-repeat;
            "
                ></div>
             <!--   <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto text-center text-white">
                            <h2 class="font-weight-bold animated slideInUp">
                                Nans Honours Yabatech Rector
                            </h2>
                            <p class="lead animated fadeInUp">
                                National Association of Nigerian Students (NANS) South-West
                                zone recently presented the 2020 NANS South-West Outstanding
                                Personality Distinguished Award to the Rector, Yaba College of
                                Technology (Yabatech), Engr. Obafemi Omokungbe as Icon of
                                Education Development.
                            </p>
                            <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp"
                            >Read More</a
                            >
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item padding-y-80 height-80vh">
                <div
                    class="bg-absolute"
                    data-dark-overlay="0"
                    style="
              background: url({{asset('/assets/img/dsd.jpg')}})
                no-repeat;
            "
                ></div>
             <!--   <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto text-center text-white">
                            <h2 class="font-weight-bold animated slideInUp">
                                Nans Honours Yabatech Rector
                            </h2>
                            <p class="lead animated fadeInUp">
                                National Association of Nigerian Students (NANS) South-West
                                zone recently presented the 2020 NANS South-West Outstanding
                                Personality Distinguished Award to the Rector, Yaba College of
                                Technology (Yabatech), Engr. Obafemi Omokungbe as Icon of
                                Education Development.
                            </p>
                            <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp"
                            >Read More</a
                            >
                        </div>
                    </div>
                </div> -->
            </div>

 <section class="padding-y-10 bg-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
       <h2 class="mb-4">
      Latest College News
      </h2>
      <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
     </div>
      <div class="col-12">
       <div class="owl-carousel arrow-on-hover" data-state-outer-class="py-3" data-item="5" data-space="30" data-arrow="true" data-loop="true">
         <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="{{asset('/assets/img/qq.jpg')}}" alt="">
          <div class="card-body">
            <h6>
             Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
            </h6>
          </div>
        </div>
         <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="{{asset('/assets/img/qq.jpg')}}" alt="">
          <div class="card-body">
            <h6>
             Yabatech Unveils Art Museum, Launches Policy Document On Sexual Harassment
            </h6>
          </div>
        </div>
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="{{asset('/assets/img/sas.jpg')}}" alt="">
          <div class="card-body">
            <h6>
              Osifala Retires In Grand Style, After 37 Years Of Meritorious Service In Yabatech
            </h6>
          </div>
        
        </div>
       
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="{{asset('/assets/img/sss.png')}}" alt="">
          <div class="card-body">
            <h6>
         Yabatech Post Utme Examination Slated For March 16th To 22nd 2021
            </h6>
            
            
          </div>
        
        </div>
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

    <!-- Start section-->
<section class="bg-light-v2 padding-y-100">
  <div class="container">
    <div class="row">
       <div class="col-lg-6 marginTop-30">
        <div class="card">
        <center>  <img src="{{asset('')}}assets/img/site/rector.jpg"  height="350px" width="350px" alt=""/></center>
          <div class="card-body">
           <p class="text-primary">
            Engr. Obafemi Omokungbe
              Rector, <br>
               Yaba College of Technology
           </p>
           <h4>
            <a href="#">
                 <small class="text-primary d-block"> Hello, </small>
                        Welcome to Yabatech.
            </a>
           </h4>
           <p>
             Investig ationes demons trave wanrunt the lectore legere kliushy was aequod legunt saeph claritas.
           </p>
            <a href="#" class="btn btn-outline-primary">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="list-card align-items-center marginTop-30">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="{{asset('/assets/img/regis.jpg')}}" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">Dr. S. O. Momodu</p>
            <a href="#" class="h5">
              Regista Yaba college of Technology
            </a>
          </div>
        </div>
        <div class="list-card align-items-center marginTop-30">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="{{asset('/assets/img/depu.jpg')}}" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">Dr. Engr. Kehinde B</p>
            <a href="#" class="h5">
              The Deputy Rector (Academics) 
            </a>
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
   
    <section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center">
        <h2 class="mb-4">
          Latest College News
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
      <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".1s">
        <div class="list-card align-items-center height-100p m-0 shadow-v1">
          <div class="col-md-4 p-4 p-md-5 border-right text-center">
            <img src="{{asset('/assets/img/skills.jpg')}}" alt="">
          </div>
          <div class="col-md-8 p-4 p-md-5">
            <h4>
              College Entertainment week
            </h4>
            <p>
              <i class="ti-location-pin"></i> College Sport Complex
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".2s">
        <div class="list-card align-items-center height-100p m-0 shadow-v1">
          <div class="col-md-4 p-4 p-md-5 border-right text-center">
            <img src="{{asset('/assets/img/news.jpg')}}" alt="">
          </div>
          <div class="col-md-8 p-4 p-md-5">
            <h4>
              College Students Orientation week
            </h4>
            <p>
              <i class="ti-location-pin"></i>College Hall
            </p>
          </div>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
        <!-- END container-->
    </section>   
<section class="padding-y-100">
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
          
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              March 10th, 2021
            </p>
             <h6>School Resumption</h6>
            <a href="#">
              School considers resumption of school activities on 22nd march, 2021.
              This news came after the academic board meeting on friday, 12th of march, 2021.

            </a>
             <a href="#" class="btn btn-outline-primary">
              Read More
            </a>
          </div>
    
          
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              March 5th, 2021
            </p>
            <h6> School Fees payment Extention</h6>
            <a href="#">
             School extends closing of portal for school feees payments.
             The academic unit has consider it neccesary to extend payment of school fees for 
             students due to the Technical issues encountered at the CITM which could not allow students

            </a>
             <a href="#" class="btn btn-outline-primary">
              Read More
            </a>
          </div>
          
        
          <div class="p-4">
          
          </div>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>


@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
