
@extends('employees.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Employee List</h2>
        <a href="{{ route('employees.create') }}" class="btn btn-success">Add New Employee</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th width="280px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ number_format($employee->salary, 2) }}</td>
                <td>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('employees.show', $employee->id) }}">View</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
