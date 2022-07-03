<div id="carouselExampleCaptions" class="carousel slide shadow" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      {{-- <li data-target="#carouselExampleCaptions" data-slide-to="1"></li> --}}
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay"></div>
        <img src="images/jpeg/construction-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block container">
          <h1 class="text-white text-uppercase">Civil engineering at its best</h1>
          <p class="text-white">Quality comes first! We make sure that every minute detail is looked into <br> while constructing even the smallest project. Our focus is 100% on client needs <br>  and satisfaction.</p>
          <a class="btn button bg-primary button-primary" href="{{route('contact-us')}}"><span class="text-white">Contact us</span></a>
        </div>
      </div>
      {{-- <div class="carousel-item">
        <img src="images/jpeg/slide-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class="text-dark">We explore your ability and supply <br/>your business needs </h1>
            <p class="text-dark">Cost effective products and services</p>
            <a class="btn button bg-primary button-primary" href="/contact-us"><span class="text-white">Contact us</span></a>
        </div>
      </div> --}}
      <div class="carousel-item">
        <img src="images/jpeg/construction-3.jpg" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block container">
            <h1 class="text-white text-uppercase">Let us supply your construction needs. </h1>
            <p class="text-white">
              We undertake a wide variety of building and maintenance work – from small, residential projects, <br> to large commercial or industrial projects.
              
              {{-- Teamwork<span class="dot font-weight-bolder">.</span> Integrity<span class="dot font-weight-bolder">. </span>Quality<span class="dot font-weight-bolder">.</span> --}}
            </p>
            <a class="btn button bg-primary button-primary" href="{{route('projects')}}"><span class="text-white">Our projects</span></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>