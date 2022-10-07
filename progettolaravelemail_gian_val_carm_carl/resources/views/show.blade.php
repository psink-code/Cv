<x-layout>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>{{$service['name']}}</h1>
                <p>{{$service['description']}}</p>
                <p>{{$service['category']}}</p>
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>