@extends('location.layout')

@section('content')
<form action="{{ route('location.store') }}" method="post" class="form-group">
  @csrf

  <div class="row">
    <div class="col-md-6">
      <label for="code">Code</label>
      <input type="text" name="code" id="code" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label for="location_name">Name</label>
      <input type="text" name="location_name" id="location_name" class="form-control" required>
    </div>
  </div>

  <div class="form-group mt-3">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('location.index') }}" class="btn btn-secondary">Back</a>
  </div>
</form>


@endsection