@extends('layouts.menu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 widget-area sidebar-left">
                <aside class="widget widget-nav-menu">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="v-pills-bond-street-tab" data-toggle="pill"
                               data-target="#v-pills-bond-street" type="button" role="tab" aria-controls="v-pills-bond-street"
                               aria-selected="false">
                                Bond Street Stormwater upgrade
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-protea-glen-system-tab" data-toggle="pill"
                               data-target="#v-pills-protea-glen-system" type="button" role="tab"
                               aria-controls="v-pills-protea-glen-system"
                               aria-selected="false">
                                Protea Glen System
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-rea-vaya-tab" data-toggle="pill"
                               data-target="#v-pills-rea-vaya" type="button" role="tab" aria-controls="v-pills-rea-vaya"
                               aria-selected="false">
                                Rea Vaya BRT
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-south-road-tab" data-toggle="pill"
                               data-target="#v-pills-south-road" type="button" role="tab"
                               aria-controls="v-pills-south-road"
                               aria-selected="false">
                                South Road Bridge
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
                            <a class="nav-link" id="v-pills-xhora-tab" data-toggle="pill"
                               data-target="#v-pills-xhora" type="button" role="tab" aria-controls="v-pills-xhora"
                               aria-selected="true">Xhora Bulk Water
                                Reticulation
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-bond-street" role="tabpanel"
                         aria-labelledby="v-pills-bond-street-tab">
                        <h3>Bond Street Stormwater upgrade</h3>
                        <p>Construction of works: Klein Juksei catchment bond stream relief system in the city of Johannesburg Region B - Phase 1</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/bond-street/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/bond-street/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/bond-street/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/bond-street/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/bond-street/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/bond-street/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-protea-glen-system" role="tabpanel"
                         aria-labelledby="v-pills-protea-glen-system-tab">
                        <h3>Protea Glen System</h3>
                        <p>Contract No. JRA/19/007 Protea Glen (Stormwater Systems: Phase 05)</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/protea-glen-system/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/protea-glen-system/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/protea-glen-system/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/protea-glen-system/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/protea-glen-system/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/protea-glen-system/6.jpg')}}" alt="">
                    </div>

                    <div class="tab-pane fade" id="v-pills-rea-vaya" role="tabpanel"
                         aria-labelledby="v-pills-rea-vaya-tab">
                        <h3>Reya Vaya BRT</h3>
                        <p>Reya Vaya Bus Rapid transport (BRT) system phase 1C; Construction of section 15 Work package
                            15. Louis Botha Avenue, Claremont to Arkwright avenue completion works.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/rea-vaya/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/rea-vaya/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/rea-vaya/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/rea-vaya/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/rea-vaya/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/rea-vaya/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-south-road" role="tabpanel"
                         aria-labelledby="v-pills-south-road-tab">
                        <h3>South Road Bridge</h3>
                        <p>Rehabilitation and Construction of South Road Bridge and Associated Civil Works</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/south-road-bridge/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/south-road-bridge/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/south-road-bridge/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/south-road-bridge/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/south-road-bridge/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/south-road-bridge/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-vorna-valley" role="tabpanel"
                         aria-labelledby="v-pills-vorna-valley-tab">
                        <h3>Vorna Valley Project</h3>
                        <p></p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/vorna-valley/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/vorna-valley/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/vorna-valley/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/vorna-valley/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/vorna-valley/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/vorna-valley/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-xhora" role="tabpanel"
                         aria-labelledby="v-pills-xhora-tab">
                        <h3>Xhora Bulk Water
                            Reticulation</h3>
                        <p>Xhora water supply scheme phase 1C & D: bulk pipeline 3 from Gqubhuza to Cwebe and from
                            Tunzini to Mqwaneni and phase 1E & F: bulk pipeline 2 from res 5 tee to Kwavelelo from tee
                            to Tsholora reservoir and bulk pipeline.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/xhora-bulk-water-reticulation/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/xhora-bulk-water-reticulation/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/xhora-bulk-water-reticulation/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/xhora-bulk-water-reticulation/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/xhora-bulk-water-reticulation/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-roads-and-earthworks/xhora-bulk-water-reticulation/6.jpg')}}"
                             alt="">
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