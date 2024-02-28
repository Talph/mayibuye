@extends('layouts.menu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 widget-area sidebar-left">
                <aside class="widget widget-nav-menu">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="v-pills-dbsa-limpopo-ongoing-tab" data-toggle="pill"
                               data-target="#v-pills-dbsa-limpopo-ongoing" type="button" role="tab" aria-controls="v-pills-dbsa-limpopo-ongoing"
                               aria-selected="true">DBSA - Limpopo Project
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-durban-tab" data-toggle="pill"
                               data-target="#v-pills-durban" type="button" role="tab" aria-controls="v-pills-durban"
                               aria-selected="false">
                                Durban Project
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-nqushwa-tab" data-toggle="pill"
                               data-target="#v-pills-nqushwa" type="button" role="tab" aria-controls="v-pills-nqushwa"
                               aria-selected="false">
                                Nqushwa Project
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-sibanye-tab" data-toggle="pill"
                               data-target="#v-pills-sibanye" type="button" role="tab" aria-controls="v-pills-sibanye"
                               aria-selected="false">Sibanye Project
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-vorna-valley-tab" data-toggle="pill"
                               data-target="#v-pills-vorna-valley" type="button" role="tab" aria-controls="v-pills-vorna-valley"
                               aria-selected="false">
                                Vorna Valley Project
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-xhoha-tab" data-toggle="pill"
                               data-target="#v-pills-xhoha" type="button" role="tab" aria-controls="v-pills-xhoha"
                               aria-selected="false">
                                Xhoha Project
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-dbsa-limpopo-ongoing" role="tabpanel"
                         aria-labelledby="v-pills-dbsa-limpopo-ongoing-tab">
                        <h3>DBSA - Limpopo Project</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/dbsa-limpopo-ongoing/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/dbsa-limpopo-ongoing/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/dbsa-limpopo-ongoing/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/dbsa-limpopo-ongoing/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/dbsa-limpopo-ongoing/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/dbsa-limpopo-ongoing/6.jpg')}}"
                             alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-durban" role="tabpanel"
                         aria-labelledby="v-pills-durban-tab">
                        <h3>Durban Project</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/durban/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/durban/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/durban/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/durban/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/durban/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/durban/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-nqushwa" role="tabpanel"
                         aria-labelledby="v-pills-nqushwa-tab">
                        <h3>Nqushwa Project</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/nqushwa/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/nqushwa/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/nqushwa/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/nqushwa/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/nqushwa/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/nqushwa/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-sibanye" role="tabpanel"
                         aria-labelledby="v-pills-sibanye-tab">
                        <h3>Sibanye Project</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/sibanye/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/sibanye/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/sibanye/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/sibanye/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/sibanye/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/sibanye/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-vorna-valley" role="tabpanel"
                         aria-labelledby="v-pills-vorna-valley-tab">
                        <h3>Vorna Valley Project</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/vorna-valley/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/vorna-valley/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/vorna-valley/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/vorna-valley/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/vorna-valley/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/vorna-valley/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-xhoha" role="tabpanel"
                         aria-labelledby="v-pills-xhoha-tab">
                        <h3>Xhoha Project</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/xhoha/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/xhoha/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/xhoha/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/xhoha/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/xhoha/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/ongoing-projects/xhoha/6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection

@section('scripts')
    @include('partials.project-scripts')
@endsection