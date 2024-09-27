<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger col-6 text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="col-12 col-md-8">
                <h1>Apporta lemodifiche alle tua creazione:</h1>
                <form method="POST" action="{{ route('books.update', compact('book')) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nome razza:</label>
                        <input type="text" class="form-control" name="name" value="{{ $race->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Allineamento:</label>
                        <input type="text" class="form-control" name="alignment" value="{{ $race->alignment }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Età:</label>
                        <input type="text" class="form-control" name="age" value="{{ $race->age }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Taglia:</label>
                        <input type="text" class="form-control" name="size" value="{{ $race->size }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Velocità di movimento:</label>
                        <input type="text" class="form-control" name="speed" value="{{ $race->spped }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">LIngue Conosciute:</label>
                        <input type="text" class="form-control" name="language" value="{{ $race->language }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottorazze:</label>
                        <input type="text" class="form-control" name="subrace" value="{{ $race->subrace }}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea">Descrizione della razza:</label>
                        <textarea class="form-control" placeholder="Scrivi una trama" name="plot" value="{{ $race->plot }}"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Aggiorna</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>
