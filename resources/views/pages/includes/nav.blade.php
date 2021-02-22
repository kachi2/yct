
<nav class="ec-nav sticky-top bg-white">
    <div class="px-5">
        <div class="navbar p-0 navbar-expand-lg">
            <div class="navbar-brand">
                <a class="logo-default" href="{{ route('pages.index') }}"
                ><img width="120" height="60" alt="" src="{{ asset('./assets/img/yabatech.svg') }}"
                    /></a>
            </div>
            <span
                aria-expanded="false"
                class="navbar-toggler ml-auto collapsed"
                data-target="#ec-nav__collapsible"
                data-toggle="collapse"
            >
            <div class="hamburger hamburger--spin js-hamburger">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </span>
            <div
                class="collapse navbar-collapse when-collapsed"
                id="ec-nav__collapsible">
                <ul class="nav navbar-nav ec-nav__navbar ml-auto  font-weight-bold">
                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >About</a
                        >
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('about.vision') }}" class="nav-link__list"
                                >Vision & Mission</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list">History</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Administration</a
                        >
                        <div class="dropdown-menu p-2 col-6">
                            <div class="row mx-0">
                                <div class="col-md-12">
                                    <ul class="list-unstyled col-md-12 d-flex">
                                        <li class="col-md-6">
                                            <a class="nav-link__list px-0" href="#"
                                            >Visitor</a
                                            >
                                        </li>

                                        <li class="col-md-6">
                                            <a class="nav-link__list px-0" href="#"
                                            >Deputy Rector Administrator</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Admissions</a
                        >
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="nav-link__list"
                                >Programmes</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list"
                                >Apply to Yabatech</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list"
                                >Entry Requirements</a
                                >
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >TETFund</a
                        >
                        <div class="dropdown-menu p-2 p-md-4 col-8">
                            <div class="row mx-0">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Special Intervention</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Academic Staff Training & Development</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Annual Intervention</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >High Impact</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
{{--                    <li class="nav-item nav-item__has-dropdown">--}}
{{--                        <a--}}
{{--                            class="nav-link dropdown-toggle"--}}
{{--                            href="#"--}}
{{--                            data-toggle="dropdown"--}}
{{--                        >Students</a--}}
{{--                        >--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li>--}}
{{--                                <a href="#" class="nav-link__list">Student Portal</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="nav-link__list">--}}
{{--                                    Sports & Societies</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="nav-link__list"--}}
{{--                                >Downloads</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Academics</a
                        >
                        <div class="dropdown-menu p-2 p-md-4">
                            <div class="row mx-0">
                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Schools</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Art, Design & Printing</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Engineering</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Liberal studies</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Management & Business studies</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >CCS</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Weekend Programmes</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Weekday/Evening Programmes</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Students</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Students Affairs</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >E-Learning</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >E-Screening Portal</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Student Portal</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Calendars</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Units</a
                        >
                        <div class="dropdown-menu p-2 p-md-4">
                            <div class="row mx-0">
                                <div class="col-md-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Service Units</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Audit</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Academic Units</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Academic Planning Units</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Registry</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Academic Board Matters</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Bursary</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Budget & Expenditure</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >More</a
                        >
                        <div class="dropdown-menu p-2 p-md-4">
                            <div class="row mx-0">
                                <div class="col-md-5 d-flex">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="nav-link__list px-0">Consult</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0"> Library</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0">Payments</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0">News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="nav-link__list px-0">Events</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0">Announcements</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0">Epe Campus</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0">e-Journal</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link__list px-0">FSDC</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Staff</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Staff List</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Alumni</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Transcript Application Guidelines</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Contact</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Contact Us</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-toolbar">
                <ul class="navbar-nav ec-nav__navbar">
                    <li class="nav-item">
                        <a class="nav-link site-search-toggler" href="#">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END container-->
</nav>