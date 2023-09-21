<nav class="navbar navbar-expand-lg bg-primary-subtle py-3">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold fs-2" href="{{ route('homepage') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('aboutUs') }}">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles') }}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contatti</a>
                </li>
                @if ($user)
                    <li class="nav-link">{{ $user['name'] }}</li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accedi</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
