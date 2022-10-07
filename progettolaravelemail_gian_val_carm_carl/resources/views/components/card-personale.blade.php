<div class="card cardStyle">
    <img src="{{ $persona['img'] }}" class="card-img-top" alt="Immagine raffigurante il personale">
    <div class="card-body my-3 h2">
        <h5 class="card-title text-center">{{ $persona['name'] }} {{ $persona['surname'] }}:</h5>
    </div>
    <p class="card-text text-center">{{ $persona['category'] }}</p>
    <a href="{{ route('service.category', ['category' => $persona['category']]) }}" class="btn btn-light my-4">Vedi di
        più</a>
</div>
