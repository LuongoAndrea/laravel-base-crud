<?php
$links = config('navfoolink.navbar');

?>
<div class="container  d-flex justify-content-center align-items-center">
    <div class="logo-box">
        <a href="{{ route('welcome') }}">
            <img src="{{ Vite::asset('/resources/img/santa-claus-dabbing-dance-vector.png') }}" alt="logo-site">
        </a>
    </div>
    <nav class="navbar-nav container navbar-light ">
        <ul class="d-flex list-unstyled justify-content-end  text-uppercase fw-bold m-0">
            @foreach ($links as $link)
                <li class="nav-item mx-3">
                    <a class="{{ Route::currentRouteName() == $link['url'] || (Str::contains(Route::currentRouteName(), 'presents') && $link['url'] == 'presents.index') ? 'active' : '' }}"
                        href="{{ route($link['url']) }}">{{ $link['text'] }}</a>
                    {{-- <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}"
                        href="{{ route('presents.index') }}">
                        regali
                    </a> --}}
                </li>
            @endforeach
            {{-- <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}"
                    href="{{ route('presents.index') }}">
                    regali
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}"
                    href="{{ route('presents.create') }}">
                    Crea un regali
                </a>
            </li>
            {{-- <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}"
                    href="{{ route('presents.edit') }}">
                    revisione un regalo
                </a>
            </li> --}}
            {{-- }} <li class="nav-item mx-3">
                <a class="{{ Route::currentRouteName() == 'edit' ? 'active' : '' }}" href="{{ route('tour') }}">
                    Tuor guidato
                </a>
            </li> --}}


        </ul>
    </nav>
</div>
