@extends('pages.layout.app')
@section('title', '>> Vision & Mission')
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
            <h2 class="text-white">Vision & Mission</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Home</a></li>
                <li class="breadcrumb-item">Vision & Mission</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-100 border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mr-auto text-center">
                    <img
                        class="wow fadeInLeft w-100 rounded"
                        src="{{ asset('assets/img/384x320/3.jpg') }}"
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
                        Our vision is to be the leading higher educational institution in Nigeria by providing
                        first-rate
                        academic, professional and entrepreneurial education to our students, who are empowered to make
                        a
                        positive impact in the technological and socio-economic development of the country.
                    </p>
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
                        Our mission is to produce knowledgeable and innovative graduates, worthy in skill and character,
                        through effective teaching, learning and research for the technological advancement of Nigeria.
                    </p>
                    <h2>Our Core Values</h2>
                    <ul class="list-unstyled list-style-icon list-icon-check-circle">
                        <li>Respect for freedom to associate with any person or group that is recognized by constituted
                            authority
                        </li>
                        <li>Regard for Discipline, Loyalty, Honesty, Integrity, Courage and generally acceptable ethical
                            behavior
                        </li>
                        <li>Regard for lives and property</li>
                        <li>Respect and compassion for the handicapped</li>
                        <li>Proper attitude to work and prudent use of official time, office equipment and facilities
                        </li>
                        <li>Willingness and respect for the team and team decisions</li>
                        <li>Recognition of the prime/pivotal place of students and other stakeholders</li>
                        <li>Pride in the name, reputation, achievements of staff and age of the College</li>
                    </ul>
                </div>
                <!-- END col-lg-6 ml-auto-->
                <div class="col-lg-5 mb-4 mr-auto text-center">
                    <img
                        class="wow fadeInRight w-100 rounded"
                        src="{{ asset('assets/img/360x300/4.jpg') }}"
                        alt=""
                        style="visibility: visible; animation-name: fadeInRight"
                    />
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
