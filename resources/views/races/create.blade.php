<x-layout>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger col-6 text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-12 col-md-6 mt-5 bg-dark myclass">
                <h3>Compila tutti dati per la razza che vuoi creare:</h3>
                <form method="POST" action="{{ route('races.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome razza:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Allineamento:</label>
                        <input type="text" class="form-control" name="alignment">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Età:</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Taglia:</label>
                        <input type="text" class="form-control" name="size">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Velocità di movimento:</label>
                        <input type="text" class="form-control" name="speed">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">LIngue Conosciute:</label>
                        <input type="text" class="form-control" name="language">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottorazze:</label>
                        <input type="text" class="form-control" name="subrace">
                    </div>
                    <div class="form-floating mb-3">
                        <p class="form-label">Descrizione della razza:</p>
                        <textarea class="form-control" placeholder="Scrivi una trama" name="plot"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mb-3">Carica</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>
