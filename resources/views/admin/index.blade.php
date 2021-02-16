@extends('admin.layout.app')
@section('styles')
    <!-- Page specific css files -->
@endsection
@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-green">
                        <span class="info-box-icon push-bottom"><i class="material-icons">share</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Events</span>
                            <span class="info-box-number">450</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
											25 upcoming
										</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-yellow">
                        <span class="info-box-icon push-bottom"><i class="material-icons">share</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">All News</span>
                            <span class="info-box-number">155</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>
                            <span class="progress-description">
											100 Published
										</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-blue">
                        <span class="info-box-icon push-bottom"><i class="material-icons">volume_up</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Announcements</span>
                            <span class="info-box-number">102</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                            <span class="progress-description">
											85 in 28 Days
										</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">person_add</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">13</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
											5 online
										</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- end widget -->
    </div>
</div>
<!-- end page content -->
@endsection

@push('scripts')
    <!-- Page specific js files -->
@endpush
