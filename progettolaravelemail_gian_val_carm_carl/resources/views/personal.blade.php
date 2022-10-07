<x-layout>

    <x-slot name="title">
        <title>Personale</title>
    </x-slot>


<div class="container m-5 p-2 border-top">
        <div class="row">
            <div class="col ">
                <h2 class="fs-1">Scopri i nostri collaboratori</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
        @foreach($personal as $persona)
            <div class="col-12 col-md-3 my-2">
                <x-card-personale
                    :persona="$persona"
                />
            </div>
        @endforeach
        </div>
    </div>


    <x-footer />
</x-layout>
