@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Properties</h1>
            <a href="{{ url('properties/create') }}" class="btn btn-primary" style="background-color: #31bbb1; border-color: #31bbb1;">+ Add New Property</a>
        </div>

        <style>
            .btn-primary {
                background-color: #31bbb1;
                border-color: #31bbb1;
            }
            .card-footer .btn-primary {
                width: 100%;
                border-radius: 0;
            }
            .card-footer {
                padding: 0;
            }
            .card-img-top {
                height: 200px;
                object-fit: cover;
                width: 100%;
            }
            .price-tag {
                background-color: #6e9def;
                color: white;
                border-radius: 15px;
                padding: 5px 10px;
                display: inline-block;
                margin-bottom: 5px;
            }
            .location-icon {
                height: 1.5em;
                width: auto;
                vertical-align: middle;
            }
            .property-text {
                color: #9e9e9e;
            }
            .property-title {
                font-weight: bold;
            }
        </style>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($properties as $property)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/properties/'. $property->photo) }}" alt="Photo of property" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title property-title">{{ $property->property_title }}</h5>
                            <p class="card-text property-text">
                                <img src="{{ asset('storage/icons folder/location.svg') }}" alt="Location" class="location-icon">
                                {{ $property->location }}
                            </p>
                            <p class="card-text property-text">
                                <span class="price-tag">${{ number_format($property->price, 2) }}</span>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('/properties/' . $property->id) }}" class="btn btn-primary">View Property</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
