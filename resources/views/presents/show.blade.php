@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex bg-white">
            <div class="col-6">
                <img src="{{ Vite::asset('/resources/img/regalino.png') }}" class="card-img-top" alt="{{ $present->name }}">
            </div>
            <div class="col-6">
                <ul>
                    <li>{{ $present->name }} {{ $present->cognome }}</li>
                    <li>{{ $present->desc_regalo }}</li>
                    <li>{{ $present->citta }}</li>
                    <li>{{ $present->indirizzo }}</li>
                    <li>{{ $present->n_regalo }}</li>
                    <li>{{ $present->code_spedizione }}</li>
                    <li>
                        @if ($present->camino)
                            presente
                        @else
                            assente
                        @endif
                    </li>
                    <li>
                        @if ($present->status)
                            buono
                        @else
                            cattivo
                        @endif
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
