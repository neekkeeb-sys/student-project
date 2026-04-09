@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="page-title">Students List</h2>
        <a href="{{ route('students.create') }}" class="btn btn-add">
            <i class="fas fa-plus me-2"></i>Add Student
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
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Mobile No</th>
                        <th>Gender</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Country</th>
                        <th>District</th>
                        <th>Actions</th>
                        {{-- <th>Country</th>
                        <th>District</th>
                        <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $students)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $students->name }}</td>
                            <td>{{ $student->email ?? '-' }}</td>
                            <td>{{ $student->address ?? '-' }}</td>
                            <td>{{ $student->mobile_no ?? '-' }}</td>
                            <td>{{ $student->gender ?? '-' }}</td>
                            <td>{{ $student->father_name ?? '-' }}</td>
                            <td>{{ $student->mother_name ?? '-' }}</td>
                            <td>{{ $students->country->name ?? '-' }}</td>
                            <td>{{ $students->district->name ?? '-' }}</td>
                            <td>
                                <a href="{{ route('students.edit', $students->id) }}" class="btn btn-edit me-1">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <form action="{{ route('students.destroy', $students->id) }}" method="POST" class="d-inline">
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