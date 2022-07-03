@extends('layouts.menu')

@section('content')
<div class="home-page">
@include('partials.banners.hero')
@include('partials.quick-contact')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="page-header text-center py-4">
           <h1>Why our services are the best</h1>
           <small>We specialize in the provision of cost effective products and services</small>
           </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-4 text-center">
            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi text-primary bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
              </svg>

            <h3 class="why_us__heading my-4">Cost effective</h3>
            <p class="why_us_p">
                Providing competitive and cost effective solutions combined with new technology and innovation. 
            </p>
        </div>
        <div class="col-md-4 text-center">
            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi text-success bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
              </svg>

            <h3 class="why_us__heading my-4">Quality</h3>
            <p class="why_us_p">
                Exceed customer’s expectations by providing top quality products and service.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi text-secondary bi-person-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              </svg>

            <h3 class="why_us__heading my-4">Customer Service</h3>
            <p class="why_us_p">
                Providing first class service being customer centric focused.
            </p>
        </div>
        </div>
        <hr/>
<div class="row">
        <div class="col-md-5 brief_img_container_">
            <img src="images/png/about-mayibuye.png" alt="Laptop" class="windows img image" width="100%"/>
        </div>
        <div class="col-md-7 brief__container_">
            <h3 class="brief_h3">About Mayibuye iAfrika Trading</h3>
            <p class="brief_p">
                Mayibuye i-Afrika Trading is a construction company that delivers high quality, reliable construction services for governmental establishments. In addition, we have broad expertise with commercial clients.</p> 

<p class="brief_p">
    We are a fully licensed specialist in all facets of building maintenance and refurbishment, programmed maintenance works and other specialised works. Our principals have massive collective experience offering the highest standards for safety, quality, and integrity.</p>

<p class="brief_p">
    Dedicated to Excellence, we utilise innovative building contraction, maintenance And renovation skills to change and improve the way Projects are designed, managed and build. <a class="link text-primary" href="{{route('about')}}">Find out more about Mayibuye</a>
</p>       
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <iframe width="100%" height="380" src="https://www.youtube.com/embed/el0Ea1FNJzM" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

<section class="services-section mt-5">
    <h1 class="text-center">Services offered</h1>
        <div class="row ">
        <div class="col-md-4">
        <div class="content">
        <div class="img-services-home">
            <img src="/images/jpeg/road-construction.jpg" width="100%" alt="road-construction">
        </div>
        <div class="content-h mt-3">
            <h6 class="h6 services-h text-primary font-weight-bold">ROAD CONSTRUCTION</h6>
        </div>
        <div class="content-p">
            <p class="p services-p">
                Mayibuye i-Afrika Trading is a construction company that delivers high quality, reliable construction services for governmental establishments. In addition, we have broad-expertise with commercial clients.
            </p>
        </div>
        </div>
        </div>

        <div class="col-md-4">
        <div class="content">
        <div class="img-services-home">
            <img src="/images/jpeg/bulk-water.jpg" width="100%" alt="bulk-water">
        </div>
        <div class="content-h mt-3">
            <h6 class="h6 services-h text-primary font-weight-bold">BULK WATER</h6>
        </div>
        <div class="content-p">
            <p class="p services-p">
                It does not matter how big or small about your embarkment protection job might be. We have seen it all and have the experience to carry out Water Reticulation Networks
            </p>
        </div>
        </div>
        </div>

        <div class="col-md-4">
            <div class="content">
            <div class="img-services-home">
                <img src="/images/jpeg/building-helmet.jpg" width="100%" alt="building">
            </div>
            <div class="content-h mt-3">
                <h6 class="h6 services-h text-primary font-weight-bold">BUILDING</h6>
            </div>
            <div class="content-p">
                <p class="p services-p">
                    We undertake a wide variety of building and maintenance work – from small, residential projects, to large commercial or industrial projects.
                </p>
            </div>
            </div>
            </div>
            <div class="col-md-12">
            <p class="text-center"><a href="{{route('services')}}">Do you want to see more services we offer?</a></p>
            </div>
        </div>
        </section>
</div>
@include('partials.banners.contact-banner')
@include('partials.footer')
</div>
@endsection
