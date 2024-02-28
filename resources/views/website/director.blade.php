@extends('layouts.menu')

@section('content')

    <div class="container my-5">
        <div class="row py-4 justify-content-center">
            <div class="col-md-3">
                <img src="{{asset('/images/jpeg/simthembile-bantubani.jpg')}}" width="100%" alt="Simthembile Bantubani">
                <div class="name-dir mt-2">
                    <h5>SIMTHEMBILE BANTUBANI</h5>
                </div>
            </div>
            <div class="col-md-9">
                <p>Born in Mount Frere, a quaint rural town in South Africa's Eastern Cape Province, Mr. Bantubani has
                    carved a remarkable path in the civil engineering and construction arena. He holds a valuable civil
                    engineering diploma, earned through his diligent studies at Cape Technikon.</p>

                <p>As the visionary director and founder of Mayibuye i-Afrika Trading, a distinguished civil and
                    construction business, Mr. Bantubani brings over a decade of expertise to the field. His journey
                    began with invaluable experience gained from several construction companies before he ventured into
                    entrepreneurship by establishing his organization in 2009.</p>

                <p>At the core of his mission lies a profound desire to invest in and empower young talents within the
                    construction industry, nurturing their growth and development. Mr. Bantubani's principles revolve
                    around hard work, unwavering commitment to excellence, and an unshakable dedication to his craft.
                    His humble upbringing, originating from a previously disadvantaged background, serves as a driving
                    force, inspiring him to strive for success through sheer determination and ingenuity.</p>

                <p>Mr. Bantubani's life story is a testament to resilience and the pursuit of one's dreams. He has
                    consistently served as a source of inspiration, particularly for those who are familiar with his
                    challenging early years, which he has transformed into a source of motivation.</p>

                <p>Beyond his professional endeavors, Mr. Bantubani remains deeply committed to giving back to the
                    community. His philanthropic efforts extend to supporting orphanages, mentoring underprivileged
                    youth, providing guidance to university graduates, bolstering small businesses, and backing various
                    organizations dedicated to youth development.</p>

                <p>Mr. Bantubani actively engages with communities, seeking to identify and address challenges by
                    empowering and involving residents in the process. His business acumen, unyielding determination,
                    and sincere dedication to nurturing the potential of young individuals make him an exemplary leader,
                    both within his organization and the broader community.</p>

                <div class="video-container my-5">
                    <iframe width="100%" height="580" src="https://www.youtube.com/embed/el0Ea1FNJzM" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>

        </div>
    </div>
    @include('partials.banners.contact-banner')
    @include('partials.footer')
@endsection
