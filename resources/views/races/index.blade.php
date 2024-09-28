<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-white">
                <h2 class="text-center">Queste sono le razze iconiche presenti all'interno di D&D:</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">

            @forelse ($races as $race)
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <x-races_cards :race="$race" />
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="text-center">Non sono ancora presenti razze homemade.</h2>
                </div>
            @endforelse



        </div>
    </div>


</x-layout>
