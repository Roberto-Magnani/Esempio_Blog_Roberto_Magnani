<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 align-content-center justify-content-center">
            <div class="col-12 col-md-6 myclass bg-dark mt-5">
                <div class="display-1">
                    Registrati
                </div>
                {{-- inizio form di registrazione --}}
                <form method="POST" action="{{route ('register')}}" > 
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" name="email">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="name">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-outline-danger">Registrati</button>
                </form>
                <div class="mt-4 mb-4">
                    <p>Sei giá registrato? Allora torna indietro ed effettua l'accesso:</p>
                    <a href="{{route('login')}}" class="btn btn-outline-danger">Torna al login</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>