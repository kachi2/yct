@extends('admin.layout.admin')
@section('content')


 <div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Dashboard</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page-header -->

        <!-- begin::page content -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="card-title mb-3">Tickets Purchased</h6>
                                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                <h2 class="mb-0 mr-2 font-weight-bold"></h2>
                                               <p class="small text-muted mb-0 line-height-20">
                                                    <span class="text-success"></span> Total Paid
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar avatar-lg">
                                                <div class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="fa fa-ticket"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="card-title mb-3">Journal Purchased</h6>
                                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                <h2 class="mb-0 mr-2 font-weight-bold"></h2>
                                                <p class="small text-muted mb-0 line-height-20">
                                                    <span class="text-success"></span> Total Paid
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar avatar-lg">
                                                <div class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="fa fa-book"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="card-title mb-3">Registered Talents</h6>
                                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                <h2 class="mb-0 mr-2 font-weight-bold"></h2>
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar avatar-lg">
                                                <div class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="card-title mb-3">Sponsors</h6>
                                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                <h2 class="mb-0 mr-2 font-weight-bold"></h2>
                                              <p class="small text-muted mb-0 line-height-20">
                                                    <span class="text-success">N</span> Total Paid
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar avatar-lg">
                                                <div class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="card-title mb-3">Advertizers</h6>
                                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                <h2 class="mb-0 mr-2 font-weight-bold"></h2>
                                                <p class="small text-muted mb-0 line-height-20">
                                                    <span class="text-success"></span> Total Paid
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar avatar-lg">
                                                <div class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="card-title mb-3">Total Users</h6>
                                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                <h2 class="mb-0 mr-2 font-weight-bold"></h2> 
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar avatar-lg">
                                                <div class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                

              
                </div>
            </div>
        </div>
        <!-- end::page content -->


@endsection