<x-layout>

<x-slot name="title">
    <title>Homepage</title>
</x-slot>

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

    {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    </div>

@endif



    <x-masthead />

    <div class="container m-5 p-2 border-top">
        <div class="row">
            <div class="col">
                <h2>I nostri servizi</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid servizzi d-flex justify-content-around align-items-center">
        <div class="row">
            @foreach ($services as $service)
            <div class="col m-2">
                <x-card :service="$service" />
            </div>
            @endforeach
        </div>
    </div>

    <div class="container m-5 p-2 border-top">
        <div class="row">
            <div class="col">
                <h2>Il nostro personale</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid personale d-flex justify-content-around align-items-center">
        <div class="row">
            @foreach ($personal as $persona)
            <div class="col m-2">
                <x-card-personale :persona="$persona" />
            </div>
            @endforeach
        </div>
    </div>
    <div class="container m-5 p-2 border-top">
        <div class="row">
            <div class="col">
                <h2>Contattaci</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid d-block ">
        <div class="row min-c">
            <div class="col-6 contatti">
                <img src="./img/3.png" alt="">
            </div>
            <div class="col-6 ">

            <x-form-email/>
        </div>

            </div>
        </div>
    </div>




    <x-footer/>

</x-layout>
