@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <div class="container mt-5">
        <div class="card" style="max-width: 900px; margin: auto;">
            <div class="row g-0">
                <div class="col-md-6 d-flex">
                    @if ($property->photo)
                        <img src="{{ asset('storage/properties/' . $property->photo) }}" alt="Photo of {{ $property->property_title }}" class="img-fluid rounded-start w-100 align-self-stretch">
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title">{{ $property->property_title }} - {{ $property->property_type }}</h2>
                        <p class="card-text">{{ $property->description }}</p>
                        <div class="mb-2 d-flex align-items-center">
                            <span class="badge bg-primary me-2">${{ number_format($property->price, 2) }}</span>
                            <span class="badge" style="background-color: #e0c91f;">{{ $property->property_type }}</span>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <span class="material-symbols-outlined me-2">bed</span>
                            <p class="card-text me-4 mb-0">{{ $property->rooms }} Bedrooms</p>
                            <i class="bi bi-water me-2"></i>
                            <p class="card-text mb-0">{{ $property->bathrooms }} Bathrooms</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            <p class="card-text">{{ $property->location }}</p>
                        </div>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success">Email Realtor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
