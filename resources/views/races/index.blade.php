<x-layout>

    <!-- header -->
    <header class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center text-white">
            <div class="col-12">
                <h2 class=" text-center">Ecco i tratti della maggior parte delle
                    razze:</h2>

                <ul>
                    <li>
                        <h4>Incremento di Punteggio di Abilità:</h4>
                        Ogni razza incrementa uno o più dei punteggi di abilità
                        del personaggio.
                    </li>
                    <li>
                        <h4>Età:</h4>
                        Questa voce indica l’età a cui un membro della razza è
                        considerato adulto, oltre che alla durata media della vita
                        di quella razza. L’informazione è utile a determinare
                        l’età del tuo personaggio all’inizio del gioco. Puoi
                        comunque scegliere qualsiasi età per il tuo
                        personaggio, magari per spiegare alcuni dei suoi
                        punteggi di abilità. Ad esempio, se interpreti un
                        personaggio molto giovane o molto vecchio, una
                        giovane età potrebbe spiegare un punteggio
                        particolarmente basso di Forza o Costituzione, mentre
                        un’età avanzata potrebbe essere testimoniata da
                        elevata Intelligenza e Saggezza.
                    </li>
                    <li>
                        <h4>Allineamento:</h4>
                        <p>Quasi tutte le razze hanno una preferenza verso
                            determinati allineamenti, come descritto in questa voce.
                            Non sono vincolanti per i personaggi dei giocatori, ma
                            capire perché il tuo nano sia caotico, ad esempio, in
                            opposizione alla legale società nanica potrebbe aiutarti
                            a definire meglio il tuo personaggio.</p>
                    </li>
                    <li>
                        <h4>Taglia:</h4>
                        <p>I personaggi sono quasi tutti Medi, una categoria di
                            taglia che comprende le creature che vanno dai 120 ai
                            240 cm di altezza. Alcune razze sono Piccole (tra i 60 e
                            i 120 cm di altezza), e ciò vuol dire che per loro alcune
                            regole funzioneranno diversamente. La più importante
                            di queste regole è che i personaggi Piccoli hanno
                            problemi nell’impugnare armi a due mani.</p>
                    </li>
                    <li>
                        <h4>Velocità:</h4>
                        <p>La tua velocità determina quanto in fretta puoi muoverti
                            quando viaggi e in combattimento.</p>
                    </li>
                    <li>
                        <h4>Lingue:</h4>
                        <p>In virtù della sua razza, il tuo personaggio può parlare,
                            leggere e scrivere in certe lingue. Il capitolo 4 descrive
                            le lingue più diffuse nel multiverso.</p>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-white">
                <h2 class="text-center">Queste sono le razze iconiche presenti all'interno di D&D:</h2>
            </div>

            <x-races_cards_iconic/>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-white">
                <h2 class="text-center">Ecco alcune razze "Homemade" ideate da altri avventurieri:</h2>
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
            @forelse ($races as $race)
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <x-races_cards_homemade :race="$race" />
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="text-center text-danger">Non sono ancora presenti razze homemade.</h2>
                </div>
            @endforelse



        </div>
    </div>


</x-layout>
