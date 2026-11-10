@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ $travel['image'] }}" class="img-fluid rounded shadow-sm mb-4" alt="..."
                    style="width: 100%; max-height: 400px; object-fit: cover;">
                <h1>{{ $travel['destination'] }}</h1>
                <h4 class="text-muted">{{ $travel['duration'] }}</h4>
                <p class="lead mt-3">{{ $travel['description'] }}</p>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm p-4 border-0 bg-white">
                    <h3 class="text-success fw-bold mb-3">€{{ $travel['price'] }}</h3>
                    <p class="text-muted">Incluso nel prezzo: Volo + Hotel 4 stelle + Assistenza H24.</p>
                    <a href="{{ route('travels.booking', $travel['id']) }}" class="btn btn-primary btn-lg w-100">Procedi
                        alla Prenotazione</a>
                </div>
            </div>
        </div>
    </div>
@endsection
