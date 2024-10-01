<x-layout>

    <!-- header -->
    <header class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center text-white">
            <div class="col-12">
                <h2 class=" text-center">"La classe è la principale definizione del tuo personaggio. È più di una
                    professione; è la vocazione del tuo personaggio."</h2>

                <h4>
                    <p>La classe definisce il modo in cui valuti il mondo e interagisci con esso, oltre che i tuoi
                        legami
                        con le altre persone e le
                        potenze del multiverso. Un guerriero, ad esempio, potrebbe vedere il mondo in termini
                        pragmatici, di
                        strategie e
                        manovre, e considerarsi come una semplice pedina di un gioco molto più grande. Un chierico, per
                        contrasto, potrebbe
                        reputarsi un servitore consenziente dei piani di un dio o di un conflitto tra varie divinità.
                    </p>
                    <p>Mentre
                        il guerriero ha contatti
                        nelle compagnie mercenarie e nell’esercito, il chierico potrebbe conoscere sacerdoti, paladini e
                        credenti che condividono
                        la sua fede.</p>
                    <p>
                        La tua classe fornisce diversi privilegi speciali, come la maestria del guerriero nelle armi e
                        le
                        armature e gli incantesimi
                        del mago. Ai bassi livelli, la tua classe ti fornisce solo due o tre privilegi, ma col
                        progredire di
                        livello ne otterrai di nuovi e
                        spesso potrai migliorare quelli già posseduti. La descrizione di ogni classe in questo capitolo
                        comprende una tabella che
                        riassume i benefici che otterrai a ciascun livello, e un esempio dettagliato di ciascuno di
                        essi.</p>
                    <p>
                        A volte gli avventurieri possono avanzare in più di una classe. Un furfante potrebbe cambiare
                        vocazione e darsi alla
                        classe del chierico, pur continuando a progredire come furfante. Gli elfi sono ben noti per la
                        capacità nel combinare la
                        maestria nelle armi con l’addestramento magico e avanzano simultaneamente come guerrieri e
                        maghi.
                        Regole opzionali
                        per combinare le classi in questo modo, dette multiclassare, vengono presentate nelle regole
                        avanzate del gioco.
                        Quattro classi base – indicate nella tabella Classi – sono quelli che si trovano in praticamente
                        tutti i mondi di gioco e
                        definiscono l'avventuriero tipico. Vedi le regole avanzate per informazioni sulle altre classi.
                    </p>
                </h4>
            </div>


        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-white">
                <h2 class="text-center">Queste sono le classi iconiche presenti all'interno di D&D:</h2>
            </div>
        </div>
    </div>
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
                    <x-classes_cards :class="$class" />
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="text-center text-danger">Non sono ancora presenti classi homemade.</h2>
                </div>
            @endforelse



        </div>
    </div>


</x-layout>
