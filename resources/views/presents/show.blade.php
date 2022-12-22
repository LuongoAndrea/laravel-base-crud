@extends('layouts.app')
@section('content')
    <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="card">
            <img src="{{ Vite::asset('/resources/img/regalino.png') }}" class="card-img-top" alt="{{ $present->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $present->name }} {{ $present->cognome }}</h5>
                <p class="card-text">
                    {{ $present->desc_regalo }}
                    <br>
                    {{ $present->citta }}
                    <br>
                    {{ $present->indirizzo }}
                    <br>
                    {{ $present->n_regalo }}
                    <br>
                    {{ $present->code_spedizione }}
                    <br>
                    @if ($present->camino)
                        presente
                    @else
                        assente
                    @endif

                    <br>
                    @if ($present->status)
                        buono
                    @else
                        cattivo
                    @endif


                    <br>


                </p>
            </div>
        </div>
    </div>
@endsection
