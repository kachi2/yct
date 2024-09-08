@extends('pages.layout.app')
@section('title', '>> e-Journal')
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
            <h2 class="text-white">e-Journal</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Home</a></li>
                <li class="breadcrumb-item">e-Journal</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-justify">
                    <h2>Click to download eJournal</h2>
                    <div
                        class="width-4rem height-4 bg-primary rounded mt-2 marginBottom-40"
                    ></div>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('separate.ijss') }}">International Journal of Science and Society</a></li>
                        <li><a href="{{ route('separate.ses') }}">Journal School of Environmental Studies 2013</a></li>
                        <li><a href="{{ route('separate.yct-tech') }}">Yabatech Journal of Technology 2019</a></li>
                    </ul>
                </div>
                <!-- END col-lg-12 ml-auto-->
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
