@extends('Layout.app')
@section('content')
<div class="login-page">
    <div class="form">
         <h6 class="heading ">Edit Your Profile Info</h6>
      <form class="login-form" action="{{route('user.update' , $data->id)}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$data->name}}"/>
        <input type="text" name="email" placeholder="email" value="{{$data->email}}" disabled>
        <input type="text" name="phonenumber" placeholder="phonenumber" value="{{$data->phonenumber}}"/>
        <input type="text" name="age" placeholder="age" value="{{$data->age}}"/>
        <input type="date" name="dob" placeholder="dob" value="{{$data->dob}}"/>
        <input type="text" name="bloodgroup" placeholder="bloodgroup" value="{{$data->bloodgroup}}"/>
        <input type="text" name="city" placeholder="city" value="{{$data->city}}"/>

        <button type="submit">Update</button>

      </form>
    </div>
  </div>

  @endsection
