<x-layout>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-12 col-md-4">
                <form action="{{route('login')}}" method="POST">
                @csrf
                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="{{old('username')}}">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}">
                        <label for="floatingInput">Indirizzo Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                        <button class="buttonIcon" type="button" id="passwordButton">
                            <span id="passwordIcon" class="material-symbols-outlined">visibility_off</span>
                        </button>
                    </div>
                    <div class="form-check text-start mb-4">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" name="remember">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ricordami
                        </label>
                    </div>
                    <button class="btn btn-outline-dark w-100 py-2" type="submit">Login</button>
                </form>
                <p>Password dimenticata? <a href="/forgot-password">Vai qui</a></p>
            </div>
        </div>
    </div>
</x-layout>