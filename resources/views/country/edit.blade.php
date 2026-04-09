@extends('layouts.app')

@section('content')
    <h2 class="page-title">Edit Country</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('country.update', $country->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Country Name</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Enter country name" value="{{ old('name', $country->name) }}" required>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-add">
                        <i class="fas fa-save me-2"></i>Update
                    </button>
                    <a href="{{ route('country.index') }}" class="btn btn-secondary" style="border-radius:8px;">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection