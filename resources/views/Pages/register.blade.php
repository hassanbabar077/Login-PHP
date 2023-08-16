@extends('Layout.app')
@section('content')
<div class="login-page">
    <div class="form">

      <form class="login-form" action="{{route('user.register')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Register</button>
        <p class="message"><a href="{{route('login')}}">Already Have Account</a></p>
      </form>
    </div>
  </div>

  @endsection
