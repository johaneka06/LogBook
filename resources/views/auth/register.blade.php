@extends('template/master')
@section('title', e(env('APP_NAME').' - Register'))
@section('contents')
<div class="container">
  <div class="my-5">
    <div class="text-center mb-5">
      <h2>Register</h2>
    </div>
    <div class="d-flex justify-content-center">
      <div class="card col-5">
        <div class="card-header">
          Create your account
        </div>
        <div class="card-body">
          @if ($errors->any())
              @foreach ($errors->all() as $e)
                  <div class="alert alert-danger">{{$e}}</div>
              @endforeach
          @endif
          <form action="{{ url('/register/create') }}" method="post" class="form-group">
            @csrf
            <div class="row mb-3">
              <div class="ms-auto col-5">
                <label for="name" class="align-middle">Name:</label>
              </div>
              <div class="me-auto col-7">
                <input type="text" name="name" id="name" placeholder="John Doe" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <div class="ms-auto col-5">
                <label for="email" class="align-middle">Email:</label>
              </div>
              <div class="me-auto col-7">
                <input type="email" name="email" id="email" placeholder="johndoe@email.com" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <div class="ms-auto col-5">
                <label for="password" class="align-middle">Password:</label>
              </div>
              <div class="me-auto col-7">
                <input type="password" name="password" id="password" placeholder="Place password" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="ms-auto col-5">
                <label for="confirm" class="align-middle">Confirmation Password:</label>
              </div>
              <div class="me-auto col-7">
                <input type="password" name="confirm" id="confirm" placeholder="Place confirmation password" class="form-control">
              </div>
            </div>
            <div class="border-top mt-3">
              <div class="d-flex justify-content-center">
                <input type="submit" value="Register" class="btn btn-primary my-3 ">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection