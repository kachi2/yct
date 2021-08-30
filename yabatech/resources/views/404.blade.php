@extends('pages.layout.app')
@section('title', ' | 404')
@section('styles')
    <!-- Include additional page css files here-->
@endsection
@section('content')
    <section class="height-100vh flex-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-primary display-1">404</h1>
                    <h2 class="mb-4">Sorry! Page Not Found</h2>
                    <p>
                        The Link You Followed Is Probably Broken, Or The Page Has Been
                        Removed.
                    </p>
                    <a href="{{ route('pages.index') }}" class="btn btn-rounded btn-primary mt-5">Back To Home</a>
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

