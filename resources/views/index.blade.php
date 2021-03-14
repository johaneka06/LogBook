@extends('template/master')
@section('title', e(env('APP_NAME')).' - Home')
@section('contents')
<div class="container">
  <div class="text-center my-5">
    <h2>Your Log Activity</h2>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Title</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @each('template/log-entry', $logs, 'log', 'template/no-log')
    </tbody>
  </table>
  <div class="d-flex justify-content-center my-5">
  <a href="{{ url('/log/add') }}" class="btn btn-primary">Add new entry</a>
  </div>
  
</div>
@endsection