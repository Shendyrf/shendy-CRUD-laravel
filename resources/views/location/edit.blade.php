@extends('location.layout')

@section('content')
<form action="{{ route('location.update', $location->id) }}" method="post" class="form-group">
  @csrf
  @method('PUT')

  <div class="row">
    <div class="col-md-6">
      <label for="code">Code</label>
      <input type="text" name="code" id="code" class="form-control" required value="{{ $location->code }}">
    </div>

    <div class="col-md-6">
      <label for="location_name">Name</label>
      <input type="text" name="location_name" id="location_name" class="form-control" required value="{{ $location->location_name }}">
    </div>
  </div>

  <div class="form-group mt-3">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('location.index') }}" class="btn btn-secondary">Back</a>
  </div>
</form>
@endsection