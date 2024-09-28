<x-layout>

    <div class="contanire-fluid">
        <div class="row align-items-center justify-content-center">
            
            <div class="col-10 col-md-3 ">
                <img src="{{Storage::url($race->img)}}" alt="immagine di {{$race->name}}">
            </div>
            <div class="col-10 col-md-7">
                <h2>RAZZA: {{$race->name}}</h2>
                
                <p>Plot: {{$race->plot}}</p>
                <p>Allineamento: {{$race->alignment}}</p>
                <p>Età: {{$race->age}}</p>
                <p>Tagli: {{$race->size}}</p>
                <p>Velocità: {{$race->speed}}</p>
                <p>Linguaggi: {{$race->language}}</p>
                <p>Sottorazze: {{$race->subrace}}</p>
                <p>Creatore: {{$race->user()->name}}</p>
                <a href="{{route('races.index')}}" class="btn btn-outline-danger mt-3 mb-3">Torna Indietro</a>
                <br>
                @if ($race->user()->id == Auth::user()->id)
                <a href="{{route('races.edit', compact('race'))}}" class="btn btn-outline-warning mb-3">Modifica</a>
                <form action="{{route('races.delete', compact('race'))}}" method="POST">
                    @csrf
                    @method('DELETE')
                    @auth
                    <button type="submit" class="btn btn-danger">Elimina Card</button>
                    @endauth
                </form>
                @endif
            </div>
            
            
        </div>
    </div>
</x-layout>