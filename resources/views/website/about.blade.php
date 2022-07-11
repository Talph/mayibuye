@extends('layouts.menu')

@section('content')
@include('partials.banners.about-banner')
@include('partials.quick-contact')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="page-header py-4">
                <div class="row">
                    <h1 class="col-md-8">Mayibuye i-Afrika Trading – Building Construction, Civil Works, and Structures.
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="overview-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="about__p py-5">
                    <p class="first-letter ">Mayibuye i-Afrika Trading is a construction company that delivers high
                        quality, reliable construction services for governmental establishments. In addition, we have
                        broad expertise with commercial clients. We are a fully licensed specialist in all facets of
                        building maintenance and refurbishment, programmed maintenance works and other specialised
                        works.
                    </p>
                    <p>
                        Our principals have massive collective experience offering the highest standards for safety,
                        quality, and integrity. Dedicated to Excellence, we utilise innovative building contraction,
                        maintenance And renovation skills to change and improve the way Projects are designed, managed
                        and build.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img class="overview-mayibuye border-radius-5" src="/images/jpeg/overview.jpg"
                    alt="Mayibuye Team Member" width="100%">
            </div>
        </div>
    </div>
</section>

<section class="mission-vision-bg mt-5">
    <div class="mission-vision-bg__overlay">

        <div class="container">
            <div class="row py-4">
                <div class="col-md-6">
                    <h2 class="company_h text-primary">Our mission
                    </h2>
                    <p class="company_p">Our mission is to infuse the marketing concept in all our business units, such
                        that the Mayibuye i-Afrika brand is synonymous with a high level of customer service, quality
                        standards and image of black-owned businesses, not only in South Africa but throughout the
                        entire African continent, while contributing to the improvement of human lives</p>
                </div>
                <div class="col-md-6">
                    <h2 class="company_h text-success">Our vision
                    </h2>
                    <p class="company_p">To be the most sought-after contractor for any project in which meeting the
                        challenges of execution, safety, and schedule sets us apart from our competition. Mayibuye
                        i-Afrika Trading is not just a construction company, We are a dedicated team striving to bring
                        growth to our community, helping to maintain existing companies we get opportunities to work
                        with and assist our clients in making their dreams become a reality. It is part of our vision to
                        be a pacesetter in the infrastructure development across the Southern African region.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.about-page.overview-cool-facts')
@include('partials.banners.contact-banner')
@include('partials.footer')
@endsection