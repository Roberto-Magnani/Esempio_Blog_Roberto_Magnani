<!-- section contact_us -->
<section class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-white text-center my-5">
            <h2>CONTATTACI</h2>
        </div>
        <div class="col-12 col-md-4">
            @if (session ('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <form class="bg-dark rounded-4 p-3" method="POST" action="{{route('send_email')}}">
                @csrf
                <div class="mb-3 text-white">
                    <label for="userName" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Nome*">
                </div>
                <div class="mb-3 text-white">
                    <label for="userEmail" class="form-label">Email address</label>
                    <input type="email*" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp"
                        placeholder="E-mail*">
                    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 text-white">
                    <label for="userText" class="form-label">Esponoci il tuo quesito Avventuriero:</label>
                    <textarea type="text" name="description" class="form-control" cols="30" rows="5" id="userText" placeholder="Inserisci un testo!"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-light">Invia</button>
            </form>
        </div>
    </div>
</section>