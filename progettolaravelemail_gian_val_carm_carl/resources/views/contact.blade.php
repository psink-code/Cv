<x-layout>

    <x-slot name="title">
        <title>Contatti</title>
    </x-slot>


    <div class="container p-5 w-50">
        <div class="row">
            <div class="col">
                <h1>Contattaci</h1>
                <p>Hai dato l'anticipo? Ti risponderemo</p>
            </div>
        </div>

        <div class="col">
            <form method="POST" action="{{route('contact.send')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefono:</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Messaggio:</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>


    <x-footer />
</x-layout>
