<x-layout>
    <div class="text-center mt-5">
        <h2>Grazie per esserti iscritto</h2>
        <p>Prima di cominciare, verifica il tuo indirizzo email cliccando sul link che ti abbiamo inviato per mail.</p>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success text-center">Ti abbiamo mandato una nuova email di verifica</div>
                @endif
            </div>
        </div>
    </div>
    <form method="POST" action="/email/verification-notification" class="text-center">
    @csrf
    <p>Se non hai ricevuto la mail di verifica, clicca su questo link per riceverla.</p>
        <button type="submit" class="btn btn-outline-dark">Invia una nuova email di verifica</button>
    </form>
    <form action="{{route('logout')}}" method="POST" class="text-center my-5">
    @csrf
    <p>Stai riscontrando problemi?</p>
    <button class="btn btn-outline-dark">Logout</button>
    </form>
</x-layout>