<footer class="footer py-5 mt-5 bg-dark-ci position-relative">
    <div class="bottom-footer-text ttm-bg copyright">
    </div>
    <div class="container">
        <div class="row">
{{--            @include('partials.covidbanner')--}}
            <div class="col-12 col-md">
                <div class="img-fav mb-4">
                    <img src="/images/png/favicon.png" alt="Mayibuye" width="100" height="103">
                </div>
                <ul class="list-unstyled text-small">
                    <li class="mb-3">Masters in construction industry with 10 years of experience.</li>
{{--                    <li>Reg N<sup>o</sup>: B2009/183459/23</li>--}}
                </ul>
            </div>
            <div class="col-12 col-md">
                <h5 class="mb-2 text-white">ADDRESS</h5>
                <ul class="list-unstyled text-small">
                    <li>526 Constantia Square Office Park</li>
                    <li>16th Road</li>
                    <li>Midrand, Johannesburg</li>
                    <li>1685</li>
                    <br/>
                </ul>
            </div>
            <div class="col-12 col-md">
                <h5 class="mb-2 text-white">CONTACTS</h5>
                <ul class="list-unstyled text-small">
                    <li>Tel: <a href="tel:+27 877 016 314">+27 877 016 314</a></li>
                    <li>Fax: <a href="fax:086 767 2586">086 767 2586</a></li>
                    <br/>
                    <li>
                        <a aria-label="Mayibuye LinkedIn" title="LinkedIn"
                           href="https://www.linkedin.com/company/mayibuye-i-afrika-trading/about/"
                           rel="noopener noreferrer" target="_blank"><i class="ms bi bi-linkedin"></i></a>
                        <a class="ml-3" aria-label="Mayibuye Youtube" title="Youtube"
                           href="https://www.youtube.com/channel/UCXgLqVdDuG7Do-yMr8RJ0KA" rel="noopener noreferrer"
                           target="_blank"><i style="width:100px" class="ms bi bi-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <p class="d-block mb-1 ">Mayibuye iAfrika Trading © 2022</p>
                <p class="d-block mb-3 link ">Designed by <a href="https://afrfinity.com" rel="noopener"
                                                             target="_blank">AfrFinity</a></p>
                <p class="d-block mb-3 link "><a href="/login">Login</a></p>
            </div>
        </div>
    </div>
</footer>

@section('scripts')
    <script defer>
        $(function () {
            $('.logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endsection