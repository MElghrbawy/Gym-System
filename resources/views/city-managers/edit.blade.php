@extends('layouts.app')
@section('third_party_stylesheets')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<form method="post" action="{{route('city-managers.update',$staff->id)}}" class="mt-5">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$staff->name}}"/>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" name="email" id="Email" class="form-control" value="{{$staff->email}}"/>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control" value="{{$staff->password}}"/>
  </div>
  <div class="mb-3">
    <label for="confirm" class="form-label">Confrim Password</label>
    <input type="password" name="confirm" id="confirm" class="form-control"/>
  </div>
  <div class="mb-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="file" name="avatar" id="avatar" class="form-control" value="{{$staff->avatar}}" />
  </div>
  <div class="mb-3 ">
    <label for="national_id" class="form-label">National_id</label>
    <input type="text" name="national_id" id="national_id" class="form-control" value="{{$staff->national_id}}"/>
  </div>

 
  <div class="mb-3" id="cityDiv">
    <label for="city" class="form-label">City</label>
    <select name="city" class="form-control" id="city"> 
      @foreach($cities as $city) 
      <option value="{{$city->id}}" {{$city->staff_id == $staff->id ? "selected" : ""}}>{{$city->name}}</option>
      @endforeach
    </select>
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>  
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    
      
  
    
});
</script>


@endsection 
