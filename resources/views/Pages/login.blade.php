@extends('Layout.app')
@section('content')
<div class="login-page">
    <div class="form">

      <form class="login-form" action="{{route('user.login')}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="email"/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit">login</button>
        <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
      </form>
    </div>
  </div>

  @endsection
