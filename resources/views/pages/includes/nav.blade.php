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
                <ul class="nav navbar-nav ec-nav__navbar ml-auto">
                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >About</a
                        >
                        <ul class="dropdown-menu px-0">
                            @if($menuNavs['about'])
                                @foreach($menuNavs['about'] as $about)
                                    <li class="px-0 col-12">
                                        <a href="{{ route($about->link) }}" class="nav-link__list"
                                        >{{ $about->name }}</a
                                        >
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Administration</a
                        >
                                    <ul class="list-unstyled dropdown-menu px-0">
                                        @if($menuNavs['administration'])
                                            @foreach($menuNavs['administration'] as $administration)
                                                <li class="px-0 col-12">
                                                    <a href="{{ route($administration->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $administration->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Admissions</a
                        >
                        <ul class="dropdown-menu px-0">
                            @if($menuNavs['admission'])
                                @foreach($menuNavs['admission'] as $admission)
                                    <li class="px-0 col-12">
                                        <a href="{{ route($admission->link) }}"
                                           class="nav-link__list"
                                        >{{ $admission->name }}</a
                                        >
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >TETFund</a
                        >
                        <div class="dropdown-menu p-2 p-md-4">
                            <div class="row mx-0">
                                <div class="col-md-6">
                                    <ul class="nav-link__list px-0 list-unstyled">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Special Intervention</a
                                            >
                                        </li>
                                        @if($menuNavs['sIntervention'])
                                            @foreach($menuNavs['sIntervention'] as $sIntervention)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($sIntervention->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $sIntervention->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled nav-link__list px-0">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Annual Intervention</a
                                            >
                                        </li>
                                        @if($menuNavs['aIntervention'])
                                            @foreach($menuNavs['aIntervention'] as $aIntervention)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($aIntervention->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $aIntervention->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
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
                        >Academics</a
                        >
                        <div class="dropdown-menu p-2 p-md-4">
                            <div class="row mx-0">
                                <div class="col-md-4">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Schools</a
                                            >
                                        </li>
                                        @if($menuNavs['schools'])
                                            @foreach($menuNavs['schools'] as $schools)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($schools->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $schools->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="col-m-12 px-0">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >CCS</a
                                            >
                                        </li>
                                        @if($menuNavs['ccs'])
                                            @foreach($menuNavs['ccs'] as $ccs)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($ccs->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $ccs->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Students</a
                                            >
                                        </li>
                                        @if($menuNavs['students'])
                                            @foreach($menuNavs['students'] as $students)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($students->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $students->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
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
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Service Units</a
                                            >
                                        </li>
                                        @if($menuNavs['serviceUnits'])
                                            @foreach($menuNavs['serviceUnits'] as $serviceUnits)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($serviceUnits->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $serviceUnits->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Academic Units</a
                                            >
                                        </li>
                                        @if($menuNavs['academicUnits'])
                                            @foreach($menuNavs['academicUnits'] as $academicUnits)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($academicUnits->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $academicUnits->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Registry</a
                                            >
                                        </li>
                                        @if($menuNavs['registry'])
                                            @foreach($menuNavs['registry'] as $registry)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($registry->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $registry->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Bursary</a
                                            >
                                        </li>
                                        @if($menuNavs['bursary'])
                                            @foreach($menuNavs['bursary'] as $bursary)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($bursary->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $bursary->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
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
                                        <ul class="list-unstyled px-0 nav-link__list">
                                            @if($menuNavs['more'])
                                                @foreach($menuNavs['more'] as $more)
                                                    <li class="col-md-12 px-0">
                                                        <a href="{{ route($more->link) }}"
                                                           class="nav-link__list"
                                                        >{{ $more->name }}</a
                                                        >
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="col-md-12 px-0">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Staff</a
                                            >
                                        </li>
                                        @if($menuNavs['staff'])
                                            @foreach($menuNavs['staff'] as $staff)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($staff->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $staff->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Alumni</a
                                            >
                                        </li>
                                        @if($menuNavs['alumni'])
                                            @foreach($menuNavs['alumni'] as $staff)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($staff->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $staff->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <ul class="list-unstyled px-0 nav-link__list">
                                        <li class="px-0 col-md-12">
                                            <a
                                                class="nav-link__list font-weight-bold text-uppercase"
                                                href="#"
                                            >Contact</a
                                            >
                                        </li>
                                        @if($menuNavs['contact'])
                                            @foreach($menuNavs['contact'] as $contact)
                                                <li class="col-md-12 px-0">
                                                    <a href="{{ route($contact->link) }}"
                                                       class="nav-link__list"
                                                    >{{ $contact->name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        @endif
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
<!-- END ec-nav -->

<div class="site-search">
    <div class="site-search__close bg-black-0_8"></div>
    <form class="form-site-search" action="#" method="POST">
        <div class="input-group">
            <input
                type="text"
                placeholder="Search"
                class="form-control py-3 border-white"
                required=""
            />
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="ti-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<!-- END site-search-->
