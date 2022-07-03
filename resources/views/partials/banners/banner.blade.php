<div id="carouselExampleCaptions" class="carouse shadow slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/jpeg/construction-banner.jpg" class="d-block h-75" width="100%" height="100%" alt="Services banner">
        {{-- <div class="overlay"></div> --}}
        <div class="carousel-caption d-none d-md-block container">
          <h1 class="text-white">{{ucfirst(str_replace('-', ' ', request()->segment(count(request()->segments()))))}}</h1>
        <small class="text-white breadcrumb-item"><a href="{{route('welcome')}}">Home</a>&nbsp;|&nbsp;{{str_replace('-', ' ', request()->segment(count(request()->segments())))}}</small>
        </div>
      </div>

    </div>
  </div>