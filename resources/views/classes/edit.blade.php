<x-layout>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            
            
            <div class="col-12 col-md-6 mt-5 bg-dark myclass">
                @if ($errors->any())
                    <div class="alert alert-danger text-center mt-3 ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h3 class="mt-3">Apporta le modifiche alle tua creazione:</h3>
                
                <livewire:edit-form classId="{{$class->id}}"/>

            </div>
        </div>
    </div>


</x-layout>