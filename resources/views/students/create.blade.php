@extends('layouts.app')

@section('content')
<h2 class="page-title">Add Student</h2>

<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter students name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter address" value="{{ old('address') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile No</label>
                <input type="text" name="mobile_no" class="form-control" placeholder="Enter mobile number" value="{{ old('mobile_no') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="">-- Select Gender --</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Father Name</label>
                <input type="text" name="father_name" class="form-control" placeholder="Enter father name" value="{{ old('father_name') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Mother Name</label>
                <input type="text" name="mother_name" class="form-control" placeholder="Enter mother name" value="{{ old('mother_name') }}">
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
            <div class="mb-3">
                <label class="form-label">District</label>
                <select name="district_id" class="form-select" required>
                    <option value="">-- Select District --</option>
                    @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ old('district_id') == $district->id ? 'selected' : '' }}>
                        {{ $district->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-add">
                    <i class="fas fa-save me-2"></i>Save
                </button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary" style="border-radius:8px;">
                    <i class="fas fa-arrow-left me-2"></i>Back
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
