<?php
$arrow = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
              </svg>';
?>

@extends('layouts.menu')

@section('content')
@include('partials.banners.banner')
@include('partials.quick-contact')
<div class="container">

    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="page-header pt-4">
<h2>Projects</h2>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-9">
<p class="text-muted blockquote mb-0">Mayibuye i-Afrika strive to act as an interface to engage the public in our vision for a liveable, sustainable and affordable future for our cities and neighbourhoods. {!!$arrow!!}</p>
</div>
</div>

@include('partials.project-table')

 <div class="project-section mt-5 shadow">
<div class="row">

<div class="col-md-6">
<div class="img-proj">
<img class="border-radius-5" src="{{asset('projects/Ibika-centane-bulk-water.jpg')}}" width="100%">    
</div>    
</div> 

<div class="col-md-6">
    <div class="content">
        <div class="title italics">Project title: {!! ($arrow)!!}</div>
    <div class="title-top"><h5 class="font-weight-bold">Ibika-Centane Bulk Water Supply and reticulation</h5></div>
    <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div><div class="text desc-proj">
        The Project Ibika – Centane Phase 3 Contract 2 Bulk Water Supply and Reticulation is in Mhlahlane, Willowvale, Eastern Cape. The Project is part of a major upgrade of bulk water reticulation as an answer tor the drought that has hit the Mbhashe region. This Contract entails 37 km of pipelines, three river crossings, chambers and one 50 Kl reservoir.
    </div>
    <div class="proj__client italics">Client: {!! ($arrow)!!}</div><div class="client text proj__client">
    Amathole Discrict Municipality
    </div>
    </div>
</div>

</div>
</div> 
 
<div class="project-section-second mt-5 shadow">
    <div class="row">
    <div class="col-md-6">
        <div class="content">
            <div class="title italics">Project title: {!! ($arrow)!!}</div>
        <div class="title-top"><h5 class="font-weight-bold">South Road Bridge Construction</h5></div>
        <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
        <div class="text desc-proj">
            The Project JRA/19/007 – South Road Bridge Construction in Johannesburg. The project comes as a relief to the flooding the area encounters during rainy season. The Project entails 3.2 kms of bulk stormwater, reinstating G5 and G1 and reinstating 30mm continuously graded asphalt.</div>
            <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
            <div class="client text proj__client">
        Johannesburg Roads Agency
        </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="img-proj">
    <img class="border-radius-5" src="{{asset('projects/south-road-bridge.jpg')}}" width="100%">    
    </div>    
    </div>    
    </div>
    </div>


    <div class="project-section mt-5 shadow">
        <div class="row">

        <div class="col-md-6">
        <div class="img-proj">
        <img class="border-radius-5" src="{{asset('projects/Construction-of-Sports-Fields.jpg')}}" width="100%">    
        </div>    
        </div>  
        <div class="col-md-6">
            <div class="content">
                <div class="title italics">Project title: {!! ($arrow)!!}</div>
            <div class="title-top"><h5 class="font-weight-bold">Construction of Sports Fields</h5></div>
            <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
            
            <div class="text desc-proj">
                Framework Contract for the Construction of Sports Fields within Elundini Municipality in the Eastern Cape.</div>
                <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                <div class="client text proj__client">
            Elundini Municipality
            </div>
            </div>
        </div>  
        </div>
        </div>



        <div class="project-section-second mt-5 shadow">
            <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <div class="title italics">Project title: {!! ($arrow)!!}</div>
                <div class="title-top"><h5 class="font-weight-bold">Bond Street Stormwater Upgrade</h5></div>
                <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
                <div class="text desc-proj">
                   These Storm-water Upgrade and Associated Civil Works took place in Ferndale, a small surburb in Randburg in the city of Johanneburg.</div>
                   <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                   <div class="client text proj__client">
                Johannesburg Roads Agency
                </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="img-proj">
            <img class="border-radius-5" src="{{asset('projects/Bond-Street-Stormwater-Upgrade.jpg')}}" width="100%">    
            </div>    
            </div>    
            </div>
            </div>


            <div class="project-section mt-5 shadow">
                <div class="row">


                <div class="col-md-6">
                <div class="img-proj">
                <img class="border-radius-5" src="{{asset('projects/BRT-SELBY-PHASE-2C.jpg')}}" width="100%">    
                </div>    
                </div> 
                <div class="col-md-6">
                    <div class="content">
                        <div class="title italics">Project title: {!! ($arrow)!!} </div>
                    <div class="title-top"><h5 class="font-weight-bold">BRT SELBY PHASE 2C</h5></div>
                    <div class="p proj-summary italics">Summary: {!! ($arrow)!!} </div>
                    <div class="text desc-proj">
                        Alterations of Bus Depot, and Associated Building Works</div>
                        <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                    <div class="client text proj__client">
                    Johannesburg Development Agency
                    </div>
                    </div>
                </div>   
                </div>
                </div>


                <div class="project-section-second mt-5 shadow">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <div class="title italics">Project title: {!! ($arrow)!!}</div>
                        <div class="title-top"><h5 class="font-weight-bold">Drieziek Public Transport Facility</h5></div>
                        <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
                        <div class="text desc-proj">
                            Buildings and Associated Civil Works</div>
                            <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                        <div class="client text proj__client">
                        Johannesburg Development Agency
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="img-proj">
                    <img class="border-radius-5" src="{{asset('projects/Drieziek-Public-Transport-Facility.jpg')}}" width="100%">    
                    </div>    
                    </div>    
                    </div>
                    </div>



                    <div class="project-section mt-5 shadow">
                        <div class="row">

                        <div class="col-md-6">
                        <div class="img-proj">
                        <img class="border-radius-5" src="{{asset('projects/Protea-Glen.jpg')}}" width="100%">    
                        </div>    
                        </div> 
                        <div class="col-md-6">
                            <div class="content">
                                <div class="title italics">Project title: {!! ($arrow)!!}</div>
                            <div class="title-top"><h5 class="font-weight-bold">Protea Glen</h5></div>
                            <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
                            <div class="text desc-proj">
                                Protea Glen Road and Stormwater Upgrades</div>
                                <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                            <div class="client text proj__client">
                            Johannesburg Development Agency
                            </div>
                            </div>
                        </div>   
                        </div>
                        </div>



                        <div class="project-section-second mt-5 shadow">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="content">
                                    <div class="title italics">Project title: {!! ($arrow)!!}</div>
                                <div class="title-top"><h5 class="font-weight-bold">Mgwali South Water Supply Scheme</h5></div>
                                <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
                                <div class="text desc-proj">
                                    Water Reticulation and Associated Works for Mgwali</div>
                                    <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                                <div class="client text proj__client">
                                Amathole Discrict Municipality
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="img-proj">
                            <img class="border-radius-5" src="{{asset('projects/Mgwali-South-Water-Supply-Scheme.jpg')}}" width="100%">    
                            </div>    
                            </div>    
                            </div>
                            </div>



                            <div class="project-section mt-5 shadow">
                                <div class="row">
                               
                                <div class="col-md-6">
                                <div class="img-proj">
                                <img class="border-radius-5" src="{{asset('projects/Rea-Vaya-BRT.jpg')}}" width="100%">    
                                </div>    
                                </div>   
                                <div class="col-md-6">
                                    <div class="content">
                                        <div class="title italics">Project title: {!! ($arrow)!!}</div>
                                    <div class="title-top"><h5 class="font-weight-bold">Rea Vaya BRT</h5></div>
                                    <div class="p proj-summary italics">Summary: {!! ($arrow)!!}</div>
                                    <div class="text desc-proj">
                                        Road construction for Rea Vaya from Clarendon to Arkwright.</div>
                                        <div class="proj__client italics">Client: {!! ($arrow)!!}</div>
                                    <div class="client text proj__client">
                                    Johannesburg Development Agency
                                    </div>
                                    </div>
                                </div> 
                                </div>
                                </div> 
</div>
@include('partials.banners.contact-banner')
@include('partials.footer')
@endsection

@section('scripts')
@include('partials.project-scripts')
@endsection