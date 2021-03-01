
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
                            class="nav-link dropdown-toggle hover:primary"
                            href="#"
                            data-toggle="dropdown"
                        >About</a
                        >
                        <ul class="dropdown-menu">
                            @if($menuNavs['about'])
                                @foreach($menuNavs['about'] as $about)
                                    <li class="nav-link__list px-0">
                                        <a href="{{ route($about->link) }}" class="nav-link__list"
                                        >{{ $about->name }}</a
                                        >
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>

                      <li class="nav-item nav-item__has-megamenu megamenu-col-2">
              <a class="nav-link dropdown-toggle hover:primary" href="#" data-toggle="dropdown">Administration</a>
              <div class="dropdown-menu left-auto p-2 p-md-4">
                <div class="row mx-0">
                  <div class="col-lg-6">
                    <ul class="list-unstyled">
                        @if($menuNavs['about'])
                            @foreach($menuNavs['administration'] as $administration)
                                <li class="nav-link__list px-0">
                                    <a href="{{ route($administration->link) }}" class="nav-link__list"
                                    >{{ $administration->name }}</a
                                    >
                                </li>
                            @endforeach
                        @endif
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="index-online-university.html">Demo Online University</a></li>
                      <li><a class="nav-link__list px-0" href="index-lynda.html">Demo Lynda</a></li>
                      <li><a class="nav-link__list px-0" href="index-udemy.html">Demo Udemy</a></li>
                      <li><a class="nav-link__list px-0" href="index-one-course.html">Demo One Course</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>


                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle hover:primary"
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
          <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle hover:primary" href="#" data-toggle="dropdown"> Students </a>
                <div class="dropdown-menu">
                  <ul class="list-unstyled">

                     <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown"> Special Intervention</a>
                      </li>

                     <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown">Annual Intervention</a>
                    </li>
                    <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown">Annual Intervention</a>
                    </li>
                    <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown">Annual Intervention</a>
                    </li>
                  </ul>
                </div>
            </li>

                      <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle hover:primary" href="#" data-toggle="dropdown"> Staff </a>
                <div class="dropdown-menu">
                  <ul class="list-unstyled">

                     <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown"> Special Intervention</a>
                      </li>

                     <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown">Annual Intervention</a>
                    </li>
                    <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown">Annual Intervention</a>
                    </li>
                    <li class="nav-item__has-dropdown">
                      <a class="nav-link__list " href="#" data-toggle="dropdown">Annual Intervention</a>
                    </li>
                  </ul>
                </div>
            </li>
            <li class="nav-item nav-item__has-dropdown ">
                <a class="nav-link hover:primary" href="#" data-toggle="dropdown">Payments</a>
          </li>
            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle hover:primary" href="#" data-toggle="dropdown"> TETFund </a>
                <div class="dropdown-menu">
                  <ul class="list-unstyled">

                     <li class="nav-item__has-dropdown">
                      <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Special Intervention</a>
                      <div class="dropdown-menu">
                        <ul class="list-unstyled">
                          <li><a class="nav-link__list" href="blog-standard.html"> Standard </a></li>
                          <li><a class="nav-link__list" href="blog-card.html"> Card </a></li>
                          <li><a class="nav-link__list" href="blog-masonry.html"> Mesonry </a></li>
                          <li><a class="nav-link__list" href="blog-list.html"> List </a></li>
                        </ul>
                      </div>
                    </li>

                     <li class="nav-item__has-dropdown">
                      <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown">Annual Intervention</a>
                      <div class="dropdown-menu">
                        <ul class="list-unstyled">
                          <li><a class="nav-link__list" href="blog-single.html"> Image </a></li>
                          <li><a class="nav-link__list" href="blog-single-audio.html"> Audio </a></li>
                          <li><a class="nav-link__list" href="blog-single-soundcloud.html"> Sound Cloud </a></li>
                          <li><a class="nav-link__list" href="blog-single-video-HTML5.html"> HTML5 Video </a></li>
                          <li><a class="nav-link__list" href="blog-single-video-youtube.html"> Youtube Video </a></li>
                          <li><a class="nav-link__list" href="blog-single-video-vimeo.html"> Vimeo Video </a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
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
                            class="nav-link dropdown-toggle hover:primary"
                            href="#"     data-toggle="dropdown" >Academics</a
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
                                                class="nav-link__list hover:primary px-0 font-weight-bold text-uppercase"
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
                            class="nav-link dropdown-toggle hover:primary"
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
                                                class="nav-link__list px-0 hover:primary font-weight-bold text-uppercase"
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
                            class="nav-link dropdown-toggle hover:primary"
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
