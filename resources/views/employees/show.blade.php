
@extends('employees.layout')

@section('content')
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Employee Details</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>ID:</strong> {{ $employee->id }}
            </div>
            <div class="mb-3">
                <strong>Name:</strong> {{ $employee->name }}
            </div>
            <div class="mb-3">
                <strong>Position:</strong> {{ $employee->position }}
            </div>
            <div class="mb-3">
                <strong>Salary:</strong> {{ number_format($employee->salary, 2) }}
            </div>
            <div class="mb-3">
                <strong>Created At:</strong> {{ $employee->created_at->format('d-m-Y H:i:s') }}
            </div>
            <div class="mb-3">
                <strong>Updated At:</strong> {{ $employee->updated_at->format('d-m-Y H:i:s') }}
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endsection
