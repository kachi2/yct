<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <!-- Title-->
    <title>Yaba College of Technology @yield('title')</title>
    <!-- SEO Meta-->
    <meta
        name="description"
        content="Yaba College of Technology Lagos Nigeria the first institution and best polytechnic in Nigeria"
    />
    <meta name="author" content="Yabatech"/>
    <meta
        name="keywords"
        content="Yabatech, Polytechnic, NBTE, Yct, College, Technology"
    />
    <meta name="author" content="Yabatech"/>
    <meta name="copyright" content="Yaba College of Technology Lagos Nigeria"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta
        name="description"
        content="Yaba College of Technology, the first institution and best polytechnic in Nigeria"
    />
    <meta name="rating" content="general"/>
    <meta name="robots" content="all,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta property="og:url" content="https://facebook.com/yabatech"/>
    <meta property="og:type" content="website"/>
    <meta
        property="og:title"
        content="Yaba College of Technology Lagos Nigeria"
    />
    <meta
        property="og:description"
        content="Yaba College of Technology Lagos Nigeria the first institution and best polytechnic in Nigeria"
    />
    <meta
        property="og:image"
        content="./assets/img/favicon/favicon-96x96.png"
    />
    <!-- viewport scale-->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <!-- Favicon and Apple Icons-->
    <link
        rel="apple-touch-icon"
        sizes="57x57"
        href="{{ asset('./assets/img/favicon/apple-icon-57x57.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="60x60"
        href="{{ asset('./assets/img/favicon/apple-icon-60x60.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="72x72"
        href="{{ asset('./assets/img/favicon/apple-icon-72x72.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{ asset('./assets/img/favicon/apple-icon-76x76.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="114x114"
        href="{{ asset('./assets/img/favicon/apple-icon-114x114.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="120x120"
        href="{{ asset('./assets/img/favicon/apple-icon-120x120.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="144x144"
        href="{{ asset('./assets/img/favicon/apple-icon-144x144.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="{{ asset('./assets/img/favicon/apple-icon-152x152.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('./assets/img/favicon/apple-icon-180x180.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="192x192"
        href="{{ asset('./assets/img/favicon/android-icon-192x192.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('./assets/img/favicon/favicon-32x32.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="96x96"
        href="{{ asset('./assets/img/favicon/favicon-96x96.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('./assets/img/favicon/favicon-16x16.png') }}"
    />
    <link rel="manifest" href="{{ asset('./assets/img/favicon/manifest.json') }}"/>
    <meta name="msapplication-TileColor" content="#00cb54"/>
    <meta
        name="msapplication-TileImage"
        content="{{ asset('./assets/img/favicon/ms-icon-144x144.png') }}"
    />
    <meta name="theme-color" content="#00cb54"/>
    @include('admin.includes.main-css')
    @yield('styles')
</head>
<!-- END HEAD -->
<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <img width="200px" height="50px" alt="Yabatech Logo" class="logo-default"
                         src="{{ asset('./assets/img/logo-black.svg') }}"/>
                </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
							<a href="javascript:" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="javascript:" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge headerBadgeColor1"> 6 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 6</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
													Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">7 mins</span>
                                            <span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">12 mins</span>
                                            <span class="details">
													<span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">15 mins</span>
                                            <span class="details">
													<span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 hrs</span>
                                            <span class="details">
													<span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle " src="{{ asset('./admin/assets/img/dp.jpg') }}"/>
                            <span class="username username-hide-on-mobile"> Admin </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="quick-setting slimscroll-style">
                    <ul id="themecolors">
                        <li>
                            <p class="sidebarSettingTitle">Sidebar Color</p>
                        </li>
                        <li class="complete">
                            <div class="theme-color sidebar-theme">
                                <a href="#" data-theme="white"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="dark"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="blue"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="indigo"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="cyan"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="green"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="red"><span class="head"></span><span
                                        class="cont"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class="sidebarSettingTitle">Header Brand color</p>
                        </li>
                        <li class="theme-option">
                            <div class="theme-color logo-theme">
                                <a href="#" data-theme="logo-white"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-green"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-red"><span class="head"></span><span
                                        class="cont"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class="sidebarSettingTitle">Header color</p>
                        </li>
                        <li class="theme-option">
                            <div class="theme-color header-theme">
                                <a href="#" data-theme="header-white"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-dark"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-blue"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-green"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-red"><span class="head"></span><span
                                        class="cont"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end color quick setting -->

    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll" class="left-sidemenu">
                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                        data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="nav-item start active open">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link nav-toggle">
                                <i class="material-icons">dashboard</i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">event</i>
                                <span class="title">Event Management</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">All
												Events</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Add
												Events</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="3" class="nav-link "> <span
                                            class="title">Up Coming Events</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Past Events</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                                <span class="title">Schools</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">All
												Schools</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                                <span class="title">Departments</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">All
												Departments</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Add
												Department</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">share</i>
                                <span class="title">News</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">All
												News</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Published News</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">News Draft</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Post News</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">menu</i>
                                <span class="title">Menu Settings</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">
                                            Nav List
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Nav Dropdown</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">volume_up</i>
                                <span class="title">Announcements</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">
                                            All Memos
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Add Memo</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">settings</i>
                                <span class="title">Settings</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">
                                            Site Settings
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> <span class="title">Dashboard Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->

        @yield('content')

    </div>
    <!-- end page container -->

    <!-- start footer -->
    <div class="page-footer">
        <div class="page-footer-inner">
            &copy; @php echo date('Y') @endphp Yaba College Of Technology . All rights reserved.
            Created by
            <a href="#" target="_blank" class="makerCss">CITM</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>
<!-- start js include path -->
@include('admin.includes.main-js')
@stack('scripts')
<!-- end js include path -->
</body>
</html>
