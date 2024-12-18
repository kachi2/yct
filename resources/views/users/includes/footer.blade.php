<footer class="site-footer">
    <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-5">
                    <img src="{{asset('assets/'.$settings->logo)}}" alt="Logo"/>
                    <div class="margin-y-40">
                        <p>
                           
                        </p>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href="{{$settings->facebook}}"
                               target="_blank" rel="noreferrer"><i class="ti-facebook"> </i
                                ></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href="{{$settings->twitter}}"
                               target="_blank" rel="noreferrer"><i class="ti-twitter"> </i
                                ></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href="{{$settings->instagram}}"
                               target="_blank" rel="noreferrer"><i class="ti-instagram"> </i
                                ></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mt-5">
                    <h4 class="h5 text-white">Contact Us</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-3">
                            <i class="ti-headphone mr-3"></i
                            ><a href="tel:{{$settings->site_phone}} ">{{$settings->site_phone}} </a>
                        </li>
                        <li class="mb-3">
                            <i class="ti-email mr-3"></i
                            ><a href="mailto:{{$settings->site_email}}"
                            >{{$settings->site_email}} </a
                            >
                        </li>
                        <li class="mb-3">
                            <div class="media">
                                <i class="ti-location-pin mt-2 mr-3"></i>
                                <div class="media-body">
                      <span
                      >{{$settings->address}}</span
                      >
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mt-5">
                    <h4 class="h5 text-white">Quick links</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-2"><a href="{{ route('pages.privacy') }}">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#">Art Gallery</a></li>
                        <li class="mb-2"><a href="#">Yabatech Radio</a></li>
                        <li class="mb-2">
                            <a href="https://net.nbte.gov.ng/" target="_blank" rel="noreferrer">NBTE</a>
                        </li>
                        <li class="mb-2"><a href="https://education.gov.ng/" target="_blank" rel="noreferrer">Ministry of Education</a></li>
                        <li class="mb-2"><a href="#">FSDC</a></li>
                        <li class="mb-2"><a href="https://www.researchgate.net/institution/Yaba-College-of-Technology">Research Gate</a></li>
                        <li class="mb-2"><a href="#">Give to Yabatech</a></li>
                        <li class="mb-2"><a href="#">Principal Officers</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mt-5">
                    <h4 class="h5 text-white">Newsletter</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <div class="marginTop-40">
                        <p class="mb-4">
                            Subscribe to get update and information. Don't worry, we won't
                            send spam!
                        </p>
                        <form class="marginTop-30" action="#" method="POST">
                            <div class="input-group">
                                <input
                                    type="text"
                                    placeholder="Enter your email"
                                    class="form-control py-3 border-white"
                                    required=""
                                />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </div>
    <!-- END footer-top-->

    <div class="footer-bottom py-5 text-white text-center" >
        <div class="container">
            <p class="text-white-0_5 mb-0">
                &copy; @php echo date('Y') @endphp {{$settings->copyright}}
                <a href="#" target="_blank">CITM</a>
            </p>
        </div>
    </div>
    <!-- END footer-bottom-->
</footer>



