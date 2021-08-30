<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventhub | Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/images/fav2.png')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/bundle.css')}}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/backend/vendors/datepicker/daterangepicker.css')}}">

    <!-- Vmap -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/vmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('/backend/css/app.min.css')}}" type="text/css">
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
                <a href="{{route('admin.profile')}}" class="nav-link" title="User menu" >
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
                        <a href="{{route('admin.profile')}}" data-toggle="tooltip" data-placement="right" title="Settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout') }}" onclick="event.preventDefault() 
                                        document.getElementById('logout-form').submit()" data-placement="right" title="Logout">
                            <i data-feather="log-out"></i>
                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                        <img class="logo" src="{{asset('/images/logoss.png')}}">
                        <img class="logo-light" src="{{asset('/images/logos.png')}}" alt="light logo">
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->

            <div class="navigation-menu-group">

                <div class="open" id="dashboards">
                
                    <ul>
                     <li class="navigation-divider">Dashboard</li>
                           <li>
                            <a href="#" >Events</a>
                            <ul>
                                <li><a  href="{{route('admin.event.create')}}">Create New</a></li>
                                <li><a href="{{route('admin.event.index')}}">Event List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Journals</a>
                            <ul>
                                <li><a href="{{route('admin.journal.create')}}">Create New</a></li>
                                <li><a href="{{route('admin.journal.index')}}">Journals List</a></li>
                            </ul>
                        </li>
                        
                            <li>
                            <a href="#">Blogs</a>
                            <ul>
                                <li><a href="{{route('admin.blog.create')}}">Create Post</a></li>
                                <li><a href="{{route('admin.blog.index')}}">Blog Post</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="#">Sponsorship</a>
                            <ul>
                              <li><a href="{{route('admin.sponsor.create')}}">Create Category</a></li>
                                <li><a href="{{route('admin.sponsor.index')}}">Category List</a></li>
                            </ul>
                        </li>
                      <li>
                            <a href="#">Advertizers</a>
                            <ul>
                                  <li><a href="{{route('admin.advertiser.create')}}">Create Category</a></li>
                                <li><a href="{{route('admin.advertiser.index')}}">Category List </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Advert Placement</a>
                            <ul>
                                <li><a href="{{route('admin.advert.create')}}">Post Advert</a></li>
                                <li><a href="{{route('admin.advert.index')}}">Advert List</a></li>
                            </ul>
                        </li>
                      <li>
                            <a href="#">Talent Hunt</a>
                            <ul>
                                <li><a href="{{route('admin.users.talent')}}">Registered Users</a></li>
                                <li><a href="{{route('audition.date')}}">Set Audition Date</a></li>
                            </ul>
                        </li>
                      
                         <li><a href="{{route('admin.users.index')}}">Users List</a></li>
                         <li><a href="{{route('admin.about')}}">Contact Page</a></li>
                          
                    </ul>
                </div>
            </div>
        </div>
        <!-- end::navigation menu -->

    </div>

        <!-- end::page-header -->
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