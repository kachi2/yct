@extends('pages.layout.app')
@section('styles')
    <!-- Include additional page css files here-->
@endsection
@section('content')
    <div
        class="py-5 bg-cover"
        data-dark-overlay="6"
        style="background: url({{ asset('./assets/img/site/categ.jpg') }}) no-repeat"
    >
        <div class="container">
            <h2 class="text-white">About Yabatech</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">About Yabatech</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-100 border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mr-auto text-center">
                    <img
                        class="wow fadeInLeft w-100 rounded"
                        src="assets/img/384x320/3.jpg"
                        alt=""
                        style="visibility: visible; animation-name: fadeInLeft"
                    />
                </div>

                <div class="col-lg-6">
                    <h2><span class="text-primary">Our</span> Vision</h2>
                    <div
                        class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"
                    ></div>
                    <p class="mb-5">
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper iper tem por legere me that doming vulputate velit esse
                        molestie possim wisi enim ad placerat facer possim.
                    </p>
                    <ul class="list-unstyled list-style-icon list-icon-check-circle">
                        <li>Professional and easy to use software</li>
                        <li>Setup and installations takes 30 seconds</li>
                        <li>Perfect for any device with pixel perfect design</li>
                        <li>Setup and installations really really fast</li>
                    </ul>
                </div>
                <!-- END col-lg-6 ml-auto-->
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>

    <section class="padding-y-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Our Mission</h2>
                    <div
                        class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"
                    ></div>
                    <p class="mb-5">
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper iper tem por legere me that doming vulputate velit esse
                        molestie possim wisi enim ad placerat facer possim.
                    </p>
                    <div class="media mb-4">
                        <i class="ti-user text-primary font-size-30 mt-2"></i>
                        <div class="media-body pl-3">
                            <h4 class="h5">Work With Any Team</h4>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me that doming vulputate.
                            </p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <i class="ti-basketball text-primary font-size-30 mt-2"></i>
                        <div class="media-body pl-3">
                            <h4 class="h5">A Productivity Platform</h4>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me that doming vulputate.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END col-lg-6 ml-auto-->
                <div class="col-lg-5 mb-4 mr-auto text-center">
                    <img
                        class="wow fadeInRight w-100 rounded"
                        src="assets/img/360x300/4.jpg"
                        alt=""
                        style="visibility: visible; animation-name: fadeInRight"
                    />
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>

    <section class="padding-y-100 bg-primary wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h4 class="text-white">What Our People Say</h4>
                </div>

                <div class="col-lg-10 mx-auto">
                    <div
                        class="owl-carousel dots-white"
                        data-items="1"
                        data-space="30"
                        data-dots="true"
                        data-autoplay="false"
                    >
                        <div class="card card-body p-lg-5 text-center">
                            <img
                                class="iconbox iconbox-xxxl mx-auto z-index-10"
                                src="assets/img/avatar/4.jpg"
                                alt=""
                            />
                            <div class="my-4">
                                <h6>Adeniran Opeyemi</h6>
                                <p class="text-gray mb-0">Creative Director</p>
                            </div>
                            <p class="mb-0 lead text-dark">
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me doming vulputate velit esse
                                molestie possim. Ut wisi enim ad placerat facer Ut wisi enim
                                ad placerat facer.
                            </p>
                        </div>

                        <div class="card card-body p-lg-5 text-center">
                            <img
                                class="iconbox iconbox-xxxl mx-auto z-index-10"
                                src="assets/img/avatar/5.jpg"
                                alt=""
                            />
                            <div class="my-4">
                                <h6>Horpey Eureka</h6>
                                <p class="text-gray mb-0">Creative Director</p>
                            </div>
                            <p class="mb-0 lead text-dark">
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me doming vulputate velit esse
                                molestie possim. Ut wisi enim ad placerat facer Ut wisi enim
                                ad placerat facer.
                            </p>
                        </div>

                        <div class="card card-body p-lg-5 text-center">
                            <img
                                class="iconbox iconbox-xxxl mx-auto z-index-10"
                                src="assets/img/avatar/6.jpg"
                                alt=""
                            />
                            <div class="my-4">
                                <h6>Adewale Omooba</h6>
                                <p class="text-gray mb-0">Creative Director</p>
                            </div>
                            <p class="mb-0 lead text-dark">
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me doming vulputate velit esse
                                molestie possim. Ut wisi enim ad placerat facer Ut wisi enim
                                ad placerat facer.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END col-12 -->
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
