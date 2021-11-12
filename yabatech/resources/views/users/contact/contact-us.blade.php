@extends('users.layout.app')
@section('styles')
    <!-- Include additional page css files here-->
@endsection
@section('content')
    <div
        class="py-5 bg-cover"
        data-dark-overlay="6"
        style="background: url({{ asset('./assets/img/site/categ.jpg') }}) no-repeat"
    >
        <div class="container">
            <h2 class="text-white">Contact</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Contact</li>
            </ol>
        </div>
    </div>

    <div class="py-5 shadow-v2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="media">
              <span class="iconbox iconbox-md bg-primary text-white"
              ><i class="ti-mobile"></i
                  ></span>
                        <div class="media-body ml-3">
                            <a href="tel:234-7037431055" class="h5">234-7037431055</a>
                            <p>Call Us (8AM-10PM)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="media">
              <span class="iconbox iconbox-md bg-primary text-white"
              ><i class="ti-email"></i
                  ></span>
                        <div class="media-body ml-3">
                            <a href="mailto:registrar@yabatech.edu.ng" class="h5"
                            >registrar@yabatech.edu.ng</a
                            >
                            <p>Send a mail</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="media">
              <span class="iconbox iconbox-md bg-primary text-white"
              ><i class="ti-location-pin"></i
                  ></span>
                        <div class="media-body ml-3">
                            <h5 class="mb-0">Yaba College of Technology,</h5>
                            <p>Herbert Macaulay Road, Opposite WAEC office, Yaba Lagos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="padding-y-100 bg-light-v2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Send Message</h2>
                    <div
                        class="width-4rem height-4 bg-primary my-2 mx-auto rounded"
                    ></div>
                </div>
                <div class="col-12 text-center">
                    <form action="" method="POST" class="card p-4 p-md-5 shadow-v1">
                        <div class="row mt-5 mx-0">
                            <div class="col-md-4 mb-4">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Name"
                                    required
                                />
                            </div>
                            <div class="col-md-4 mb-4">
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email"
                                    required
                                />
                            </div>
                            <div class="col-md-4 mb-4">
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Phone number"
                                />
                            </div>
                            <div class="col-12">
                  <textarea
                      type="email"
                      class="form-control"
                      placeholder="Message"
                      rows="7"
                  ></textarea>
                                <button type="submit" class="btn btn-primary mt-4">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.025836403868!2d3.3705001147559193!3d6.518413295285024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c515caa16b3%3A0x7242b2a82cd20a21!2sYaba%20College%20of%20Technology!5e0!3m2!1sen!2sng!4v1612133035659!5m2!1sen!2sng"
        style="width: 100%"
        height="450"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
    ></iframe>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
