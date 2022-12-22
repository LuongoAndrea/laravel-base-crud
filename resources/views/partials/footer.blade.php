<?php
$links = config('navfoolink.footer');

?>
<footer>
    <div class="snow">
        <div class="text-white">
            <ul>
                @foreach ($links as $link)
                    <li class="nav-item mx-3">
                        <h5>{{ $link['title'] }}</h5>
                        @foreach ($link['links'] as $list)
                            <a class="{{ Route::currentRouteName() == $list['url'] || (Str::contains(Route::currentRouteName(), 'presents') && $list['url'] == 'presents.index') ? 'active' : '' }}"
                                href="#nogo">{{ $list['text'] }}</a>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
