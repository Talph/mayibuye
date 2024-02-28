<div class="container">
    <h2 class="text-center pb-4">Our Clients</h2>
    <section class="logos slider">
        @forelse(\App\Models\Client::all() as $client)
            <img style="width: 182px" src="{{$client->getLastMediaUrl('logos')}}" alt="{{$client->client_name}}">
        @empty
        @endforelse
    </section>
</div>
