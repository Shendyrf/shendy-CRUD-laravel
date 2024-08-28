@extends('employee.layout')

@section('content')
<form action="{{ route('employee.store') }}" method="post" class="form-group">
    @csrf

    <div class="row">
        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="location_code">Location</label>
            <input type="text" name="location_code" id="location_code" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control" required>
        </div>
    </div>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('employee.index') }}" class="btn btn-secondary">Back</a>
    </div>
</form>


@endsection