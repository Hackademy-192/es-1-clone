@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 p-4">
                    <h2 class="mb-4 text-center">Prenota il tuo viaggio</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('travels.booking.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="first_name" class="form-label">Nome (first_name)</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="{{ old('first_name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Cognome (last_name)</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ old('last_name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email (email)</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="travel_id" class="form-label">Id del viaggio (travel_id)</label>
                            <select class="form-select" id="travel_id" name="travel_id" required>
                                <option value="">Seleziona una destinazione</option>
                                @foreach ($travels as $travel)
                                    <option value="{{ $travel['id'] }}"
                                        {{ isset($selectedId) && $selectedId == $travel['id'] ? 'selected' : '' }}>
                                        {{ $travel['id'] }} - {{ $travel['destination'] }} (€{{ $travel['price'] }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-2">Invia Prenotazione</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
