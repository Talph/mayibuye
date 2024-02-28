@extends('layouts.menu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 widget-area sidebar-left">
                <aside class="widget widget-nav-menu">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="v-pills-ibika-tab" data-toggle="pill"
                               data-target="#v-pills-ibika" type="button" role="tab" aria-controls="v-pills-ibika"
                               aria-selected="false">Ibika Centane bulk water
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-mgwali-tab" data-toggle="pill"
                               data-target="#v-pills-mgwali" type="button" role="tab" aria-controls="v-pills-mgwali"
                               aria-selected="false">
                                Mgwali South water supply scheme
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
                            <a class="nav-link" id="v-pills-sibanye-tab" data-toggle="pill"
                               data-target="#v-pills-sibanye" type="button" role="tab" aria-controls="v-pills-sibanye"
                               aria-selected="false">
                                Sibanye TD8 Silt Drain
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="v-pills-south-road-tab" data-toggle="pill"
                               data-target="#v-pills-south-road" type="button" role="tab" aria-controls="v-pills-south-road"
                               aria-selected="false">
                                South Road Bridge
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
                    <div class="tab-pane fade show active" id="v-pills-ibika" role="tabpanel"
                         aria-labelledby="v-pills-ibika-tab">
                        <h3>Ibika Centane bulk water</h3>
                        <p>Ibika Centani phase 3 contract 2 bulk water supply and reticulation.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/ibika/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/ibika/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/ibika/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/ibika/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/ibika/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/ibika/6.jpg')}}" alt="">
                    </div>

                    <div class="tab-pane fade" id="v-pills-mgwali" role="tabpanel"
                         aria-labelledby="v-pills-mgwali-tab">
                        <h3>Mgwali South water supply scheme</h3>
                        <p>Contract No. 8/2/198/2017-2018c Mgwali South Water supply: Contract 2 in Amathole District Municipality</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/mgwali/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/mgwali/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/mgwali/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/mgwali/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/mgwali/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/mgwali/6.jpg')}}" alt="">
                    </div>

                    <div class="tab-pane fade" id="v-pills-rea-vaya" role="tabpanel"
                         aria-labelledby="v-pills-rea-vaya-tab">
                        <h3>Rea Vaya BRT</h3>
                        <p>Reya Vaya Bus Rapid transport (BRT) system phase 1C; Construction of section 15 Work package 15. Louis Botha Avenue, Claremont to Arkwright avenue completion works.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/rea-vaya/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/rea-vaya/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/rea-vaya/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/rea-vaya/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/rea-vaya/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/rea-vaya/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-sibanye" role="tabpanel"
                         aria-labelledby="v-pills-sibanye-tab">
                        <h3>Sibanye TD8 Silt Drain</h3>
                        <p>TD8 project - Stormwater Dam a Silt trap.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/sibanye/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/sibanye/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/sibanye/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/sibanye/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/sibanye/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/sibanye/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-south-road" role="tabpanel"
                         aria-labelledby="v-pills-south-road-tab">
                        <h3>South Road Bridge</h3>
                        <p>Rehabilitation and Construction of South Road Bridge and Associated Civil Works</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/south-road-bridge/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/south-road-bridge/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/south-road-bridge/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/south-road-bridge/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/south-road-bridge/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/south-road-bridge/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-xhora" role="tabpanel"
                         aria-labelledby="v-pills-xhora-tab">
                        <h3>Xhora Bulk Water
                            Reticulation</h3>
                        <p>Xhora water supply scheme phase 1C & D: bulk pipeline 3 from Gqubhuza to Cwebe and from Tunzini to Mqwaneni and phase 1E & F: bulk pipeline 2 from res 5 tee to Kwavelelo from tee to Tsholora reservoir and bulk pipeline.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/xhora-bulk-water-reticulation/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/xhora-bulk-water-reticulation/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/xhora-bulk-water-reticulation/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/xhora-bulk-water-reticulation/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/xhora-bulk-water-reticulation/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/civil-engineering-structures/xhora-bulk-water-reticulation/6.jpg')}}"
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