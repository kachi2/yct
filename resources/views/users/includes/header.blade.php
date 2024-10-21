<header class="site-header text-white" style="background:#006600">
    <div class="container">
        <div class="row align-items-center justify-content-between mx-0">
            <ul class="list-inline d-none d-lg-block mb-0">
                <li class="list-inline-item mr-3">
                    <div class="d-flex align-items-center">
                        <i class="ti-email mr-2"></i>
                        <a href="mailto:{{$settings->site_email}}"
                        >{{$settings->site_email}}</a
                        >
                    </div>
                </li>
                <li class="list-inline-item mr-3">
                    <div class="d-flex align-items-center">
                        <i class="ti-headphone mr-2"></i>
                        <a href="tel:{{$settings->site_phone}}">{{$settings->site_phone}}</a>
                    </div>
                </li>
            </ul>
            <ul class="list-inline mb-0">
                <li
                    class="list-inline-item mr-0 p-2 border-right border-left border-white-0_1"
                >
                    <a href="{{$settings->facebook}}" target="_blank" rel="noreferrer"><i class="ti-facebook"></i></a>
                </li>
                <li class="list-inline-item mr-0 p-2 border-right border-white-0_1">
                    <a href="{{$settings->twitter}}"
                       target="_blank" rel="noreferrer"><i class="ti-twitter"></i></a>
                </li>

                <li class="list-inline-item mr-0 p-2 border-right border-white-0_1">
                    <a href="{{$settings->instragram}}"
                       target="_blank" rel="noreferrer"><i class="ti-instagram"></i></a>
                </li>
            </ul>
            <ul class="list-inline mb-0">
            <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-white-0_1"
                >
                    <a href="{{ route('separate.research') }}">E-Journals</a>
                </li>
             <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-white-0_1"
                >
                    <a href="{{ route('separate.research') }}">Epe Campus</a>
                </li>
                <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right  border-white-0_1"
                >
                    <a href="{{ route('separate.research') }}">Research</a>
                </li>
                 <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-white-0_1"
                >
                    <a href="{{ route('separate.research') }}">News</a>
                </li>
                 <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-white-0_1"
                >
                    <a href="{{ route('separate.research') }}">FSDC</a>
                </li>
                
                <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-white-0_1"
                >
                    <a  target="_blank" href="https://portal.yabatech.edu.ng/misc/resultchecker/"><button class="btn btn-warning btn-sm" style="color:#000">Check UTME Result</button></a>
                </li>
            </ul>
        </div>
        <!-- END END row-->
    </div>
    <!-- END container-->
</header>
