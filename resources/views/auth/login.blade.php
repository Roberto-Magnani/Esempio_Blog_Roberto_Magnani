<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 align-content-center justify-content-center">
            <div class="col-12  col-md-6">
                <div class="display-1">
                    Accedi:
                </div>
                {{-- inizio form di registrazione --}}
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
                <div class="mt-5">
                    <p>Non sei ancora registrato? Allora che aspetti, fallo subito:</p>
                    <a href="{{route('register')}}" class="btn btn-primary">Registrati</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>


