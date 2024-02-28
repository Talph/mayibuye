@extends('layouts.menu')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 widget-area sidebar-left">
                <aside class="widget widget-nav-menu">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item" role="presentation" >
                            <a class="nav-link active" id="v-pills-joubert-ludidi-tab" data-toggle="pill"
                               data-target="#v-pills-goedgedacht-clinic" type="button" role="tab" aria-controls="v-pills-joubert-ludidi"
                               aria-selected="false">Goedgedacht Clinic</a></li>
                        <li class="nav-item" role="presentation" >
                            <a class="nav-link" id="v-pills-dbsa-limpopo-tab" data-toggle="pill"
                                                                     data-target="#v-pills-dbsa-limpopo" type="button" role="tab" aria-controls="v-pills-dbsa-limpopo"
                                                                     aria-selected="true">DBSA - Safe Project Limpopo</a></li>
                        <li class="nav-item" role="presentation" >
                            <a class="nav-link" id="v-pills-drieziek-tab" data-toggle="pill"
                                                                     data-target="#v-pills-drieziek" type="button" role="tab" aria-controls="v-pills-drieziek"
                                                                     aria-selected="false">Drieziek public transport facility</a></li>
                        <li class="nav-item" role="presentation" >
                            <a class="nav-link" id="v-pills-joubert-ludidi-tab" data-toggle="pill"
                                                                     data-target="#v-pills-joubert-ludidi" type="button" role="tab" aria-controls="v-pills-joubert-ludidi"
                                                                     aria-selected="false">Joubert Ludidi SSS</a></li>
                        <li class="nav-item" role="presentation" >
                            <a class="nav-link" id="v-pills-umhlathuze-student-housing-tab" data-toggle="pill"
                                                                     data-target="#v-pills-umhlathuze-student-housing" type="button" role="tab" aria-controls="v-pills-umhlathuze-student-housing"
                                                                     aria-selected="false">Umhlathuze Student Housing</a></li>
                        <li class="nav-item" role="presentation" >
                            <a class="nav-link" id="v-pills-ec-safe-facilities-tab" data-toggle="pill"
                                                                     data-target="#v-pills-ec-safe-facilities" type="button" role="tab" aria-controls="v-pills-ec-safe-facilities"
                                                                     aria-selected="false">Eastern Cape SAFE Facilities</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-dbsa-limpopo" role="tabpanel"
                         aria-labelledby="v-pills-dbsa-limpopo-tab">
                        <h3>DBSA - Safe Project Limpopo</h3>
                        <p>Design and Construction of sanitation facilities in the Limpopo province for DBSA.</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/building/dbsa-safe-project-limpopo/1.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/dbsa-safe-project-limpopo/2.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/dbsa-safe-project-limpopo/3.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/dbsa-safe-project-limpopo/4.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/dbsa-safe-project-limpopo/5.jpg')}}" alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/dbsa-safe-project-limpopo/6.jpg')}}" alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-drieziek" role="tabpanel"
                         aria-labelledby="v-pills-drieziek-tab">
                        <h3>Drieziek public transport facility</h3>
                        <p>Construction of Drieziek public facility (Transport facility)</p>
                        <img class="grid-gallery-item" src="{{asset('/projects/building/drieziek/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/drieziek/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/drieziek/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/drieziek/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/drieziek/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/drieziek/6.jpg')}}"
                             alt="">
                    </div>
                    <div class="tab-pane fade" id="v-pills-joubert-ludidi" role="tabpanel"
                         aria-labelledby="v-pills-joubert-ludidi-tab">
                        <h3>Joubert Ludidi SSS</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/building/joubert-ludidi/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/joubert-ludidi/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/joubert-ludidi/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/joubert-ludidi/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/joubert-ludidi/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/joubert-ludidi/6.jpg')}}"
                             alt="">
                    </div>
                    <div class="tab-pane fade show active" id="v-pills-goedgedacht-clinic" role="tabpanel"
                         aria-labelledby="v-pills-goedgedacht-clinic-tab">
                        <h3>Goedgedacht Clinic</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/building/goedgedacht-clinic/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/goedgedacht-clinic/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/goedgedacht-clinic/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/goedgedacht-clinic/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/goedgedacht-clinic/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/goedgedacht-clinic/6.jpg')}}"
                             alt="">
                    </div>

                    <div class="tab-pane fade" id="v-pills-umhlathuze-student-housing" role="tabpanel"
                         aria-labelledby="v-pills-umhlathuze-student-housing-tab">
                        <h3>Umhlathuze Student Housing</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/building/umhlathuze-student-housing/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/umhlathuze-student-housing/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/umhlathuze-student-housing/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/umhlathuze-student-housing/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/umhlathuze-student-housing/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/umhlathuze-student-housing/6.jpg')}}"
                             alt="">
                    </div>

                    <div class="tab-pane fade" id="v-pills-ec-safe-facilities" role="tabpanel"
                         aria-labelledby="v-pills-ec-safe-facilities-tab">
                        <h3>Eastern Cape SAFE Facilities</h3>
                        <img class="grid-gallery-item" src="{{asset('/projects/building/ec-safe-facilities/1.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/ec-safe-facilities/2.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/ec-safe-facilities/3.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/ec-safe-facilities/4.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/ec-safe-facilities/5.jpg')}}"
                             alt="">
                        <img class="grid-gallery-item" src="{{asset('/projects/building/ec-safe-facilities/6.jpg')}}"
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