@extends('template/master')
@section('title', e(env('APP_NAME').' - Login'))
@section('contents')
<div class="container">
  <div class="my-5">
    <div class="text-center mb-5">
      <h2>Login</h2>
    </div>
    <div class="d-flex justify-content-center">
      <div class="card col-5">
        <div class="card-header">
          Login your account
        </div>
        <div class="card-body">
          @if($errors->any())
          @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{ $error }}</div>
          @endforeach
          @endif
          <form action="{{ url('/login/auth') }}" method="post" class="form-group">
          @csrf
            <div class="row mb-3">
              <div class="ms-auto col-3">
                <label for="email" class="align-middle">Email:</label>
              </div>
              <div class="me-auto col-7">
                <input type="email" name="email" id="email" placeholder="Place email" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="ms-auto col-3">
                <label for="password" class="align-middle">Password:</label>
              </div>
              <div class="me-auto col-7">
                <input type="password" name="password" id="password" placeholder="Place password" class="form-control">
              </div>
            </div>
            <div class="border-top mt-3">
              <div class="d-flex justify-content-center">
                <input type="submit" value="Login" class="btn btn-primary my-3 ">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection