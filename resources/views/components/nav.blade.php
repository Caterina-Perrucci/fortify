<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'homepage' ? 'active' : ''}}" aria-current="page" href="{{route('homepage')}}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Disabled</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu bg-dark border">
                        <li><a class="dropdown-item text-light {{Route::currentRouteName() == 'register' ? 'active' : ''}}" href="{{route('register')}}">Registrati</a></li>
                        <li><a class="dropdown-item text-light {{Route::currentRouteName() == 'login' ? 'active' : ''}}" href="{{route('login')}}">Accedi</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'profile' ? 'active' : ''}}" href="{{route('profile')}}">{{ Str::ucfirst(Auth::user()->name) }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    <form action="{{route('logout')}}" method="POST" id="form-logout">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>