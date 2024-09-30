{{-- classes_cards.blade.php --}}
<div class="card bg-dark text-white" style="width: 18rem;">
    <div class="image-container">
        <img src="{{ Storage::url($class->img) }}" class="card-img-top" alt="Immagine di {{ $class['name'] }}">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $class['name'] }}</h5>
        <p class="card-text">{{ Str::limit($class['plot'], 30) }}</p>
        <a href="{{route('classes.show_class', compact('class'))}}" class="btn btn-dark btn-outline-light">
            Continua a leggere
        </a>
    </div>
</div>