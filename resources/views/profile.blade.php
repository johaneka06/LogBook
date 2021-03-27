@extends('template/master')
@section('title', 'Your Profile')
@section('contents')
<div class="container form-control text-center my-5">
    <h3 class="mb-5">Your Profile Page</h3>
    <form action="{{ url('/profile/'.Auth::user()->id.'/update') }}" method="POST" class="my-5">
        @csrf
        <h5>Name:</h5>
        <input type="text" name="profileName" id="profileName" value="{{Auth::user()->name}}" class="form-control mb-4" style="width: 37.5%;margin-left: 31%" readonly>

        <h5>Email:</h5>
        <input type="text" name="profileEmail" id="profileEmail" value="{{Auth::user()->email}}" class="form-control mb-4" style="width: 37.5%;margin-left: 31%" readonly>

        <input type="submit" class="btn btn-primary" name="submitBtn" id="submitBtn" value="Confirm" hidden>
        {{-- <a href="{{url('/password/change/'.Auth::user()->id)}}" class="btn btn-danger">Change Password</a> --}}

        <button class="btn btn-warning" id="editBtn" name="editBtn" type="button">Edit Profile</button>
        <button class="btn btn-warning" id="cancelBtn" name="cancelBtn" hidden type="button">Cancel</button>
        <button class="btn btn-primary" id="updateBtn" name="cancelBtn" hidden type="submit">Update Profile</button></a>
        <a href="{{url('/export/pdf')}}"><button class="btn btn-danger">Export to PDF</button></a>

    </form>
    
    
</div>
@endsection