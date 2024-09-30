<nav class="navbar navbar-expand-lg bg-dark fixed-top w-100">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{route('home')}}"><img src="/img/icone_D&D/icona.png" alt="icona-logo">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Razze
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('races.index')}}">Scopri tutte le razze</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('races.create')}}">Crea una nuova razza</a>
                            </li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Classi
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('classes.index')}}">Scopri tutte le classi</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('classes.create')}}">Crea una nuova classe</a>
                            </li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/incantesimi">Incantesimi</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="/scheda_pg">Schede PG</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Accedi/Registrati</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto: {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="">Il mio profilo</a>
                        </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="">I miei File</a>
                            </li>
                        
                    </ul>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-lg mt-2">logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>
