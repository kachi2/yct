@extends('pages.layout.app')
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

        
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
  </a>
     <div class="owl-carousel arrow-on-hover text-center padding-y-10 flex-center bg-cover" data-dark-overlay="6"
          data-space="10"
          data-items="5"
          data-arrow="true"
          data-loop="false"
          data-tablet="4"
          data-delay = "13923"
          >

          <a href="https:portal.yabatech.edu.ng" class="card p-4 hover:primary">
           
            <h6 class="mt-2">
             Students Portals
            </h6>
          </a>
          <a href="https://portal.yabatech.edu.ng/payment/" class="card p-4 hover:primary">
           
            <h6 class="mt-2">
              Payments
            </h6>
          </a>
          <a href="{{route('more.news')}}" class="card p-4 hover:primary">
           
            <h6 class="mt-2">
              News and Events
            </h6>
          </a>
          <a href="https://erp.yabatech.edu.ng/yabaapplication/" class="card p-4 hover:primary">
           
            <h6 class="mt-2">
              Apply to Yabatech
            </h6>
          </a>
          <a href="https://staff.yabatech.edu.ng/index.php" class="card p-4 hover:primary">
         
            <h6 class="mt-2">
              Staff Portal
            </h6>
          </a>
        </div>
        </div>
    </div>
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
        <center>  <img src="assets/img/site/rector4.jpg"  height="330px" width="350px" alt=""/></center>
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
        <div class="list-card align-items-center marginTop-30">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="{{asset('/assets/img/adi.jpeg')}}" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">Dr. Adigun</p>
            <a href="#" class="h5">
              Director CITM 
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
              Open Schools for Open Societies 
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2021 @ 8:00 am
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
               April 13, 2021 @ 8:00 am
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
               April 13, 2021 @ 8:00 am
            </li>
           
          </ul>
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


    <section class="padding-y-5">
        <div class="container-fluid">
      <div class="col-12 ">
<div class="row">
<html>
<title>ResearchGate</title><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta http-equiv="expires" content="0"/><style>.plugin-base{font-family:"Roboto",Arial,sans-serif;font-size:.75rem}.plugin-base a{text-decoration:none}.plugin-base a:hover{text-decoration:underline}.plugin-base ul,.plugin-base ol{list-style:none;padding:0;margin:0}.plugin-base img{border:0;outline:none}.plugin-base .img-link{display:block}.plugin-base .img-link img{max-width:100%;max-height:100%}.plugin-base .dept-item-container,.plugin-base .dept-stats,.plugin-base .facepile,.plugin-base .pub-list,.plugin-base .pub-list-headline{padding-left:20px;padding-right:20px}.plugin-base .dept-item,.plugin-base .dept-stats,.plugin-base .facepile{margin:20px 0}.plugin-base .dept-item{position:relative;*zoom:1;padding-right:0;padding-left:40px;line-height:16px}.plugin-base .dept-item:before,.plugin-base .dept-item:after{display:table;content:'';line-height:0}.plugin-base .dept-item:after{clear:both}.plugin-base .dept-item>.indent-left{margin-left:-40px;width:30px;float:left}.plugin-base .dept-item .img-link{width:30px;height:30px;overflow:hidden;background-color:#fff}.plugin-base .stat{margin:10px 0}.plugin-base .stat a{*zoom:1;display:block}.plugin-base .stat a:before,.plugin-base .stat a:after{display:table;content:'';line-height:0}.plugin-base .stat a:after{clear:both}.plugin-base .stat .stat-value{font-weight:700;line-height:16px;float:left;margin-right:5px}.plugin-base .stat .stat-label{font-size:.75rem;line-height:16px;float:left}.plugin-base .facepile{*zoom:1}.plugin-base .facepile:before,.plugin-base .facepile:after{display:table;content:'';line-height:0}.plugin-base .facepile:after{clear:both}.plugin-base .facepile .face{float:left;height:30px;width:30px;margin-right:3px;margin-bottom:3px}.plugin-base .pub-list-container{overflow-y:auto}.plugin-base .pub-list-headline,.plugin-base .jobs-list-header{margin-bottom:10px;font-size:.75rem;line-height:11px}.plugin-base .pub,.plugin-base .job-list-item{padding-top:10px;padding-bottom:10px}.plugin-base .pub:last-of-type,.plugin-base .job-list-item:last-of-type{border-bottom:0}.plugin-base .pub .title,.plugin-base .job-list-item .title{font-weight:700;margin-bottom:5px}.plugin-base .pub .authors,.plugin-base .job-list-item .authors{width:100%;white-space:nowrap;word-wrap:normal;overflow:hidden;text-overflow:ellipsis}.plugin-base .logobar{padding:4px;line-height:24px;display:block;*zoom:1;text-decoration:none}.plugin-base .logobar:before,.plugin-base .logobar:after{display:table;content:'';line-height:0}.plugin-base .logobar:after{clear:both}.plugin-base .ico-logo{display:inline-block;height:16px;width:16px;background-image:url("/m/426351313275430/images/favicon/favicon.ico");background-size:16px;float:right}.plugin-base .logobar-text{display:inline-block;line-height:16px;font-size:.6875rem;float:left}.plugin-base .feed-item{word-break:break-all;word-wrap:break-word;position:relative;*zoom:1;padding-right:0;padding-left:40px;*zoom:1}.plugin-base .feed-item:before,.plugin-base .feed-item:after{display:table;content:'';line-height:0}.plugin-base .feed-item:after{clear:both}.plugin-base .feed-item>.indent-left{margin-left:-40px;width:30px;float:left}.plugin-base .feed-item .c-img-s{padding-top:3px}.plugin-base .feed-item .indent-container{position:relative;*zoom:1;padding-right:0;padding-left:15px}.plugin-base .feed-item .indent-container:before,.plugin-base .feed-item .indent-container:after{display:table;content:'';line-height:0}.plugin-base .feed-item .indent-container:after{clear:both}.plugin-base .feed-item .indent-container>.indent-left{margin-left:-15px;width:10px;float:left}.plugin-base .feed-item .people-link{display:block;margin-bottom:3px;font-weight:700}.plugin-base .feed-item:before,.plugin-base .feed-item:after{display:table;content:'';line-height:0}.plugin-base .feed-item:after{clear:both}.plugin-base .ico-pub{display:inline-block;width:10px;height:13px;opacity:0.6;background-image:url("/m/41918735914212/images/icons/pub.png")}.plugin-theme-light{border:1px solid #ddd;background-color:transparent;color:#333}.plugin-theme-light a{color:#333}.plugin-theme-light .people-link{color:#333}.plugin-theme-light .logobar{background-color:rgba(0,0,0,0.06);border-top:1px solid #ddd;transition:0.2s linear background-color, 0.2s linear color}.plugin-theme-light .pub{border-bottom:1px solid #ddd}.plugin-theme-light .pub-list-container{border-top:1px solid #ddd}.plugin-theme-light .meta,.plugin-theme-light .meta a{color:#999}.plugin-theme-dark{border:1px solid #777;background-color:transparent;color:#fff;text-shadow:0 1px 2px rgba(0,0,0,0.35)}.plugin-theme-dark a{color:#fff}.plugin-theme-dark .people-link{color:#fff}.plugin-theme-dark .logobar{background-color:rgba(0,0,0,0.06);border-top:1px solid #777;transition:0.2s linear background-color, 0.2s linear color}.plugin-theme-dark .pub{border-bottom:1px solid #777}.plugin-theme-dark .pub-list-container{border-top:1px solid #777}.plugin-theme-dark .meta,.plugin-theme-dark .meta a{color:#bbb}.plugin-theme-dark .ico-pub{opacity:0.6;background-image:url("/m/4513045409185/images/icons/pub-white.png")}.plugin-theme-dark .facepile{padding-right:15px}.plugin-theme-dark .facepile .face{border:1px solid #fff}
</style><head>
</head>
<body>
<div class="plugin-container"> <div class="plugin-base plugin-theme-light"> <div class="dept-item-container"> <div class="dept-item"> <div class="indent-left"> <a target="_blank" href="https://www.researchgate.net/institution/Yaba-College-of-Technology" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/institution.image/AS%3A267467933323264%401440780732445_m" title="Yaba College of Technology" alt="Yaba College of Technology"/> </a> </div> <div> <a target="_blank" rel="noopener" href="https://www.researchgate.net/institution/Yaba-College-of-Technology"> <strong>Yaba College of Technology</strong> </a> </div> </div> </div>  <div class="dept-stats">  <div class="stat"> <a href="https://www.researchgate.net/institution/Yaba-College-of-Technology" target="_blank" rel="noopener"> <div class="stat-value">266</div> <div class="stat-label meta">Publications</div> </a> </div>  <div class="stat"> <a href="https://www.researchgate.net/institution/Yaba-College-of-Technology" target="_blank" rel="noopener"> <div class="stat-value">436.91</div> <div class="stat-label meta">Total RG Score</div> </a> </div> </div>   <div class="facepile">  <div class="face"> <a href="https://www.researchgate.net/profile/Oyeranmi-Adigun" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/932374653198336-1599306848339_Q64/Oyeranmi-Adigun.jpg" title="Oyeranmi Adigun" alt="Oyeranmi Adigun" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olawale-Olatidoye-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/928383735185414-1598355339839_Q64/Olawale-Olatidoye-2.jpg" title="Olawale Paul Olatidoye" alt="Olawale Paul Olatidoye" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Funmilayo-Doherty" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/277634572406817-1443204648442_Q64/Funmilayo-Doherty.jpg" title="Funmilayo Victoria Doherty" alt="Funmilayo Victoria Doherty" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Nwanneka-Ofodile" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/962608500850688-1606515159928_Q64/Nwanneka-Ofodile.jpg" title="Nwanneka Ofodile" alt="Nwanneka Ofodile" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Ikegwu-Emmanuel" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/936038763593730-1600180440157_Q64/Ikegwu-Emmanuel.jpg" title="Ikegwu Emmanuel" alt="Ikegwu Emmanuel" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Abiodun-Adebayo-Oyetoro" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/955547490729986-1604831683518_Q64/Abiodun-Adebayo-Oyetoro.jpg" title="Abiodun Omowonuola Adebayo-Oyetoro" alt="Abiodun Omowonuola Adebayo-Oyetoro" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Yekini-Nureni" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/285747711102976-1445138971387_Q64/Yekini-Nureni.jpg" title="Yekini Nureni" alt="Yekini Nureni" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Oluseun-Popoola" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/447474809741312-1483697716366_Q64/Oluseun-Popoola.jpg" title="Oluseun Popoola" alt="Oluseun Popoola" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Oladeinde-Ogundipe-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/544243841867782-1506769251998_Q64/Oladeinde-Ogundipe-2.jpg" title="Oladeinde Olatunde Ogundipe" alt="Oladeinde Olatunde Ogundipe" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Folasade-Aminu" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/885608176160770-1588156851919_Q64/Folasade-Aminu.jpg" title="Folasade Aminu" alt="Folasade Aminu" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olabode-Adewoye" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/824446344523777-1573574734297_Q64/Olabode-Adewoye.jpg" title="Olabode Adewoye" alt="Olabode Adewoye" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Macaulay-Owen" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/906001347788800-1593018962159_Q64/Macaulay-Owen.jpg" title="Macaulay Mfon Owen" alt="Macaulay Mfon Owen" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Nwabueze-Okolie" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/934581553336320-1599833014260_Q64/Nwabueze-Okolie.jpg" title="Nwabueze Peter Okolie" alt="Nwabueze Peter Okolie" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Oyelola-Ot" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/617858866356224-1524320441030_Q64/Oyelola-Ot.jpg" title="Oyelola O.T." alt="Oyelola O.T." width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Hannah-Olaleye" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/765671789056001-1559561788270_Q64/Hannah-Olaleye.jpg" title="Hannah Olaleye" alt="Hannah Olaleye" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Lateef-Agbetunde" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/676768033808384-1538365481080_Q64/Lateef-Agbetunde.jpg" title="Lateef Agbetunde" alt="Lateef Agbetunde" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Kingsley-Ajekwene" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/290192742207492-1446198749975_Q64/Kingsley-Ajekwene.jpg" title="Kingsley Kema Ajekwene" alt="Kingsley Kema Ajekwene" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Simon-Iyke" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/398841724588032-1472102685028_Q64/Simon-Iyke.jpg" title="Simon Iyke" alt="Simon Iyke" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Rufai-Mohammed-Mutiu-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/675356554059783-1538028958797_Q64/Rufai-Mohammed-Mutiu-2.jpg" title="Rufai Mohammed Mutiu" alt="Rufai Mohammed Mutiu" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Adesola-Adetukasi" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/902330350309377-1592143728721_Q64/Adesola-Adetukasi.jpg" title="Adesola Adetukasi" alt="Adesola Adetukasi" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Ismaila-Badmus" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/300019946147842-1448541737262_Q64/Ismaila-Badmus.jpg" title="Ismaila Badmus" alt="Ismaila Badmus" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Mike-Ogiugo" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/713120486014977-1547032581242_Q64/Mike-Ogiugo.jpg" title="Mike Ogiugo" alt="Mike Ogiugo" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Leonard-Adamu" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/367420318470145-1464611238511_Q64/Leonard-Adamu.jpg" title="Leonard Adamu" alt="Leonard Adamu" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Femi-Akinwande" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/564212281294870-1511530098862_Q64/Femi-Akinwande.jpg" title="Femi Akinwande" alt="Femi Akinwande" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Tolulope-Oresanya" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/598939539619845-1519809722489_Q64/Tolulope-Oresanya.jpg" title="Tolulope Oresanya" alt="Tolulope Oresanya" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Oluwasegun-Oladipo-4" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/279260653735947-1443592336264_Q64/Oluwasegun-Oladipo-4.jpg" title="Oluwasegun Oladipo" alt="Oluwasegun Oladipo" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Mosud-Ajala" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/282861677629441-1444450887161_Q64/Mosud-Ajala.jpg" title="Mosud Ajala" alt="Mosud Ajala" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Idowu-Aneyo" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/832793026232325-1575564738887_Q64/Idowu-Aneyo.jpg" title="Idowu Aneyo" alt="Idowu Aneyo" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Rufai-Mutiu" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/483149546299394-1492203236713_Q64/Rufai-Mutiu.jpg" title="Rufai Mutiu" alt="Rufai Mutiu" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/David-Babajide" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/571361538080768-1513234614826_Q64/David-Babajide.jpg" title="David Babajide" alt="David Babajide" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Abdullahi-Adeola" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/691105930698765-1541783902626_Q64/Abdullahi-Adeola.jpg" title="Abdullahi Adeola" alt="Abdullahi Adeola" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Ani-Emmanuel" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/936008833044488-1600173304903_Q64/Ani-Emmanuel.jpg" title="Ani Emmanuel" alt="Ani Emmanuel" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Oluwole-Akinjayeju" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/939274924986369-1600952001697_Q64/Oluwole-Akinjayeju.jpg" title="Oluwole Akinjayeju" alt="Oluwole Akinjayeju" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Ndubuisi-Nwakanma" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/941150785511425-1601399241352_Q64/Ndubuisi-Nwakanma.jpg" title="Ndubuisi Nwakanma" alt="Ndubuisi Nwakanma" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olanrewaju-Ojo" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/782716043808768-1563625455092_Q64/Olanrewaju-Ojo.jpg" title="Olanrewaju Ojo" alt="Olanrewaju Ojo" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Abiodun-Adeoso" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/939773749362708-1601070930623_Q64/Abiodun-Adeoso.jpg" title="Abiodun Adeoso" alt="Abiodun Adeoso" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Adeniyi-Sanyaolu" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/924514925936640-1597432943302_Q64/Adeniyi-Sanyaolu.jpg" title="Adeniyi Sanyaolu" alt="Adeniyi Sanyaolu" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olufemi-Akinsola-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/538043140538368-1505290889232_Q64/Olufemi-Akinsola-2.jpg" title="Olufemi E Akinsola" alt="Olufemi E Akinsola" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Moses-Yibowei" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/439675019108352-1481838101010_Q64/Moses-Yibowei.jpg" title="Moses Yibowei" alt="Moses Yibowei" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Irewolede-Ijaola" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/715901296996354-1547695578111_Q64/Irewolede-Ijaola.jpg" title="Irewolede Ijaola" alt="Irewolede Ijaola" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Semiu-Amosun" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/816923554111490-1571781161500_Q64/Semiu-Amosun.jpg" title="Semiu Amosun" alt="Semiu Amosun" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olusola-Johnson-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/272231821475900-1441916532729_Q64/Olusola-Johnson-2.jpg" title="Olusola Johnson" alt="Olusola Johnson" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Adekunle-Ayodeji" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/272744394784801-1442038739687_Q64/Adekunle-Ayodeji.jpg" title="Adekunle Ayodeji" alt="Adekunle Ayodeji" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Samuel-Ajibiye" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/945821222727684-1602512760780_Q64/Samuel-Ajibiye.jpg" title="Samuel Ajibiye" alt="Samuel Ajibiye" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olabisi-Ajakaiye-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/653275850371074-1532764508745_Q64/Olabisi-Ajakaiye-2.jpg" title="Olabisi Ajakaiye" alt="Olabisi Ajakaiye" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Saidi-Amusa" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/989296752357377-1612878134814_Q64/Saidi-Amusa.jpg" title="Saidi Amusa" alt="Saidi Amusa" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Sikiru-Ojokuku" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/285352142098432-1445044660129_Q64/Sikiru-Ojokuku.jpg" title="Sikiru Abiola Ojokuku" alt="Sikiru Abiola Ojokuku" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Omowunmi-Kolawole-Joseph" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/899185054347267-1591393831474_Q64/Omowunmi-Kolawole-Joseph.jpg" title="Omowunmi Kolawole-Joseph" alt="Omowunmi Kolawole-Joseph" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Taiye-Olusegun-Joseph" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/454777386606594-1485438786662_Q64/Taiye-Olusegun-Joseph.jpg" title="Taiye Shade Olusegun-Joseph" alt="Taiye Shade Olusegun-Joseph" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Eweina-Babatunde" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/490543277973505-1493966039649_Q64/Eweina-Babatunde.jpg" title="Eweina Abdulkarim Babatunde" alt="Eweina Abdulkarim Babatunde" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Adebari-Adebayo" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/312287842242562-1451466631320_Q64/Adebari-Adebayo.jpg" title="Adebari F Adebayo" alt="Adebari F Adebayo" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Moruf-Adebakin" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/688924615782410-1541263836929_Q64/Moruf-Adebakin.jpg" title="Moruf Adebakin" alt="Moruf Adebakin" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Beatrice-Edeghagba" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/894755227578368-1590337678447_Q64/Beatrice-Edeghagba.jpg" title="Beatrice Edeghagba" alt="Beatrice Edeghagba" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Success-Moses" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/882681369866254-1587459046590_Q64/Success-Moses.jpg" title="Success Moses" alt="Success Moses" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Adekunle-Obisanya" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/650033519157329-1531991476746_Q64/Adekunle-Obisanya.jpg" title="Adekunle Obisanya" alt="Adekunle Obisanya" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Lauretta-Ofodile" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/272647753826326-1442015698602_Q64/Lauretta-Ofodile.jpg" title="Lauretta Ofodile" alt="Lauretta Ofodile" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Godwin-Ovioma" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/634918384197633-1528387747581_Q64/Godwin-Ovioma.jpg" title="Godwin Ovioma" alt="Godwin Ovioma" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Bakare-Akeem" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/900317940023316-1591663932820_Q64/Bakare-Akeem.jpg" title="Bakare kolawole Akeem" alt="Bakare kolawole Akeem" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Abubakar-Olaseni-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/718931656454147-1548418072966_Q64/Abubakar-Olaseni-2.jpg" title="Abubakar MOBOLAJI Olaseni" alt="Abubakar MOBOLAJI Olaseni" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Olabowale-Aladeokin" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/932474230161409-1599330589942_Q64/Olabowale-Aladeokin.jpg" title="Olabowale Aladeokin" alt="Olabowale Aladeokin" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Badru-Gbolahan" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/272184199348233-1441905178203_Q64/Badru-Gbolahan.jpg" title="Badru Gbolahan" alt="Badru Gbolahan" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Nnedinma-Ayika" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/272762803585026-1442043128048_Q64/Nnedinma-Ayika.jpg" title="Nnedinma Ayika" alt="Nnedinma Ayika" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Ajibike-Itegboje" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/294674179870721-1447267207130_Q64/Ajibike-Itegboje.jpg" title="Ajibike Itegboje" alt="Ajibike Itegboje" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Emughiphel-Igoma" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/502607212802048-1496842305280_Q64/Emughiphel-Igoma.jpg" title="Emughiphel Igoma" alt="Emughiphel Igoma" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Owojuyigbe-Ayodeji" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/580972825124864-1515526123510_Q64/Owojuyigbe-Ayodeji.jpg" title="Owojuyigbe Ayodeji" alt="Owojuyigbe Ayodeji" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Samuel-Oladipo-5" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/644702332284929-1530720422677_Q64/Samuel-Oladipo-5.jpg" title="Samuel Oladipo" alt="Samuel Oladipo" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Joy-Odubunmi" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/683142776107009-1539885338566_Q64/Joy-Odubunmi.jpg" title="Joy Odubunmi" alt="Joy Odubunmi" width="30" height="30"/> </a> </div>  <div class="face"> <a href="https://www.researchgate.net/profile/Adebayo-Oluwaseun-Caleb-2" target="_blank" class="img-link" rel="noopener"> <img src="https://i1.rgstatic.net/ii/profile.image/882139813916674-1587329929688_Q64/Adebayo-Oluwaseun-Caleb-2.jpg" title="Adebayo Oluwaseun Caleb" alt="Adebayo Oluwaseun Caleb" width="30" height="30"/> </a> </div>  </div>   <h5 class="pub-list-headline"> <a href="" target="_blank" rel="noopener">  Recent publications   </a> </h5> <div class="pub-list-container"> <ul class="pub-list">  <li class="pub">   <div class="title"> <a href="https://www.researchgate.net/publication/349631684_Access_to_educational_information_enabled_by_ICT_tools_in_the_Fort_Beaufort_Education_District_FBED_Eastern_Cape_South_Africa" target="_blank" title="Access to educational information enabled by ICT tools in the Fort Beaufort Education District (FBED), Eastern Cape, South Africa" rel="noopener"> Access to educational information enabled by ICT tools in the Fort Beaufort Education District (FBED... </a> </div> <div class="meta authors"> <a href="https://www.researchgate.net/scientific-contributions/SO-Oyediran-Tidings-2182804498" rel="noopener" target="_blank">S.O. Oyediran-Tidings</a> , <a href="https://www.researchgate.net/scientific-contributions/FH-Nekhwevha-2182905540" rel="noopener" target="_blank">F.H. Nekhwevha</a> , <a href="https://www.researchgate.net/scientific-contributions/EM-Ondari-Okemwa-2182905491" rel="noopener" target="_blank">E.M. Ondari-Okemwa</a> , <a href="https://www.researchgate.net/scientific-contributions/Oghenere-Salubi-2135430141" rel="noopener" target="_blank">Oghenere Salubi</a> </div>  </li>  <li class="pub">   <div class="title"> <a href="https://www.researchgate.net/publication/349297565_Evaluation_of_contaminants_removal_by_waste_stabilization_ponds_A_case_study_of_Siloam_WSPs_in_Vhembe_District_South_Africa" target="_blank" title="Evaluation of contaminants removal by waste stabilization ponds: A case study of Siloam WSPs in Vhembe District, South Africa" rel="noopener"> Evaluation of contaminants removal by waste stabilization ponds: A case study of Siloam WSPs in Vhem... </a> </div> <div class="meta authors"> <a href="https://www.researchgate.net/scientific-contributions/Joshua-N-Edokpayi-2050341342" rel="noopener" target="_blank">Joshua N Edokpayi</a> , <a href="https://www.researchgate.net/scientific-contributions/John-O-Odiyo-2002504022" rel="noopener" target="_blank">John O Odiyo</a> , <a href="https://www.researchgate.net/scientific-contributions/Oluwaseun-E-Popoola-2064963889" rel="noopener" target="_blank">Oluwaseun E Popoola</a> , <a href="https://www.researchgate.net/scientific-contributions/Titus-A-M-Msagati-11546671" rel="noopener" target="_blank">Titus A M Msagati</a> </div>  </li>  <li class="pub">   <div class="title"> <a href="https://www.researchgate.net/publication/349419249_Sustainable_Alternative_Ceiling_Boards_using_Palm_Kernel_Shell_PKS_and_Balanite_Shell_BS" target="_blank" title="Sustainable Alternative Ceiling Boards using Palm Kernel Shell (PKS) and Balanite Shell (BS)" rel="noopener"> Sustainable Alternative Ceiling Boards using Palm Kernel Shell (PKS) and Balanite Shell (BS) </a> </div> <div class="meta authors"> <a href="https://www.researchgate.net/scientific-contributions/Ichetaonye-S-I-2190145101" rel="noopener" target="_blank">Ichetaonye S. I.</a> , <a href="https://www.researchgate.net/scientific-contributions/Ajekwene-K-K-2126404891" rel="noopener" target="_blank">Ajekwene K. K.</a> , <a href="https://www.researchgate.net/scientific-contributions/Ulaeto-S-B-2129141045" rel="noopener" target="_blank">Ulaeto S. B</a> , <a href="https://www.researchgate.net/scientific-contributions/Yibowei-M-2190135987" rel="noopener" target="_blank">Yibowei M</a> , <a href="https://www.researchgate.net/scientific-contributions/Imran-khan-2190142903" rel="noopener" target="_blank">Imran khan</a> , <a href="https://www.researchgate.net/scientific-contributions/anish-khan-33453071" rel="noopener" target="_blank">anish khan</a> , <a href="https://www.researchgate.net/scientific-contributions/Abdullah-M-Asiri-42461945" rel="noopener" target="_blank">Abdullah M Asiri</a> </div>  </li>  <li class="pub">   <div class="title"> <a href="https://www.researchgate.net/publication/348828851_Development_characterization_and_comparison_of_spark_plasma-sintered_Gr-Cu_and_Gr-Al_composites_reinforced_with_SiC_and_ZrB2_particles_for_thermal_management" target="_blank" title="Development, characterization and comparison of spark plasma-sintered Gr–Cu and Gr–Al composites reinforced with SiC and ZrB2 particles for thermal management" rel="noopener"> Development, characterization and comparison of spark plasma-sintered Gr–Cu and Gr–Al composites rei... </a> </div> <div class="meta authors"> <a href="https://www.researchgate.net/scientific-contributions/T-B-Asafa-2001151407" rel="noopener" target="_blank">T. B. Asafa</a> , <a href="https://www.researchgate.net/scientific-contributions/M-O-Durowoju-2078947950" rel="noopener" target="_blank">M. O. Durowoju</a> , <a href="https://www.researchgate.net/scientific-contributions/S-Diouf-2030783519" rel="noopener" target="_blank">S. Diouf</a> , <a href="https://www.researchgate.net/scientific-contributions/M-B-Shongwe-2078945139" rel="noopener" target="_blank">M. B. Shongwe</a> , <a href="https://www.researchgate.net/scientific-contributions/B-L-Bayode-2124904696" rel="noopener" target="_blank">B. L. Bayode</a> , <a href="https://www.researchgate.net/scientific-contributions/K-O-Oladosu-2113428113" rel="noopener" target="_blank">K. O. Oladosu</a> , <a href="https://www.researchgate.net/scientific-contributions/T-Langa-2120631295" rel="noopener" target="_blank">T. Langa</a> , <a href="https://www.researchgate.net/scientific-contributions/P-A-Olubambi-72327320" rel="noopener" target="_blank">P. A. Olubambi</a> , <a href="https://www.researchgate.net/scientific-contributions/O-S-Ismail-2174583464" rel="noopener" target="_blank">O. S. Ismail</a> , <a href="https://www.researchgate.net/scientific-contributions/M-T-Ajala-2174569764" rel="noopener" target="_blank">M. T. Ajala</a> , <a href="https://www.researchgate.net/scientific-contributions/T-O-Olukokun-2188948465" rel="noopener" target="_blank">T. O. Olukokun</a> , <a href="https://www.researchgate.net/scientific-contributions/S-M-Ibn-Shamsah-2188928579" rel="noopener" target="_blank">S. M. Ibn Shamsah</a> </div>  </li>  </ul> </div>  <a href="" target="_blank" rel="noopener" class="logobar meta" rel="noopener"> <span class="ico-logo"></span> <span class="logobar-text"></span> </a> </div> </div></body>
</html>

</div>
   </div>         <!-- END row-->
        </div>
        <!-- END container-->
    </section>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
