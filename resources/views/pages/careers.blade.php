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
            <h2 class="text-white">Careers</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Careers</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-120 bg-light-v4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Our Benefits</h2>
                    <div
                        class="width-3rem height-4 rounded bg-primary mx-auto mb-4"
                    ></div>
                </div>

                <div class="col-md-6 mt-5">
                    <h4>Work From Anywhere</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper per tem por legere me that doming vulputate
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <h4>Paid Parental Leave</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper per tem por legere me that doming vulputate
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <h4>Flexible Hours</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper per tem por legere me that doming vulputate
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <h4>Wellness Program</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper per tem por legere me that doming vulputate
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <h4>Mentoring Program</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper per tem por legere me that doming vulputate
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <h4>Social Events</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue is nihil
                        imper per tem por legere me that doming vulputate
                    </p>
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>

    <section class="padding-y-120">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Open Positions</h2>
                    <div
                        class="width-3rem height-4 rounded bg-primary mx-auto mb-4"
                    ></div>
                    <p class="mt-5">
                        Following list displays our current required positions. This list
                        will update regularly.
                    </p>
                </div>
                <div class="col-12 mt-5">
                    <div class="shadow-v3 rounded">
                        <div
                            class="list-card align-items-center px-4 padding-y-30 border-bottom border-light"
                        >
                            <div class="col-md-8">
                                <h4>Digital Artist - School of Art</h4>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-3 mt-2">
                      <span class="badge badge-pill badge-success"
                      >Full Time</span
                      >
                                    </li>

                                    <li class="list-inline-item mr-3 mt-2">
                                        <span>₦35,000 - ₦95,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-right">
                                <a
                                    href="career-details.html"
                                    class="btn btn-outline-primary btn-pill"
                                >Apply Now</a
                                >
                            </div>
                        </div>

                        <div
                            class="list-card align-items-center px-4 padding-y-30 border-bottom border-light"
                        >
                            <div class="col-md-8">
                                <h4>Software Engineer - CITM</h4>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-3 mt-2">
                      <span class="badge badge-pill badge-warning"
                      >Part Time</span
                      >
                                    </li>

                                    <li class="list-inline-item mr-3 mt-2">
                                        <span>₦47,000 - ₦208,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-right">
                                <a
                                    href="career-details.html"
                                    class="btn btn-outline-primary btn-pill"
                                >Apply Now</a
                                >
                            </div>
                        </div>

                        <div
                            class="list-card align-items-center px-4 padding-y-30 border-bottom border-light"
                        >
                            <div class="col-md-8">
                                <h4>Human Resource Manager</h4>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-3 mt-2">
                                        <span class="badge badge-pill badge-info">Remotely</span>
                                    </li>

                                    <li class="list-inline-item mr-3 mt-2">
                                        <span>₦20,000 - ₦99,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-right">
                                <a
                                    href="career-details.html"
                                    class="btn btn-outline-primary btn-pill"
                                >Apply Now</a
                                >
                            </div>
                        </div>

                        <div
                            class="list-card align-items-center px-4 padding-y-30 border-bottom border-light"
                        >
                            <div class="col-md-8">
                                <h4>Data Scientist - CITM</h4>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-3 mt-2">
                      <span class="badge badge-pill badge-success"
                      >Full Time</span
                      >
                                    </li>

                                    <li class="list-inline-item mr-3 mt-2">
                                        <span>₦67,000 - ₦102,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-right">
                                <a
                                    href="career-details.html"
                                    class="btn btn-outline-primary btn-pill"
                                >Apply Now</a
                                >
                            </div>
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
