@extends('layouts.app')
@section('content')
    <section class="container ">
        <h1>regali</h1>
        <div class="row">
            @foreach ($presents as $present)
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card-body">
                        <img class="my-gif" src="{{ Vite::asset('/resources/img/icons8-tempesta-di-neve.gif') }}"
                            alt="">
                        <div class="text-center">
                            <img src="{{ Vite::asset('/resources/img/regalino.png') }}"
                                class="img-1  d-flex justify-content-center align-items-center" alt="{{ $present->name }}">
                        </div>

                        <hr>
                        <h1 class="mb-4 card-title">{{ $present->name }} {{ $present->cognome }}</h1>
                        <hr>
                        <h4 class="mb-2">citta : {{ $present->citta }} </h4>
                        <h4 class="mb-2">indirizzo : {{ $present->indirizzo }} </h4>
                        <h4 class="mb-2">numeri regali : {{ $present->n_regalo }} </h4>
                        <h4 class="mb-2">codice spedizione : {{ $present->code_spedizione }} </h4>
                        <h4 class="mb-2">camino : {{ $present->camino }} </h4>
                        <h4 class="mb-2">status : {{ $present->status }} </h4>
                        <h4>regalo : {{ $present->desc_regalo }}</h4>

                        <div id="" class=" my-2 align-items-center position-relative">

                            <div class="d-flex justify-content-around">
                                <a href="{{ route('presents.show', $present->id) }}" class="">
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="fa-solid fa-circle-info"></i></button>
                                </a>
                                <a href="{{ route('presents.edit', $present->id) }}" class="">
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="fa-solid fa-wand-magic-sparkles"></i></button>
                                </a>
                                <form action="{{ route('presents.destroy', $present->id) }}" class="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="ms-1 fa-solid fa-trash"></i></button>
                                </form>

                            </div>

                        </div>
                    </div>








                    {{--
                            <a href="{{ route('presents.show', $present->id) }}" class="btn btn-primary">Scopri!</a>
                            <a href="{{ route('presents.edit', $present->id) }}" class="btn btn-primary ms-3">Modifica</a>
                            <form action="{{ route('presents.destroy', $present->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ms-3">Cancella</button>
                            </form>

                        </div>
                    </div> --}}
                </div>
            @endforeach


        </div>

    </section>
@endsection
