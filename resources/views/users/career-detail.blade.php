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
            <h2 class="text-white">Pages</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item">Description</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-100 bg-light-v4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="card padding-30 shadow-v1 marginTop-30">
                        <div class="mb-5">
                            <h4 class="mb-3">Description</h4>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me that doming vulputate the
                                molestie Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volut pat. Ut wisi enim ad minim
                                veniam, quis nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat. Claritas est
                                etiam processus dynamicus, qui sequitur mutationem
                                consuetudium lectorum.
                            </p>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3"></h4>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue is
                                nihil imper per tem por legere me that doming vulputate the
                                molestie Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna.
                            </p>
                            <ul class="list-unstyled list-style-icon list-icon-bullet">
                                <li>
                                    Build next-generation web applications with a focus on the
                                    client side.
                                </li>
                                <li>
                                    Redesign UI's, implement new UI's, and pick up Java as
                                    necessary.
                                </li>
                                <li>
                                    Explore and design dynamic and compelling consumer
                                    experiences.
                                </li>
                                <li>
                                    Design and build scalable framework for web applications.
                                </li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3"></h4>
                            <ul class="list-unstyled list-style-icon list-icon-bullet">
                                <li>
                                    Build next-generation web applications with a focus on the
                                    client side.
                                </li>
                                <li>
                                    Redesign UI's, implement new UI's, and pick up Java as
                                    necessary.
                                </li>
                                <li>
                                    Explore and design dynamic and compelling consumer
                                    experiences.
                                </li>
                                <li>
                                    Design and build scalable framework for web applications.
                                </li>
                                <li>
                                    Development experience designing object-oriented JavaScript.
                                </li>
                                <li>
                                    Experience with user interface frameworks such as XUL, Flex
                                    and XAML.
                                </li>
                                <li>Knowledge of user interface design.</li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3"></h4>
                            <ul class="list-unstyled list-style-icon list-icon-bullet">
                                <li>
                                    Build next-generation web applications with a focus on the
                                    client side.
                                </li>
                                <li>
                                    Redesign UI's, implement new UI's, and pick up Java as
                                    necessary.
                                </li>
                                <li>
                                    Explore and design dynamic and compelling consumer
                                    experiences.
                                </li>
                                <li>
                                    Design and build scalable framework for web applications.
                                </li>
                            </ul>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">Share on :</li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-facebook iconbox iconbox-sm"
                                ><i class="ti-facebook"></i
                                    ></a>
                                <a href="#" class="btn btn-twitter iconbox iconbox-sm"
                                ><i class="ti-twitter"></i
                                    ></a>
                                <a href="#" class="btn btn-google-plus iconbox iconbox-sm"
                                ><i class="ti-google"></i
                                    ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card padding-30 shadow-v1 marginTop-30">
                        <h4 class="mb-3">Quick Links</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                Chairman Governing Council
                            </li>
                            <li class="mb-3">
                               Deputy Rector Academics
                            </li>
                            <li class="mb-3">
                                Deputy Rector Admin
                                
                            </li>
                            <li class="mb-3">
                             Registrar
                            </li>
                            <li class="mb-3">
                             Polytechnic Librarian
                            </li>
                        </ul>
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
