@extends('layouts.menu')

@section('content')
    <section class="overview-bg py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="border-left-primary">
                        <p class="small pl-3 text-uppercase">ABOUT Mayibuye</p>
                        <h1 class="pl-3 font-weight-bold">
                            Civil engineering at its <span class="font-italic mayibuye-text-primary">best.</span>
                        </h1>
                    </div>
                    <p class="mt-4">
                        As a fully licensed specialist, we excel in various
                        aspects, including building maintenance, refurbishment, programmed maintenance works, and
                        specialized projects.
                    </p>
                    <div class="container bg-gray-200 mt-5">
                        <ul id="about-tab" role="tablist" class="nav nav-pills border-radius-0 py-2 nav-justified">
                            <li role="presentation" class="nav-item">
                                <a id="pills-philosophy-tab" data-toggle="pill" href="#pills-philosophy" role="tab"
                                   aria-controls="pills-philosophy" aria-selected="false"
                                   class="nav-link may-tabs border-radius-0 shadow active">
                                    PHILOSOPHY
                                </a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a id="pills-mission-tab" data-toggle="pill" href="#pills-mission" role="tab"
                                   aria-controls="pills-mission"
                                   aria-selected="false" class="nav-link may-tabs border-radius-0 shadow">
                                    MISSION
                                </a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a id="pills-values-tab" data-toggle="pill" href="#pills-values" role="tab"
                                   aria-controls="pills-values"
                                   aria-selected="true" class="nav-link may-tabs border-radius-0 shadow">
                                    VALUES
                                </a>
                            </li>
                        </ul>
                        <div id="about-tabContent" class="tab-content">
                            <div id="pills-philosophy" role="tabpanel" aria-labelledby="pills-philosophy-tab"
                                 class="tab-pane fade active show">
                                <div class="content">
                                    <p class="p">
                                        We are a distinguished and fully licensed specialist in all facets of
                                        comprehensive building maintenance and refurbishment, meticulously executed
                                        programmed maintenance works, and a wide range of specialized services. Our
                                        esteemed principals bring to the table an impressive wealth of collective
                                        experience, guaranteeing unwavering commitment to the highest levels of safety,
                                        unparalleled quality, and unimpeachable integrity.
                                    </p>
                                </div>
                            </div>
                            <div id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab"
                                 class="tab-pane fade">
                                <div class="content">
                                    <p class="p">
                                        Mayibuye's mission is to lead excellence in construction and community
                                        development. We're committed to delivering top-quality projects, fostering local
                                        growth, and making our clients' dreams a reality while pioneering innovation in
                                        Southern African infrastructure. Our vision is to leave a lasting, positive
                                        impact on the regions we serve, creating a legacy of progress and prosperity.
                                    </p>
                                </div>
                            </div>
                            <div id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab"
                                 class="tab-pane fade">
                                <div class="content">
                                    <p class="p">
                                        Mayibuye's values are our compass. We prioritize integrity, ensuring honesty and
                                        ethics in all actions. Excellence is our standard, delivering top quality
                                        consistently. Community is our focus, nurturing growth in the areas we serve.
                                        Innovation drives us forward, seeking better methods. Safety is paramount,
                                        safeguarding all involved. Sustainability is our duty, promoting eco-conscious
                                        practices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('images/jpeg/about.jpg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mission-vision-bg mt-5 facts">
        <div class="mission-vision-bg__overlay">
            <div class="container">
                <div class="row py-4 text-center">
                    <div class="col-md-3">
                        <div class="card shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" fill="#ed2124"
                                 class="mayibuye-text-primary" viewBox="0 0 512 512">
                                <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                            </svg>
                            <h1 class="display-4 text-muted mt-3">155</h1>
                            <p class="text-muted">Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" fill="#ed2124" viewBox="0 0 576 512">
                                <path d="M208 64a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM9.8 214.8c5.1-12.2 19.1-18 31.4-12.9L60.7 210l22.9-38.1C99.9 144.6 129.3 128 161 128c51.4 0 97 32.9 113.3 81.7l34.6 103.7 79.3 33.1 34.2-45.6c6.4-8.5 16.6-13.3 27.2-12.8s20.3 6.4 25.8 15.5l96 160c5.9 9.9 6.1 22.2 .4 32.2s-16.3 16.2-27.8 16.2H288c-11.1 0-21.4-5.7-27.2-15.2s-6.4-21.2-1.4-31.1l16-32c5.4-10.8 16.5-17.7 28.6-17.7h32l22.5-30L22.8 246.2c-12.2-5.1-18-19.1-12.9-31.4zm82.8 91.8l112 48c11.8 5 19.4 16.6 19.4 29.4v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V405.1l-60.6-26-37 111c-5.6 16.8-23.7 25.8-40.5 20.2S-3.9 486.6 1.6 469.9l48-144 11-33 32 13.7z"/>
                            </svg>
                            <h1 class="display-4 text-muted mt-3">150</h1>
                            <p class="text-muted">Yrs Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" fill="#ed2124" viewBox="0 0 640 512">
                                <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
                            </svg>
                            <h1 class="display-4 text-muted mt-3">56</h1>
                            <p class="text-muted">Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" fill="#ed2124" viewBox="0 0 640 512">
                                <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                            </svg>
                            <h1 class="display-4 text-muted mt-3">215</h1>
                            <p class="text-muted">Employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.about-page.overview-cool-facts')
    @include('partials.banners.we-offer')
    @include('partials.slides.clients-logos')
    @include('partials.footer')
@endsection