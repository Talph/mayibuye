@extends('layouts.menu')

@section('content')
@include('partials.banners.banner')
@include('partials.quick-contact')
<div class="container gallery-page" id="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="page-header py-4">
<h2>Gallery</h2>
<p>Mayibuye i-Afrika strive to act as an interface to engage the public in our vision for a liveable, sustainable and affordable future for our cities and neighbourhoods. Please have a look at our gallery</p>
        </div>
               <div class="grid-gallery">
                    @foreach ($images as $image)
                    <div class="grid-gallery-item">
                             <img src="{{ asset('gallery/' . $image->getFilename()) }}">
                    </div>
                             @endforeach

          </div>
    </div>
</div>
</div>
@include('partials.banners.contact-banner')
@include('partials.gallery-scripts')
@include('partials.footer')

@endsection
