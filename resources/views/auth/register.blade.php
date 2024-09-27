<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 align-content-center justify-content-center">
            <div class="col-12 col-md-6">
                <div class="display-1">
                    Registrati
                </div>
                {{-- inizio form di registrazione --}}
                <form method="POST" action="{{route ('register')}}"> 
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
                <div class="mt-5">
                    <p>Sei giá registrato? Allora torna indietro ed effettua l'accesso:</p>
                    <a href="{{route('login')}}" class="btn btn-primary">Torna al login</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>