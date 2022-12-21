<div class="container  d-flex justify-content-center align-items-center">
    <div class="logo-box">
        <a href="{{ route('presents.index') }}">
            <img src="{{ Vite::asset('/resources/img/santa-claus-dabbing-dance-vector.png') }}" alt="logo-site">
        </a>
    </div>
    <nav class="navbar-nav container navbar-light ">
        <ul class="d-flex list-unstyled justify-content-end  text-uppercase fw-bold m-0">
            <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}" href="{{ route('welcome') }}">
                    Regali Piu belli
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}" href="{{ route('welcome') }}">
                    Lista Dei Cattivi
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}" href="{{ route('welcome') }}">
                    Scrivi A babbo Natale
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}" href="{{ route('welcome') }}">
                    Tuor guidato con gli elfi
                </a>
            </li>


        </ul>
    </nav>
</div>
