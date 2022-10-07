<x-layout>
    <x-slot name="title">
        <title>Area personale</title>
    </x-slot>

    <div class="container-fluid mt-5 pt-2 border-top">
        <div class="row">
            <div class="col-6">
                <h2>Lista servizi</h2>
                <x-tabellaServizzi/>
            </div>
            <div class="col-6">
                <h2>Inserisci nuovi servizi </h2>
                <x-form-servizi/>
            </div>
        </div>
    </div>
    <div class="nav-rules sticky-bottom ">
        <nav class=" ditails-nav ">
            <div class="navigation oro">
                <ul class="">
                    <li class="list active ">
                        <a class="text-white" href="{{ route('area.comune') }}">
                            <span>
                                <i class="bi bi-lightbulb"></i> 
                            </span>
                            <span class="text">
                                aggiungi Servizi
                            </span>
                        </a>
                    </li>
                    <li class="list">
                        <a  class="text-white" href="{{ route('area.Comune.Personale') }}">
                            <span>
                                <i class="bi bi-file-earmark-person"></i>
                            </span>
                            <span class="text">
                                aggiungi Personale
                            </span>
                        </a>
                    </li>
                    <li  class="list">
                        <a class="text-white" href="#">
                            <span>
                                <i class="bi bi-box"></i>
                            </span>
                            <span class="text">
                                WNP
                            </span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            </div>
        </nav>
    </div>

</x-layout>
