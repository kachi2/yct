<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yabatech | Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('./assets/img/favicon/favicon-16x16.png')}}"/>
     <link rel="stylesheet" href="{{asset('/backend/vendors/dataTable/dataTables.min.css')}}" type="text/css">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/bundle.css')}}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/backend/vendors/datepicker/daterangepicker.css')}}">

    <!-- Vmap -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/vmap/jqvmap.min.css')}}">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="{{asset('/backend/css/app.min.css')}}" type="text/css">

 <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



</head>
<body>

    <!-- App styles  -->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>

<div class="header">
  <div>
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link" title="Hide navigation">
                    <i data-feather="arrow-left"></i>
                </a>
            </li>
            <li class="nav-item navigation-toggler mobile-toggler">
                <a href="#" class="nav-link" title="Show navigation">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->
        </ul>
    </div>
    <div>
        <ul class="navbar-nav">
            <!-- begin::header search -->
            <!-- end::header messages dropdown -->
            <!-- begin::header notification dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                    <i data-feather="bell"></i>
                </a>
            </li>
            <!-- end::header notification dropdown -->
            <!-- begin::user menu -->
            <li class="nav-item dropdown">
                <a href="" class="nav-link" title="User menu" >
                    <i data-feather="settings"></i>
                </a>
            </li>
            <!-- end::user menu -->
        </ul>

        <!-- begin::mobile header toggler -->
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="arrow-down"></i>
                </a>
            </li>
        </ul>
        <!-- end::mobile header toggler -->
    </div>

</div>
<div id="main">
    <!-- begin::navigation -->
    <div class="navigation">

        <div class="navigation-menu-tab">
          <div>
                <div class="navigation-menu-tab-header" data-toggle="tooltip" title="Admin" data-placement="right">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <figure class="avatar avatar-sm">
                            <i data-feather="user" alt="avatar"> </i>
                        </figure>
                    </a>
                </div>
            </div>
               <div class="flex-grow-1">
               <ul>
                    <li>
                        <a class="active" href="{{route('admin.index')}}" data-toggle="tooltip" data-placement="right" title="Dashboard"
                           data-nav-target="#dashboards">
                            <i data-feather="bar-chart-2"></i>
                        </a>
                    </li>
                    </ul>
            </div>
              <div>
                <ul>
                    <li>
                        <a href="" data-toggle="tooltip" data-placement="right" title="Settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" onclick="event.preventDefault() 
                                        document.getElementById('logout-form').submit()" data-placement="right" title="Logout">
                            <i data-feather="log-out"></i>
                        </a>
                         <form id="logout-form" action="" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                    </li>
                </ul>
            </div>
        </div>

        <!-- begin::navigation menu -->
        <div class="navigation-menu-body">

            <!-- begin::navigation-logo -->
            <div>
                <div id="navigation-logo">
                    <a href="{{route('admin.index')}}">
                        <img width="120" height="50" class="logo" src="{{ asset('./assets/img/yabatech.svg') }}">
                        <img width="120" height="50"  class="logo-light" src="{{ asset('./assets/img/yabatech.svg') }}" alt="light logo">
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->

            <div class="navigation-menu-group">

                <div class="open" id="dashboards">
                
                    <ul>
                     <li class="navigation-divider">Dashboard</li>
                           <li>
                            <a href="#" > <i data-feather="grid"></i>&nbsp; Administration</a>
                            <ul>
                                <li><a  href="{{route('pages.administration')}}">Administration List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                 <i data-feather="award"></i>&nbsp; Admission</a>
                            <ul>
                                <li><a href="{{route('admission.list')}}">Admission List</a></li>
                            </ul>
                        </li>
                        
                   <!--         <li>
                            <a href="#">
                                 <i data-feather="package"></i>&nbsp; Students</a>
                            <ul>
                                <li><a href="">Calendar</a></li>
                                <li><a href="">Downloads</a></li>
                            </ul>
                        </li> -->
                         <li>
                            <a href="#">
                                 <i data-feather="user"></i>&nbsp; Staff</a>
                            <ul>
                              <li><a href="{{route('admin.staff.list')}}">Staff List</a></li>
                                   <li><a href="{{route('admin.staff.Hods')}}">HODs</a></li>
                                   <li><a href="{{route('schools.deans')}}">School Deans</a></li>
                              
                            </ul>
                        </li>
                      <li>
                              <a href="#">
                                 <i data-feather="book"></i>&nbsp; News</a>
                            <ul>
                                 <li><a href="{{route('news.index')}}">All News</a></li>
                                 <li><a href="{{route('notice.index')}}">All Notice</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="#">
                                 <i data-feather="package"></i>&nbsp; TETFund</a>
                            <ul>
                                <li><a href="">Academic Staff Training</a></li>
                                <li><a href="">Physical Infrastructure</a></li>
                                 <li><a href="">Book Intervention</a></li>
                                  <li><a href="">Training & Development</a></li>
                            </ul>
                        </li> --}}
                      <li>
                            <a href="#">
                                 <i data-feather="layers"></i>&nbsp; Academics</a>
                            <ul>
                                <li><a href="{{route('admin.schools.index')}}">Schools</a></li>
                                    <li><a href="{{route('admin.departments.index')}}">Departments</a></li>
                            </ul>
                        </li>
                      <li>
                            <a href="#">
                                 <i data-feather="package"></i>&nbsp; Units</a>
                            <ul>
                                <li><a href="">UNits</a></li>
                                <li><a href="">Set Audition Date</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="#">
                                 <i data-feather="user"></i>&nbsp; Users</a>
                            <ul>
                                <li><a href="">Add Admin</a></li>
                            </ul>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <!-- end::navigation menu -->
    </div>
        <!-- end::page-header -->
         <div class="main-content">
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4></h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.index')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </nav>
            </div>
        </div>
    @yield('content')
     <footer>
            <div class="container-fluid">
                </div>
            </div>
        </footer>
        <!-- end::footer -->
    </div>
    <!-- end::main-content -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{asset('/backend/vendors/bundle.js')}}"></script>
<!-- Chartjs -->
<script src="{{asset('/backend/vendors/charts/chartjs/chart.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/dataTables.bootstrap4.min.js')}}"></script>
<!-- Apex chart -->
<script src="{{asset('/backend/vendors/charts/apex/apexcharts.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{asset('/backend/vendors/circle-progress/circle-progress.min.js')}}"></script>
<!-- Peity -->
<script src="{{asset('/backend/vendors/charts/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('/backend/js/examples/charts/peity.js')}}"></script>

<script src="{{asset('/backend/vendors/prism/prism.js')}}"></script>
<script src="{{asset('/backend/js/examples/clockpicker.js')}}"></script>
<!-- Datepicker -->
<script src="{{asset('/backend/vendors/datepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
<!-- Slick -->
<script src="{{asset('/backend/vendors/slick/slick.min.js')}}"></script>
<!-- Vamp -->
<script src="{{asset('/backend/vendors/vmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/backend/vendors/vmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('/backend/js/examples/vmap.js')}}"></script>
<script>
$(document).ready(function (){
    $('#myTable').DataTable();
});
</script>
<!-- Dashboard scripts -->
<script src="{{asset('/backend/js/examples/dashboard.js')}}"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>
<!-- App scripts -->
<script src="{{asset('/backend/js/app.min.js')}}"></script>

@yield('script')



</body>
</html>