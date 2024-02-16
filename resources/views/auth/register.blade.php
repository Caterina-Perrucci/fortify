<x-layout>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-12 col-md-4">
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Registrati</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
                        <label for="floatingInput">Nome Utente</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="file" class="form-control" id="floatingInput" placeholder="Image" name="image">
                        <label for="floatingInput">Immagine Profilo</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Number" name="number">
                        <label for="floatingInput">Numero di telefono</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Indirizzo Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                        <button class="buttonIcon" type="button" id="passwordButton">
                            <span id="passwordIcon" class="material-symbols-outlined">visibility_off</span>
                        </button>
                    </div>
                    <div class="form-floating mb-5">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Conferma Password" name="password_confirmation">
                        <label for="floatingPassword">Conferma Password</label>
                    </div>
                    <button class="btn btn-outline-dark w-100 py-2" type="submit">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>