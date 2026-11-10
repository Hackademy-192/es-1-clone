@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tutti i Nostri Viaggi</h1>
        <div class="row">
            @foreach ($travels as $travel)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ $travel['image'] }}" class="card-img-top" alt="..."
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $travel['destination'] }}</h5>
                            <p class="text-muted mb-1">{{ $travel['duration'] }}</p>
                            <p class="text-success fw-bold fs-5 mb-3">€{{ $travel['price'] }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('travels.show', $travel['id']) }}"
                                    class="btn btn-outline-primary w-100 mb-2">Scopri di più</a>
                                <a href="{{ route('travels.booking', $travel['id']) }}"
                                    class="btn btn-primary w-100">Prenota</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
