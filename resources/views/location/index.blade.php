@extends('location.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('location.create') }}" class="btn btn-success">Add New Location</a>
        <a href="{{ route('employee.index') }}" class="btn btn-secondary">View List Employees</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">Locations</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($location as $locations)
                    <tr>
                        <td>{{ $locations->id }}</td>
                        <td>{{ $locations->code }}</td>
                        <td>{{ $locations->location_name }}</td>
                        <td>
                            <a href="{{ route('location.edit', $locations->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form onclick="return confirm('Are you sure?')" action="{{ route('location.destroy', $locations->id) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection