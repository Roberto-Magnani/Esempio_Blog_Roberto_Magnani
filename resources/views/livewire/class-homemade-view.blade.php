<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-white">
            <h2 class="text-center">Ecco alcune classi "Homemade" ideate da altri avventurieri:</h2>
        </div>
        @if (session('status'))
            <div class="alert alert-success text-center mt-3 ">
                {{ session('status') }}
            </div>
        @endif
        @if (session('successMessage'))
            <div class="alert alert-success text-center mt-3 ">
                {{ session('successMessage') }}
            </div>
        @endif
        @if (session('errorMessage'))
            <div class="alert alert-success text-center mt-3 ">
                {{ session('errorMessage') }}
            </div>
        @endif
        @forelse ($classes as $class)
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                <x-classes_cards_homemade :class="$class" />
            </div>
        @empty
            <div class="col-12 d-flex justify-content-center">
                <h2 class="text-center text-danger">Non sono ancora presenti classi homemade.</h2>
            </div>
        @endforelse



    </div>
</div>