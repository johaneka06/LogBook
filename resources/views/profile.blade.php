@extends('template/master')
@section('title', 'Your Profile')
@section('contents')
<div class="container form-control" style="text-align: center">
    <h3 class="mb-5">Your Profile Page</h3>
    <form action="">
        <h5>Name:</h5>
        <input type="text" name="profileName" id="profileName" value="{{Auth::user()->name}}" class="form-control mb-4" style="width: 37.5%;margin-left: 31%" readonly>

        <h5>Email:</h5>
        <input type="text" name="profileEmail" id="profileEmail" value="{{Auth::user()->email}}" class="form-control mb-4" style="width: 37.5%;margin-left: 31%" readonly>

        <input type="submit" class="btn btn-primary" name="submitBtn" id="submitBtn" value="Confirm" hidden>
        {{-- <a href="{{url('/password/change/'.Auth::user()->id)}}" class="btn btn-danger">Change Password</a> --}}

    </form>
    
    <button class="btn btn-warning" onclick="edit()" id="editBtn" name="editBtn">Edit Profile</button>
    <button class="btn btn-warning" onclick="cancel()" id="cancelBtn" name="cancelBtn" style="visibility: hidden">Cancel</button>
    <a href="{{url('/export/pdf')}}"><button class="btn btn-danger">Export to PDF</button></a>
</div>

<script>
    function edit()
    {
        document.getElementById('cancelBtn').style.visibility="visible";
        document.getElementById('editBtn').style.visibility="hidden";
    }

    function cancel()
    {
        document.getElementById('cancelBtn').style.visibility="hidden";
        document.getElementById('editBtn').style.visibility="visible";
    }
</script>
@endsection