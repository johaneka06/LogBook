@extends('template/master')
@section('title', 'Add New Log Entry')
@section('contents')
<div class="container">
  <div class="my-4 text-center">
    <h2>Add New Log Entry</h2>
  </div>

  <div class="d-flex justify-content-center my-4">
    <div class="card col-5">
      <div class="card-header">
        Add new Log
      </div>
      <div class="card-body">
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        @endif
        <form action="{{ url('/log/add/store') }}" method="post" class="form-group">
          @csrf
          <div class="row mb-3">
            <div class="ms-auto col-3">
              <label for="date" class="align-middle">Log Date:</label>
            </div>
            <div class="me-auto col-7">
              <input type="date" name="date" id="date" placeholder="Place log title" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <div class="ms-auto col-3">
              <label for="title" class="align-middle">Title:</label>
            </div>
            <div class="me-auto col-7">
              <input type="text" name="title" id="title" placeholder="Place log title" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="ms-auto col-3">
              <label for="detail" class="align-middle">Detail:</label>
            </div>
            <div class="me-auto col-7">
              <textarea type="password" name="detail" id="detail" placeholder="Place your detail activity" class="form-control"></textarea>
            </div>
          </div>
          <div class="border-top mt-3">
            <div class="d-flex justify-content-center">
              <input type="submit" value="Save" class="btn btn-primary my-3 ">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection