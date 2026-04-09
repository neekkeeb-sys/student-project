@extends('layouts.app')

@section('content')
    <h2 class="page-title">Add District</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('district.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">District Name</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Enter district name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <select name="country_id" class="form-select" required>
                        <option value="">-- Select Country --</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-add">
                        <i class="fas fa-save me-2"></i>Save
                    </button>
                    <a href="{{ route('district.index') }}" class="btn btn-secondary" style="border-radius:8px;">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection