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
            <h2 class="text-white">Help & Support</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Help & Support</li>
            </ol>
        </div>
    </div>

    <section class="paddingTop-80 paddingBottom-120 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-2 order-md-1 mt-4">
                    <div class="card shadow-v1">
                        <h4 class="card-header border-bottom">Topic</h4>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="" class="text-primary"
                                    ><i class="ti-bookmark-alt mr-2"></i>Getting Started</a
                                    >
                                </li>
                                <li class="mb-3">
                                    <a href=""><i class="ti-user mr-2"></i>Account/Profile</a>
                                </li>
                                <li class="mb-3">
                                    <a href=""
                                    ><i class="ti-settings mr-2"></i>Troubleshooting</a
                                    >
                                </li>
                                <li class="mb-3">
                                    <a href=""><i class="ti-book mr-2"></i>Course Taking</a>
                                </li>
                                <li class="mb-3">
                                    <a href=""
                                    ><i class="ti-credit-card mr-2"></i>Purchase/Refunds</a
                                    >
                                </li>
                                <li class="mb-3">
                                    <a href=""><i class="ti-comment-alt mr-2"></i>Community</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 order-1 order-md-2 mt-4">
                    <div class="card shadow-v1">
                        <div class="card-header mt-4">
                            <h3>
                                Getting Started -
                                <span class="text-gray small">7 Articles</span>
                            </h3>
                        </div>
                        <div class="card-body pt-2">
                            <ul class="list-unstyled list-style-icon list-icon-bullet">
                                <li class="mb-2">
                                    <a href="#">Course Instructors and Teaching Assistants</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Yabatech Platforms and Features</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Yabatech FAQ</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Add a Course to Your Wishlist</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">System Requirements</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">How to Preview And Compare Courses</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Lifetime Access</a>
                                </li>
                            </ul>
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
