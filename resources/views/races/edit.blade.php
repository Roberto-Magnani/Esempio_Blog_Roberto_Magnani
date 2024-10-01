<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            
            <div class="col-12 col-md-8 mt-5 bg-dark myclass">
                @if ($errors->any())
                    <div class="alert alert-danger col-6 text-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="mt-3">Apporta le modifiche alle tua creazione:</h1>
                <form method="POST" action="{{ route('races.update', compact('race')) }}" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="speed" value="{{ $race->speed }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">LIngue Conosciute:</label>
                        <br>
                        <select name="languages[]" id="" multiple>
                            @foreach ($languages as $language)
                                <option value="{{ $language->id }}" 
                                    {{ in_array($language->id, $race->languages->pluck('id')->toArray()) ? 'selected' : '' }}>
                                    {{ $language->name }}
                                </option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottorazze:</label>
                        <input type="text" class="form-control" name="subrace" value="{{$race->subrace}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea">Descrizione della razza:</label>
                        <textarea class="form-control" name="plot" value="{{ $race->plot }}"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mb-3">Aggiorna</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>
