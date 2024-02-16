<x-layout>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-12 col-md-4">
                <form action="/forgot-password" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Password dimenticata</h1>
                    <div class="form-floating mb-5">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Indirizzo Email</label>
                        <small class="text-secondary">Inserisci il tuo indirizzo email, riceverai una mail con la tua password.</small>
                    </div>
                    <button class="btn btn-outline-dark w-100 py-2" type="submit">Password dimenticata</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>