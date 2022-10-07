<x-layout>
    <x-slot name="title">
        <title>Servizi</title>
    </x-slot>


    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>
                    Tutti i nostri Servizi

                </h1>

            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
        @foreach($services as $service)

                <div class="col-12 col-md-3 my-2">
                    <x-card
                   :service="$service"
                    />

                </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
