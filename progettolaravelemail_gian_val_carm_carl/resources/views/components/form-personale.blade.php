<div class="container-fluid form-personale p-4 rounded">
    <form method="POST" action="{{route('article.store')}}" >
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">cognome</label>
            <input name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">categoria</label>
            <select name="category" class="form-control">
                <option value="">---seleziona categoria---</option>
                <option value="tributario">tributario</option>
                <option value="finanza">penale</option>
                <option value="assicurativo">assicurativo</option>
                <option value="civile">civile</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Aggiungi foto</label>
            <input name="img" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Breve descrizione</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn gold">Invia</button>
    </form>
</div>
