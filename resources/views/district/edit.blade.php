@extends('layouts.app')

@section('content')
    <h2 class="page-title">Edit District</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('district.update', $district->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">District Name</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Enter district name" value="{{ old('name', $district->name) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <select name="country_id" class="form-select" required>
                        <option value="">-- Select Country --</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ old('country_id', $district->country_id) == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-add">
                        <i class="fas fa-save me-2"></i>Update
                    </button>
                    <a href="{{ route('district.index') }}" class="btn btn-secondary" style="border-radius:8px;">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection