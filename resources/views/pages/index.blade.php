@extends('pages.layout.app')
@section('styles')
    <!-- Include additional page css files here-->
@endsection
@section('content')
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
    >
        <ol class="carousel-indicators">
            <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class=""
            ></li>
            <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
                class="active"
            ></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item padding-y-80 height-80vh active">
                <div
                    class="bg-absolute"
                    data-dark-overlay="6"
                    style="
              background: url(https://images.pexels.com/photos/1251861/pexels-photo-1251861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)
                no-repeat;
            "
                ></div>
                <div class="container">
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
                </div>
            </div>

            <div class="carousel-item padding-y-80 height-80vh">
                <div
                    class="bg-absolute"
                    data-dark-overlay="6"
                    style="
              background: url(https://images.pexels.com/photos/3769021/pexels-photo-3769021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)
                no-repeat;
            "
                ></div>
                <div class="container">
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
                </div>
            </div>
        </div>
        <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
        >
            <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
        >
            <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
        </a>
    </div>
<section class="padding-y-10 flex-center bg-cover" data-dark-overlay="6">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
        <p class="lead text-center text-white mb-4">
         Quick Links
        </p>
        <div class="owl-carousel arrow-on-hover text-center"
          data-space="10"
          data-items="5"
          data-arrow="true"
          data-loop="true"
          data-tablet="4"
          >
          <a href="#" class="card p-4 hover:primary">
            <i class="ti-camera font-size-34 text-primary"></i>
            <h6 class="mt-2">
             Students Portals
            </h6>
          </a>
          <a href="#" class="card p-4 hover:primary">
            <i class="ti-stats-up font-size-34 text-primary"></i>
            <h6 class="mt-2">
              Staff Portals
            </h6>
          </a>
          <a href="#" class="card p-4 hover:primary">
            <i class="ti-layers font-size-34 text-primary"></i>
            <h6 class="mt-2">
              News and Events
            </h6>
          </a>
          <a href="#" class="card p-4 hover:primary">
            <i class="ti-desktop font-size-34 text-primary"></i>
            <h6 class="mt-2">
              Apply to Yabatech
            </h6>
          </a>
          <a href="#" class="card p-4 hover:primary">
            <i class="ti-announcement font-size-34 text-primary"></i>
            <h6 class="mt-2">
              Carrers
            </h6>
          </a>
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
          <img src="assets/img/site/rector4.jpg"  height="80%" width="250px" alt=""/>
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
            <img class="w-100" src="assets/img/262x230/1.jpg" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">Dr. registra</p>
            <a href="#" class="h5">
              Regista Yaba college of Technology
            </a>
          </div>
        </div>
        <div class="list-card align-items-center marginTop-30">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="assets/img/262x230/2.jpg" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">Dr. Students</p>
            <a href="#" class="h5">
              Director of Students Affairs
            </a>
          </div>
        </div>
        <div class="list-card align-items-center marginTop-30">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="assets/img/262x230/3.jpg" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">Dr. Adigun</p>
            <a href="#" class="h5">
              Director of CITM 
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
    <section class="padding-y-10 bg-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
       <h2 class="mb-4">
      Latest News
      </h2>
      <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
     </div>
      <div class="col-12">
       <div class="owl-carousel arrow-on-hover" data-state-outer-class="py-3" data-space="30" data-arrow="true" data-loop="true">
         <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
          <div class="card-body">
            <h4>
              Accounting
            </h4>
            <p class="text-primary">
              Western Governors University
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
       
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
          <div class="card-body">
            <h4>
              Human Resources
            </h4>
            <p class="text-primary">
              Cedarville University
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
       
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
          <div class="card-body">
            <h4>
              Engineering
            </h4>
            <p class="text-primary">
              University of Connecticut
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
        
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
          <div class="card-body">
            <h4>
              Engineering
            </h4>
            <p class="text-primary">
              University of Connecticut
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere kurus quodk
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
        
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
          <div class="card-body">
            <h4>
              Computer Engineering
            </h4>
            <p class="text-primary">
              University of Connecticut
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere kurus quodk
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
       </div>
      </div>
      <div class="col-12 mt-5 text-center">
        <a href="#" class="btn btn-primary">
          See All Degrees
        </a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
       <section class="padding-y-5 bg-light">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center">
        <h2 class="mb-4">
          Upcoming Events
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div> 
    </div> <!-- END row-->
    
    <div class="row mt-4">
 
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".1s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              Open Schools for Open Societies 2018
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               184 Main Collins Street
            </li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".2s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              Conference on Early School Leaving
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               184 Main Collins Street
            </li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".3s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              A collection of Innovative and Inspiring Resources
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               184 Main Collins Street
            </li>
          </ul>
        </div>
      </div>  
 
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".1s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              A collection of Innovative and Inspiring Resources
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               184 Main Collins Street
            </li>
          </ul>
        </div>
      </div> 
      
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".2s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              Open Schools for Open Societies 2018
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               184 Main Collins Street
            </li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".3s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              Conference on Early School Leaving
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               184 Main Collins Street
            </li>
          </ul>
        </div>
      </div>
     
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

        <!-- END container-->
    </section>
    <section class="paddingTop-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Yabatech on Instagram</h2>
                    <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                </div>
            </div>
            <!-- END row-->

            <div class="row marginTop-60">
                <div
                    class="owl-carousel arrow-edge arrow-black"
                    data-space="0"
                    data-items="4"
                    data-arrow="true"
                    data-tablet-items="2"
                    data-mobile-items="1"
                >
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/1.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/1.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/2.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/2.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/3.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/3.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/4.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/4.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/5.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/5.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/1.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/1.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                    <div class="hover:parent">
                        <img
                            class="w-100 transition-0_3 hover:zoomin"
                            src="assets/img/384x320/2.jpg"
                            alt=""
                        />
                        <div
                            class="card-img-overlay transition-0_3 flex-center bg-black-0_7 hover:show"
                        >
                            <a
                                href="assets/img/384x320/2.jpg"
                                data-fancybox="gallery1"
                                class="iconbox iconbox-md bg-white ti-zoom-in text-primary"
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
