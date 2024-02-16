<x-layout>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-12 col-md-4">
                <form action="/reset-password" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Resetta password</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Indirizzo Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Conferma Password" name="password_confirmation">
                        <label for="floatingPassword">Conferma Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="hidden" class="form-control" id="floatingPassword" name="token" value="{{ request()->route('token') }}">
                    </div>
                    <button class="btn btn-outline-dark w-100 py-2" type="submit">Resetta password</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>