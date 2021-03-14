@extends('template/master')
@section('title', 'Detail: '.e($log->title))
@section('contents')
<div class="container">
  <div class="my-4">
    <div class="text-center mb-4">
      <h2>{{$log->title}}</h2>
    </div>
    <div class="d-flex justify-content-center">
      <div class="card col-6">
        <div class="card-header">Update: {{ $log->title }}</div>
        <div class="card-body">
          <form action="{{ url('/log/'.$log->id.'/update') }}" method="post" onload="onload()">
            @csrf
            <div class="row mb-3">
              <div class="ms-auto col-3">
                <label for="date" class="align-middle">Log Date:</label>
              </div>
              <div class="me-auto col-7">
                <input type="date" name="date" id="date" placeholder="Place log title" class="form-control" value="{{ $log->log_date }}" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="ms-auto col-3">
                <label for="title" class="align-middle">Title:</label>
              </div>
              <div class="me-auto col-7">
                <input type="text" name="title" id="title" placeholder="Place log title" class="form-control" value="{{ $log->title }}" disabled>
              </div>
            </div>
            <div class="row">
              <div class="ms-auto col-3">
                <label for="detail" class="align-middle">Detail:</label>
              </div>
              <div class="me-auto col-7">
                <textarea type="password" name="detail" id="detail" placeholder="Place your detail activity" class="form-control" disabled>{{ $log->description }}</textarea>
              </div>
            </div>
            <div class="border-top mt-3">
              <div class="d-flex justify-content-center">
                <input type="button" value="Update" id="update" class="btn btn-primary my-3">
                <input type="submit" value="Save Changes" id="save" class="btn btn-primary my-3" hidden>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection