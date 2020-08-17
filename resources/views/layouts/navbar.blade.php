<nav class="navbar change navbar-expand-lg">
    <div class="container">
        <a class="logo" href="/">
            <img src="{{ asset('/img/logo-light.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if(\Illuminate\Support\Facades\Route::current()->uri() === '/')
                    @include('layouts.navbar_items_with_scroll')
                @else
                    @include('layouts.navbar_items')
                @endif

                <li class="nav-item">
                    <a class="nav-link butn butn-bg" href="/contacts"><span>Контакты</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
