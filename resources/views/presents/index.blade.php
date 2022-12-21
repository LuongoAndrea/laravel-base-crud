@extends('layouts.app')
@section('content')
    <section class="container ">
        <h1>regali</h1>
        <div class="row">
            @foreach ($presents as $present)
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('/resources/img/regalino.png') }}" class="card-img-top"
                            alt="{{ $present->name }}">
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
                                {{ $present->camino }}
                                <br>
                                {{ $present->status }}
                                <br>


                            </p>
                            <a href="{{ route('presents.show', $present->id) }}" class="btn btn-primary">Scopri!</a>
                            <a href="{{ route('presents.edit', $present->id) }}" class="btn btn-primary ms-3">Modifica</a>
                            <form action="{{ route('presents.destroy', $present->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ms-3">Cancella</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </section>
@endsection
