@extends('layouts.app')
@section('third_party_stylesheets')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
@endsection
@section('content')
<form method="post" action="{{route('users.update',$user->id)}}" class="mt-5" >
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" id="Name" name="Name" aria-describedby="emailHelp" value="{{$user['name']}}"/>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" name="Email" id="Email" class="form-control" value="{{$user['email']}}"/>
  </div>
  <div class="mb-3">
    <label for="Gender" class="form-label">Gender</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female" {{$user['gender'] == "Female" ? "checked" : ""}}>
        <label class="form-check-label" for="Female">Female</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male" {{$user['gender'] == "Male" ? "checked" : ""}}>
        <label class="form-check-label" for="Male">Male</label>
    </div>
    <div class="mb-3" >
        <label for="avatar" class="form-label mt-1">Avatar</label>
        <input type="file" name="avatar" id="avatar" class="form-control" accept=" .png, .jpeg" value="{{$user['avatar']}}"/>
      </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>   
@endsection