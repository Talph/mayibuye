@extends('layouts.menu')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header py-4">
                    <h2>Certification & Memberships</h2>
                    <p>Mayibuye i-Afrika Trading proudly stands as an industry leader, backed by a host of relevant
                        certifications and memberships. We are esteemed members of respected industry associations.
                        Additionally, we hold certifications from various governing boards, including the Construction
                        Industry Development Board (CIDB). Our CIDB Grading is impressive, at 9CE PE, 8CE PE, 7GB PE,
                        allowing us to
                        execute construction projects at any grade and level.</p>
                    <p>Furthermore, we are a fully licensed specialist in various domains, encompassing civil building
                        maintenance, refurbishment, programmed maintenance works, and specialized projects. Our
                        registrations with SAFCEC, CIDB, NHBRC, and SANAS, along with our Level 1 BBB-EE rating,
                        showcase our commitment to upholding the highest industry standards and fostering inclusive
                        growth. Mayibuye i-Afrika Trading is your trusted partner for excellence in construction and
                        service delivery.</p>
                    <p>
                        Our grading allows us to undertake construction works under General Building, Civil Works,
                        Mechanical Works, and Electrical Works, up to the relevant stated grades.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Certification Boards</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/safcec.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/cidb.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/nhbrc.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/SAICE-Logo.jpg')}}"
                                            alt=""></div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/tsanas.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/ecsa.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/ecbsa.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/wisa.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/cesa.jpg')}}" alt="">
            </div>
            <div class="col-md-3 mb-3"><img width="100%" src="{{asset('/images/certifications/master-builders.jpg')}}"
                                            alt=""></div>
        </div>
    </div>
    @include('partials.slides.clients-logos')
    @include('partials.footer')
@endsection
