@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Property') }}</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('/properties') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="property_title" class="form-label">Property Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="property_title" name="property_title" value="{{ old('property_title') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="rooms" class="form-label">No. of Rooms<span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="rooms" name="rooms" value="{{ old('rooms') }}" required>
                                </div>
                                <div class="col">
                                    <label for="bathrooms" class="form-label">No. of Bathrooms<span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="property_type" class="form-label">Property Type<span style="color: red">*</span></label>
                                <select class="form-select" id="property_type" name="property_type" required>
                                    <option value="House">House</option>
                                    <option value="Apartment">Apartment</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required placeholder="10 Waterloo Rd">
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="photo" name="photo" required>
                                <small style="color: #616467">Only image files (e.g. jpg, png) are allowed, and files must be less than 2MB.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Property</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
