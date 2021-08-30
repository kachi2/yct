@extends('users.layout.app')
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
        <!-- END container-->
    </section>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
