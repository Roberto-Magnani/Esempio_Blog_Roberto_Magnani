<x-layout>

    <div class="contanire-fluid mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-10 myclass justify-content-center">
                <div class="row mt-5">
                    <div class="col-12 col-md-4 ">
                        <img src="{{ Storage::url($race->img) }}" alt="immagine di {{ $race->name }}"
                            class="image-container">
                    </div>
                    <div
                        class="col-12 col-md-8 bg-dark text-white story d-flex flex-column align-items-start myclass">
                        <h2>RAZZA: {{ $race->name }}</h2>

                        <p>Plot: {{ $race->plot }}</p>
                        <p>Allineamento: {{ $race->alignment }}</p>
                        <p>Età: {{ $race->age }}</p>
                        <p>Taglia: {{ $race->size }}</p>
                        <p>Velocità: {{ $race->speed }}</p>
                        <p>Linguaggi: {{ $race->languages->pluck('name')->join(', ') }}</p>
                        <p>Sottorazze: {{ $race->subrace }}</p>
                        <p>Creatore: {{ $race->user->name }}</p>
                        <a href="{{ route('races.index') }}" class="btn btn-outline-danger mt-3 mb-3">Torna Indietro</a>
                        <br>
                        @if ($isAdmin || auth()->user()->id === $race->user_id)
                            <a href="{{ route('races.edit', compact('race')) }}"
                                class="btn btn-outline-warning mb-3">Modifica</a>
                            <form action="{{ route('races.delete', compact('race')) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                @auth
                                    <button type="submit" class="btn btn-danger mb-3">Elimina Card</button>
                                @endauth
                            </form>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
