@extends('employee.layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('employee.create') }}" class="btn btn-success">Add New Employee</a>
        <a href="{{ route('location.index') }}" class="btn btn-secondary">View List Location</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">Employee List</h4>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('employee.index') }}" class="mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="Enter age" value="{{ request('age') }}">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary mr-2">Search</button>
                    </div>
                </div>
            </form>

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Birth Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employee as $karyawan)
                    <tr>
                        <td>{{ $karyawan->id }}</td>
                        <td>{{ $karyawan->name }}</td>
                        <td>{{ $karyawan->location->location_name ?? 'N/A' }}</td>
                        <td>{{ \Carbon\Carbon::parse($karyawan->birth_date)->format('d M, Y') }}</td>
                        <td>
                            <a href="{{ route('employee.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form onclick="return confirm('Are You Sure?')" action="{{ route('employee.destroy', $karyawan->id) }}" method="post" style="display:inline">
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