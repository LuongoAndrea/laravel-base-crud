@extends('layouts.app')
@section('content')
    <form action="{{ route('presents.update', $present->id) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <label for="name" class="form-label">nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $present->name) }}"
                required>
        </div>
        <div class="col-md-6">
            <label for="cognome" class="form-label">cognome</label>
            <input type="text" class="form-control" id="cognome" name="cognome"
                value="{{ old('cognome', $present->cognome) }}" required>
        </div>
        <div class="col-12">
            <label for="citta" class="form-label">citta</label>
            <input type="text" class="form-control" id="citta" name="citta" placeholder="1234 Main St"
                value="{{ old('citta', $present->citta) }}" required>
        </div>
        <div class="col-12">
            <label for="indirizzo" class="form-label">indirizzo</label>
            <input type="text" class="form-control" id="indirizzo" name="indirizzo"
                value="{{ old('indirizzo', $present->indirizzo) }}" required placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="n_regalo" class="form-label">numero di regalo </label>
            <input type="text" class="form-control" id="n_regalo" name="n_regalo"
                value="{{ old('n_regalo', $present->n_regalo) }}" required>
        </div>
        <div class="col-md-6">
            <label for="code_spedizione" class="form-label">codice spedizione </label>
            <input type="text" class="form-control" id="code_spedizione" name="code_spedizione"
                value="{{ old('code_spedizione', $present->code_spedizione) }}" required>
        </div>

        <div class="col-md-4">
            <label for="camino" class="form-label">camino</label>
            <select id="camino" name="camino" class="form-select" required>
                <option value="1" value="{{ old('camino', $present->camino == '1' ? 'selected' : '') }}">Si</option>
                <option value="0" value="{{ old('camino', $present->camino == '0' ? 'selected' : '') }}">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="status"class="form-label">è cattivo?</label>
            <select id="status" name="status" class="form-select" value="{{ old('title', $present->name) }}" required>
                <option value="1" value="{{ old('status', $present->status == '1' ? 'selected' : '') }}">Si</option>
                <option value="0" value="{{ old('status', $present->status == '0' ? 'selected' : '') }}">No</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="desc_regalo" class="form-label">nome gioco </label>
            <input type="text" class="form-control" id="desc_regalo" name="desc_regalo"
                value="{{ old('desc_regalo', $present->desc_regalo) }}" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

        <span>
            <a href="{{ route('presents.index') }}">Vai indietro</a>
        </span>
    </form>
@endsection
