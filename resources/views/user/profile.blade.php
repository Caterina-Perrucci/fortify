<x-layout>
    <h2 class="text-center display-4">Dashboard di {{Str::ucfirst(Auth::user()->name)}}</h2>
    <div class="container m-5 w-25">
        @if(session('status') === 'profile-information-updated')
            <div class="alert alert-success">
                Hai aggiornato correttamente il tuo profilo
            </div>
        @elseif (session('status') === 'password-updated')
            <div class="alert alert-success">
                Hai aggiornato correttamente la tua password
            </div>
        @endif
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="circle d-flex justify-content-center align-items-center m-2">
                    <img class="img-fluid rounded-circle img-profile" src="{{Storage::url(Auth::user()->image ?? '/default-image.jpg')}}" alt="">
                </div>
                <button type="button" class="btn p-2 position-relative" id="myButton" data-bs-placement="top" title="Modifica Immagine">
                    <i class="fa-solid fa-pencil fs-5"></i>
                </button>
            </div>
            <div class="col-12 col-md-4">
                <div class="card p-3">
                    <h6>Nome utente: {{Str::ucfirst(Auth::user()->name)}}</h6>
                    <p>Email: {{Auth::user()->email}}</p>
                    <p>Numero: +{{Auth::user()->number}}</p>
                    <p>Username: {{Auth::user()->username ?? '-'}}</p>
                    <p>Verificato: <i class="{{Auth::user()->email_verified_at ? 'fa-solid fa-circle-check text-success' : 'fa-solid fa-circle-xmark text-danger'}}"></i></p>
                    <p>Account creato il: {{Auth::user()->created_at->translatedFormat('l, d/m/Y H:m')}}</p>
                    <p>Account aggiornato il: {{Auth::user()->updated_at->translatedFormat('l, d/m/Y H:m')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 border p-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h4 class="text-center">Aggiorna informazioni profilo</h4>
                <form action="/user/profile-information" method="POST" name="frm_info">
                @csrf
                @method('PUT')
                <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="{{Auth::user()->name}}">
                        @error('name')
                            <span class="fst-italic text-danger my-2">{{$message}}</span>
                        @enderror
                        <label for="floatingInput">Nome Utente</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="username" value="{{Auth::user()->username}}">
                        @error('username')
                            <span class="fst-italic text-danger my-2">{{$message}}</span>
                        @enderror
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{Auth::user()->email}}">
                        @error('email')
                            <span class="fst-italic text-danger my-2">{{$message}}</span>
                        @enderror
                        <label for="floatingInput">Indirizzo Email</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-dark w-50 py-2" type="submit" name="form1_submit">Aggiorna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-5 border p-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h4 class="text-center">Aggiorna password</h4>
                <form action="/user/password" method="POST" >
                @csrf
                @method('PUT')
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Password Corrente" name="current_password">
                        @error('current_password')
                            <span class="fst-italic text-danger my-2">{{$message}}</span>
                        @enderror
                        <label for="floatingInput">Password corrente</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
                        @error('password')
                            <span class="fst-italic text-danger my-2">{{$message}}</span>
                        @enderror
                        <label for="floatingInput">Nuova Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Conferma Password" name="password_confirmation">
                        <label for="floatingInput">Conferma Nuova Password</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-dark w-50 py-2" type="submit">Aggiorna password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Titolo Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
            </div>
            <div class="modal-body">
                <form action="/user/profile-information" method="POST" enctype="multipart/form-data" name="frm_img">
                    @csrf
                    @method('PUT')
                    <input type="file" name="image">
                    @error('image')
                        <span class="fst-italic text-danger my-2">{{$message}}</span>
                    @enderror
                    <button type="submit" class="btn btn-outline-dark" name="form2_submit">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>