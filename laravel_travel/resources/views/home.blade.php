@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Trova la tua prossima avventura</h1>
            <p class="col-md-8 fs-4 mx-auto text-muted">Esplora destinazioni incredibili e vivi esperienze uniche in tutto il
                mondo.</p>
            <a href="{{ route('travels.index') }}" class="btn btn-primary btn-lg px-4">Scopri tutti i viaggi</a>
        </div>
    </div>

    <div class="container">
        <h2 class="mb-4">In Evidenza</h2>
        <div class="row">
            @foreach ($featuredTravels as $travel)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ $travel['image'] }}" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $travel['destination'] }}</h5>
                            <p class="text-muted">{{ $travel['duration'] }}</p>
                            <p class="text-success fw-bold fs-5">€{{ $travel['price'] }}</p>
                            <a href="{{ route('travels.show', $travel['id']) }}"
                                class="btn btn-outline-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
