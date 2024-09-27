{{-- races_cards.blade.php --}}
<div class="continer mt-5">
    <div class="row justify-content-center">
        @foreach ($races as $race)
            <div class="col-12 col-md-4 d-flex justify-content-center mb-2">
                <div class="card bg-dark text-white" style="width: 18rem;">
                    <div class="image-container">
                        <img src="{{ $race['img'] }}" class="card-img-top" alt="Immagine di {{ $race['name'] }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $race["name"] }}</h5>
                        <p class="card-text">{{ Str::limit($race["plot"], 30) }}</p>
                        <a class="btn btn-dark btn-outline-light" >
                            Continua a leggere
                        </a>
                        {{-- <x-razze_modal :razza="$race"></x-razze_modal> qualora volessi aggiungere una componentead un altra componente come in questo caso andró a richiamare la componente con il solito tag "x-(nome_componente)" , inoltre dovró richiamare una classe ":(nome classe a mia scelta)=$(nome singolo elemento dell'array)"--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

