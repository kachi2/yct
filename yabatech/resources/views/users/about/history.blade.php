@extends('pages.layout.app')
@section('title', '>> History')
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
            <h2 class="text-white">History</h2>
            <ol
                class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0"
            >
                <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Home</a></li>
                <li class="breadcrumb-item">History</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-justify">
                    <h2>Our History</h2>
                    <div
                        class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"
                    ></div>
                    <p class="mb-3">
                        Yaba College of Technology, (...first and is still the best) started as Yaba Technical
                        Institute, which took over all the activities of Yaba Higher College following the
                        recommendation of the Elliot Commission on higher education in West Africa. The Yaba Higher
                        College was closed down, and the students were moved to form the nucleus of the University
                        College, Ibadan in 1948.The nation’s first Technical Institute, Yaba Technical Institute started
                        day and evening classes in October 1947. On September 23, 1963, Rt. Hon. Dr. Nnamdi Azikiwe, the
                        then Governor-General of the Federal Republic of Nigeria, renamed the Yaba Technical Institute
                        as Yaba College of Technology on the occasion of the official opening of the Engineering Block
                        donated by Shell-British Petroleum.
                    </p>
                    <p class="mb-3">
                        The change in name was in anticipation of the dynamic role the College was to play in the
                        production of technical manpower for the economic and social development of Nigeria. In the
                        words of Dr. Azikiwe, “Yaba College of Technology is at the forefront of the overall programme
                        for streamlining our technical education to meet the needs of Nigeria”. This change of name
                        became a catalyst that threw up the need for autonomy for the College. Thus, the first step
                        taken was the constitution of an Advisory Board in 1964 by the Minister of Education to help the
                        College in its challenging path to the future.
                    </p>
                    <p class="mb-3">
                        The quest for autonomy for the College finally came to a head in 1969 with the approval of the
                        autonomy and the promulgation of Degree 23 of 1969, “Yaba College of Technology Decree 1969”.
                        which granted it the mandate to provide full-time and part-time courses of instruction and
                        training in technology, applied science, commerce and management, agricultural production and
                        distribution; and for research. This decree represented a major step towards the development of
                        the College. It is significant to note that Yaba College of Technology was the only College
                        offering Higher Diploma courses in Nigeria till 1979 when the Federal Polytechnics act 1979
                        was promulgated.
                    </p>
                    <p class="mb-3">
                        Yaba College of Technology is the first higher institution in Nigeria to establish a Centre for
                        Entrepreneurship Development, with linkages with the world of commerce and industry. The centre
                        offers compulsory courses which must be taken by all students throughout their stay in the
                        College. There is a Quality Assurance Unit in the College which monitors the quality of academic
                        service delivery. The Applied Research and Technology Innovation (ARTI) Unit was established to
                        promote research and linkages with private sector organizations for the exploitation and use of
                        research. ARTI also assists to promote linkages between students of Yabatech and students of
                        other institutions especially in the area of research.
                    </p>
                    <p class="mb-3">
                        Free medical service is provided at the Medical Centre, which is open 24/7. Sports facilities
                        are provided at the sport complex which is located at the centre of the campus. The College has
                        won the Nigeria Polytechnic Games Association five times out of sixteen editions of the
                        competition. The College has a second campus at Epe, this campus is home to the Department of
                        Agricultural Technology, Agric and Bio Engineering, Leisure & Tourism, School of Technical
                        Education and Michael Otedola Information and Communication Centre.
                    </p>
                    <p class="mb-3">
                        The College is currently headed by Engineer Obafemi O. Omokungbe, the Rector. He is the first
                        alumnus of the institution to be appointed Rector. He succeeded Dr. Margaret Kudirat Ladipo, on
                        March 6, 2018 who completed her tenure in December 10, 2017. The name was changed to Federal
                        Polytechnic Yaba in 1979, but changed to the current one in 1980. The over 70 years old
                        Institution has been headed by a number of Indigenous Principal and Rectors:
                    </p>
                    <ul class="list-unstyled list-style-icon list-icon-check-circle">
                        <li>
                            Dr E.A Akinleye - Principal (1970-1975)
                        </li>
                        <li>
                            Mr G.M Okufi - Rector (1975-1985)
                        </li>
                        <li>Dr Philip Adegbile - Rector (1985-1993)</li>
                        <li>Mrs F.A Odugbesan - Rector (1993-2001)</li>
                        <li>
                            Mr Olubunmi Owoso - Rector (2001-2009)
                        </li>
                        <li>Dr(Mrs) M.K Ladipo - Rector (2009-2017)</li>
                        <li>Engr. Obafemi Owoseni Omokungbe - Incumbent Rector</li>
                    </ul>
                    <p class="mb-3">
                        Yaba College of Technology has eight schools and thirty-four academic departments with a total
                        of seventy accredited programmes, across ND,HND and Post-HND levels. The College also offers
                        certificate courses.
                    </p>
                    <p class="mb-3">
                        YABATECH offers B.Sc (Ed) courses in Technical and Vocational Education, Postgraduate Diplomas
                        in Engineering, Urban & Regional Planning. The programmes are run in conjunction with the
                        University of Nigeria, Nsukka and the Federal University of Technology, Akure. The student
                        population which is made up of both full-time and part-time students is in the range of 15,000,
                        while the staff strength is 2063.
                    </p>
                    <p class="mb-3">
                        In April 2015, the National Board for Technical Education (NBTE) approved five new courses for
                        Yaba College of Technology. The courses are Higher National Diploma in Mass Communication,
                        Banking and Finance, Metallurgy Engineering, National Diploma in Welding and Fabrication and
                        Public Administration. In June 2019, Yaba College of Technology made the move to partner with a
                        leading Nigerian security solutions company to design and implement a
                        Security Management Certification Programme.
                    </p>
                    <p class="mb-3">
                        According to the duo, the programme targets individuals, who desire to be modern security
                        managers and those in active security employment or planning to venture into the security
                        industry from managerial levels. Speaking at an event organised recently by the institutions to
                        sign a Memorandum of Understanding (MoU), Director, Yabatech Consult Limited, Uduak Inyang-Udoh,
                        said the collaboration would bridge the knowledge gap in attaining global security standards.
                        The College also has a functioning radio station YCT RADIO 89.3FM. The radio station was
                        established to serve as a training ground for mass communication students and future
                        broadcasters.
                    </p>

                </div>
                <!-- END col-lg-12 ml-auto-->
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>
@endsection
@push('scripts')
    <!-- Include additional page js files here-->
@endpush
