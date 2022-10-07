<nav class="navbar navbar-expand-lg dettagli navbar-light bg-light sticky-top">
    <div class="container-fluid ">
        <img class="logo" src="/img/logo.png" alt="">
        <a class="nav-link active link fs-5 mx-3" aria-current="page"
                        href="{{ route('area.comune') }}">Area personale</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link link active fs-5 mx-3" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link fs-5 mx-3" aria-current="page"
                        href="{{ route('service.index') }}">Servizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link fs-5 mx-3"aria-current="page"
                        href="{{ route('ShowPersonalHome') }}">Personale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link fs-5 mx-3" aria-current="page"
                        href="{{ route('contact_page') }}">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
