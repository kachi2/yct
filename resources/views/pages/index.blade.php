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

    <!-- Start section-->

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="text-right">
                        <img src="assets/img/site/rector4.jpg" alt=""/>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 mt-3">
                    <h2>
                        <small class="text-primary d-block"> Hello, and </small>
                        Welcome to Yabatech.
                    </h2>
                    <p class="lead">
                        People make a university great, so whether you are a prospective
                        student, current student, professor.
                    </p>
                    <p>
                        Investig ationes demons trave wanrunt lectores legere liushgfy
                        quod legunt saeph claritas nvestig ationes demons trave rugngt
                        investiga legere liushgfy quod legunt saeph claritas nvestig
                        ationes.
                    </p>
                    <h4 class="mt-2">Engr. Obafemi Omokungbe</h4>
                    <p>
                        Rector, <br/>
                        Yaba College of Technology
                    </p>
                    <img src="assets/img/sign.png" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section
        class="paddingTop-60 paddingBottom-100"
        data-dark-overlay="6"
        style="
        background-size: cover;
        background: url({{ asset('./assets/img/site/graduate.jpg') }}) no-repeat fixed;
      "
    >
        <div class="container">
            <div class="row text-center text-white">
                <div
                    class="col-lg-3 col-md-6 mt-5 wow zoomIn"
                    data-wow-delay=".1"
                    style="visibility: visible; animation-name: zoomIn"
                >
                    <h2 class="h1 text-primary">520</h2>
                    <p class="lead">All Courses</p>
                </div>

                <div
                    class="col-lg-3 col-md-6 mt-5 wow zoomIn"
                    data-wow-delay=".2"
                    style="visibility: visible; animation-name: zoomIn"
                >
                    <h2 class="h1 text-primary">690</h2>
                    <p class="lead">Trusted Tutors</p>
                </div>

                <div
                    class="col-lg-3 col-md-6 mt-5 wow zoomIn"
                    data-wow-delay=".3"
                    style="visibility: visible; animation-name: zoomIn"
                >
                    <h2 class="h1 text-primary">235K</h2>
                    <p class="lead">Total Students</p>
                </div>

                <div
                    class="col-lg-3 col-md-6 mt-5 wow zoomIn"
                    data-wow-delay=".4"
                    style="visibility: visible; animation-name: zoomIn"
                >
                    <h2 class="h1 text-primary">150K</h2>
                    <p class="lead">Success Stories</p>
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
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
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white mb-md-4">
                    <h2 class="mb-4">Upcoming Events</h2>
                    <div class="width-3rem height-4 rounded bg-white mx-auto"></div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/360x220/1.jpg" alt=""/>
                        <div class="card-body">
                            <h4 class="h5">Yabatech Panel Examines Future of Cities</h4>
                            <ul class="list-unstyled my-4 line-height-xl">
                                <li>
                                    <i class="ti-time mr-2 text-primary"></i>
                                    April 13, 2018 @ 8:00 am
                                </li>
                                <li>
                                    <i class="ti-location-pin mr-2 text-primary"></i>
                                    184 Main Collins Street
                                </li>
                            </ul>
                            <a href="#" class="text-primary">
                                View Details
                                <i class="ti-angle-double-right small"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END col-md-4-->

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/360x220/2.jpg" alt=""/>
                        <div class="card-body">
                            <h4 class="h5">Farmer's Market at Yabatech, Collins Street</h4>
                            <ul class="list-unstyled my-4 line-height-xl">
                                <li>
                                    <i class="ti-time mr-2 text-primary"></i>
                                    April 13, 2018 @ 8:00 am
                                </li>
                                <li>
                                    <i class="ti-location-pin mr-2 text-primary"></i>
                                    184 Main Collins Street
                                </li>
                            </ul>
                            <a href="#" class="text-primary">
                                View Details
                                <i class="ti-angle-double-right small"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END col-md-4-->

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/360x220/3.jpg" alt=""/>
                        <div class="card-body">
                            <h4 class="h5">A Conversation with Wynton Marsalis</h4>
                            <ul class="list-unstyled my-4 line-height-xl">
                                <li>
                                    <i class="ti-time mr-2 text-primary"></i>
                                    April 13, 2018 @ 8:00 am
                                </li>
                                <li>
                                    <i class="ti-location-pin mr-2 text-primary"></i>
                                    184 Main Collins Street
                                </li>
                            </ul>
                            <a href="#" class="text-primary">
                                View Details
                                <i class="ti-angle-double-right small"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END col-md-4-->
                <div class="col-12 mt-5 text-center">
                    <a href="#" class="btn btn-outline-white-hover">More Events</a>
                </div>
            </div>
            <!-- END row-->
        </div>
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
