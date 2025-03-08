
@extends('employees.layout')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Add New Employee</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ old('position') }}" required>
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" step="0.01" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ old('salary') }}" required>
                    @error('salary')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
