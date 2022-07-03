@extends('layouts.services')

@section('content')
@include('partials.banners.service-banner')
@include('partials.quick-contact')
<div class="container services-page page">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="page-header py-4">
<h2>Our Services</h2>
<p>Our Structures experience spans from the construction of bridges, reservoirs, chambers, water purification and wastewater treatment works, having constructed a number of major structures across the country.
</p>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-12 col-md">
              <h3 class="d-block mb-3">Services &nbsp; <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></h3>
            </div>

            {{-- Block 1 --}}
            <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
              <div class="border h-300 py-3 px-2 shadow">
                <div class="div-top-icon">
                     <img width="50" height="50" alt="Structures" src="/images/svg/maintenance.svg">
                </div>
              <div class="heading">
                    <h4 class="my-3">Structures</h4>
              </div>
              <div class="content">
              <p>Our Structures experience spans from the construction of bridges, reservoirs, chambers, water purification and wastewater treatment works, having constructed a number of major structures across the country.</p>
              <div class="footer content-footer">
                  <a data-toggle="modal" data-target="#structuresModalCenter" href="#">read more...</a>
</div>
</div>
</div>
            </div>

            {{-- Block 2 --}}
            <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
              <div class="border h-300 py-3 px-2 shadow">
<div class="div-top-icon">
  <img alt="Building" width="50" height="50" alt="Building" src="/images/svg/maintenance.svg">
</div>
<div class="heading"><h4 class="my-3">Building</h4></div>
<div class="content">
<p>
  Mayibuye is well equipped to oversee the construction management and site supervision of small and large-scale building projects from inception to completion.</p>
<div class="footer content-footer">
  <a data-toggle="modal" data-target="#BuildingModalCenter" href="#">read more...</a>
</div></div>
</div>
            </div>


            {{-- Block 3 --}}
            <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
              <div class="border h-300 py-3 px-2 shadow">
<div class="div-top-icon">
  <img width="50" height="50" alt="Storm Water" src="/images/svg/maintenance.svg">
</div>
<div class="heading"><h4 class="my-3">Storm Water</h4></div>
<div class="content">
<p>
  When it rains, stormwater washes over the roads and dams up on low point and can cause flooding of objects along its route.</p>
<div class="footer content-footer">
  <a data-toggle="modal" data-target="#StormWaterModalCenter" href="#">read more...</a>
</div></div>
</div>
            </div>

            {{-- Block 4 --}}
            <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
              <div class="border h-300 py-3 px-2 shadow">
<div class="div-top-icon">
  <img width="50" height="50"  alt="Road Construction" src="/images/svg/maintenance.svg">
</div>
<div class="heading"><h4 class="my-3">Road Construction</h4></div>
<div class="content">
<p>
  Mayibuye i-Afrika Trading is dedicated to achieving sustainable, long-term transport solutions by constructing high-quality roads to enhance South Africa’s capacity for industry and continued economic growth and development.</p>
<div class="footer content-footer">
  <a data-toggle="modal" data-target="#RoadConstructionModalCenter" href="#">read more...</a>
</div></div>
</div>
              </div>


              {{-- Block 5 --}}
              <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
                <div class="border h-300 py-3 px-2 shadow">
                <div class="div-top-icon">
                  <img width="50" height="50" alt="Bulk Water Reticulation" src="/images/svg/maintenance.svg">
                </div>
                <div class="heading"><h4 class="my-3">Bulk Water Reticulation</h4></div>
                <div class="content">
                <p>
                  We have completed projects incorporating the use of small and large water pipes in a mission to assist the government in ensuring relief of drought-affected areas around South Africa.</p>
                <div class="footer content-footer">
                  <a data-toggle="modal" data-target="#BulkWaterReticulationModalCenter" href="#">read more...</a>
                </div></div>
                </div>
                              </div>


                              {{-- Block 6 --}}
                              <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
                                <div class="border h-300 py-3 px-2 shadow">
                                <div class="div-top-icon">
                                  <img width="50" height="50" alt="Property Development" src="/images/svg/maintenance.svg">
                                </div>
                                <div class="heading"><h4 class="my-3">Property Development</h4></div>
                                <div class="content">
                                <p>
                                  From large-scale infrastructure to commercial and residential developments, Mayibuye i-Afrika Trading has an impressive history of delivering successful projects.</p>
                                <div class="footer content-footer">
                                  <a data-toggle="modal" data-target="#propertyDevelopment" href="#">read more...</a>
                                </div>
                                </div></div>
                                              </div>


                                              {{-- Block 7 --}}
                                              <div class="col-sm-12 col-md-4 py-2 my-3 h-350">
                                                <div class="border h-300 py-3 px-2 shadow">
                                                <div class="div-top-icon">
                                                  <img width="50" height="50" alt="Mechanical Work" src="/images/svg/maintenance.svg">
                                                </div>
                                                <div class="heading"><h4 class="my-3">Mechanical Work</h4></div>
                                                <div class="content">
                                                <p>
                                                  Mayibuye i-Afrika Trading has been into mechanical works, fabrication of steel structures and erection of heavy equipment.</p>
                                                <div class="footer content-footer">
                                                  <a data-toggle="modal" data-target="#mechanicalWork" href="#">read more...</a>
                                                </div>
                                                </div>
                                              </div>
                                      
                                                              </div>

          </div>

          
    </div>
</div>
</div>
@include('partials.banners.contact-banner')
@include('partials.footer')


<div class="modal fade" id="structuresModalCenter" tabindex="-1" role="dialog" aria-labelledby="structuresModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Structures</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Our Structures experience spans from the construction of bridges, reservoirs, chambers, water purification and wastewater treatment works, having constructed a number of major structures across the country. To add, we constructed underpasses, and utilise cast in-situ, pre-tensioned and post-tensioned concrete construction methods.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="BuildingModalCenter" tabindex="-1" role="dialog" aria-labelledby="BuildingModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Building</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Our experience in the construction of industrial and governmental building projects such as multi-storey buildings, warehouses, taxi ranks and bus depots, amongst others, Mayibuye i-Afrika Trading is well equipped to oversee the construction management and site supervision of small and large-scale building projects from inception to completion.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="StormWaterModalCenter" tabindex="-1" role="dialog" aria-labelledby="StormWaterModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StormWaterModalLongTitle">Storm Water</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        When it rains, stormwater washes over the roads and dams up on low point and can cause flooding of objects along its route. Mayibuye i-Afrika Trading experience in stormwater structures construction enables us to make sure we construct the proper stormwater controls that can proceed in a way that protects your community’s clean water and the surrounding environment and divert all stormwater into culvert structures.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="RoadConstructionModalCenter" tabindex="-1" role="dialog" aria-labelledby="RoadConstructionModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RoadConstructionModalLongTitle">Road Construction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Mayibuye i-Afrika Trading is dedicated to achieving sustainable, long-term transport solutions by constructing high-quality roads to enhance South Africa’s capacity for industry and continued economic growth and development. Mayibuye i-Afrika Trading has established itself as one of the industry leaders in the construction of road seals and asphalt pavements. With specialised skills and equipment, we provide asphalting and road surfacing services to several municipalities and government departments. We also offer road rehabilitation, road maintenance including the reconstruction of damaged surfaces.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="BulkWaterReticulationModalCenter" tabindex="-1" role="dialog" aria-labelledby="BulkWaterReticulationModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BulkWaterReticulationModalLongTitle">Bulk Water Reticulation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        We have completed projects incorporating the use of small and large water pipes in a mission to assist the government in ensuring relief of drought-affected areas around South Africa. We are able to accurately deliver or remove fluids to or from any particular site, over any particular terrain. We have consideration for environmental regulation in all our pipeline projects. From high pressure, large bore steel to non-corrosive HDPE piping including low-pressure reticulation for incorporation into the bulk water supply, sewerage, domestic use. We ensure that the dignity of our people is brought back through the successful completion of our projects.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="propertyDevelopment" tabindex="-1" role="dialog" aria-labelledby="propertyDevelopmentModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Property Development</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        From large-scale infrastructure to commercial and residential developments, Mayibuye i-Afrika Trading has an impressive history of delivering successful projects. We have the extensive technical knowledge, resources and a wealth of specialised skills to provide engineering and building services in commercial developments and premium residential land development.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="mechanicalWork" tabindex="-1" role="dialog" aria-labelledby="mechanicalWorkModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mechanical Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Mayibuye i-Afrika Trading has been into mechanical works, fabrication of steel structures and erection of heavy equipment. We fabricate different types of structures for the mechanical industry and also provide generators and HVAC solutions.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endsection



