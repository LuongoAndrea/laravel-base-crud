<div class='jumbocontainer'>
    <div id='jumbo'>

    </div>
    <div class="bg-text">
        @if (Route::currentRouteName() == 'presents.index')
            <h1 style="font-size:50px">Scrivi la tua lettera a babbo natale</h1>
            <p>Circo Polare artico a circa 8KM da Rovaniemi</p>
        @endif
        @if (Route::currentRouteName() == 'presents.create')
            <h1 style="font-size:50px">CREATE babbo natale</h1>
            <p>Circo Polare artico a circa 8KM da Rovaniemi</p>
        @endif
        @if (Route::currentRouteName() == 'tour')
            <h1 style="font-size:50px"> tour babbo natale</h1>
            <p>Circo Polare artico a circa 8KM da Rovaniemi</p>
        @endif

        @if (Route::currentRouteName() == 'welcome')
            <h1 style="font-size:50px">Benvenuti al sito ufficiale di Babbo Natale</h1>
            <h4 class="text-white fw-bold">Su questo sito hai la possibilit&agrave; di scrivere la tua letterina a babbo
                natale
                inizia subito !!!
            </h4>
        @endif




    </div>
</div>
