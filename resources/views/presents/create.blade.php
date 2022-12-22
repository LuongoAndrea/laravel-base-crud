@extends('layouts.app')
@section('content')
    <form action="{{ route('presents.store') }}" method="POST" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label for="name" class="form-label">nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
            <label for="cognome" class="form-label">cognome</label>
            <input type="text" class="form-control" id="cognome" name="cognome">
        </div>
        <div class="col-12">
            <label for="citta" class="form-label">citta</label>
            <input type="text" class="form-control" id="citta" name="citta" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="indirizzo" class="form-label">indirizzo</label>
            <input type="text" class="form-control" id="indirizzo" name="indirizzo"
                placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="n_regalo" class="form-label">numero di regalo </label>
            <input type="text" class="form-control" id="n_regalo" name="n_regalo">
        </div>
        <div class="col-md-6">
            <label for="code_spedizione" class="form-label">codice spedizione </label>
            <input type="text" class="form-control" id="code_spedizione" name="code_spedizione">
        </div>

        <div class="col-md-4">
            <label for="camino" class="form-label">camino</label>
            <select id="camino" name="camino" class="form-select">
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="status"class="form-label">è cattivo?</label>
            <select id="status" name="status" class="form-select">
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="desc_regalo" class="form-label">nome gioco </label>
            <input type="text" class="form-control" id="desc_regalo" name="desc_regalo">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

        <span>
            <a href="{{ route('presents.index') }}">Vai indietro</a>
        </span>
    </form>
@endsection
