<div class="card cardStyle">
    <img src="{{ $service['img'] }}" class="card-img-top" alt="Immagine servizi">
    <div class="card-body my-3">
        <h5 class="card-title text-center h2">{{ $service['name'] }}</h5>
        <p class="card-text text-center">{{ $service['description'] }}</p>
    </div>
    <a class="link-secondary" href="{{ route('service.category', ['category' => $service['category']]) }}">
        <p class="card-text text-center">{{ $service['category'] }}</p>
    </a>
    <a href="{{ route('service.show', ['id' => $service['id']]) }}" class="btn btn-light my-4">Ti aiutiamo noi</a>
</div>
