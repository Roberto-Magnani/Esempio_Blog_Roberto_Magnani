<x-layout>

    <div class="contanire-fluid mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-10 myclass justify-content-center">
                <div class="row mt-5">
                    <div class="col-12 col-md-4 ">
                        <img src="{{ Storage::url($class->img) }}" alt="immagine di {{ $class->name }}"
                            class="image-container">
                    </div>
                    <div
                        class="col-12 col-md-8 bg-dark text-white story d-flex flex-column align-items-start myclass">
                        <h2>CLASSE: {{ $class->name }}</h2>

                        <p>Categoria: {{ $class->class }}</p>
                        <p>Dadi Vita: {{ $class->pf_dice }}</p>
                        <p>PF al 1°livello: {{ $class->pf_first }}</p>
                        <p>PF ai livelli successivi: {{ $class->pf_higher }}</p>
                        <ul>Competenze:
                            <li><p>Armature: {{ $class->armors }}</p></li>
                            <li><p>Armi: {{ $class->weapons}}</p></li>
                            <li><p>Attrezzi: {{ $class->tools }}</p></li>
                        </ul>
                        <p>Tiri Salvezza: {{ $class->saving_throws }}</p>
                        <p>Abilità: {{ $class->abilities }}</p>
                        <p>Equipaggiamento iniziale: {{ $class->equipments }}</p>
                        <p>Creatore: {{ $class->user->name }}</p>
                        <a href="{{ route('classes.index') }}" class="btn btn-outline-danger mt-3 mb-3">Torna Indietro</a>
                        <br>
                        @if ($class->user->id == Auth::user()->id)
                            <a href="{{ route('classes.edit', compact('class')) }}"
                                class="btn btn-outline-warning mb-3">Modifica</a>
                            <form action="{{ route('classes.delete', compact('class')) }}" method="POST">
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
