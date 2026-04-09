@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="page-title">Countries List</h2>
        <a href="{{ route('country.create') }}" class="btn btn-add">
            <i class="fas fa-plus me-2"></i>Add Country
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-3">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Country Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $country->name }}</td>
                            <td>
                                <a href="{{ route('country.edit', $country->id) }}" class="btn btn-edit me-1">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <form action="{{ route('country.destroy', $country->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash me-1"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection