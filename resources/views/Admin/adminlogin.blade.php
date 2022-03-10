@extends('Admin.master')
@section('title')
Admin Login
@endsection

@section('section')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@include('style');
<div class="login-box">
    <h2>Admin Login Form</h2>
    <form action="adminlogin" method="POST">
        @csrf
      <div class="user-box">
        <input name="email" type="email"  value="{{ old('email') }}" required>
        <label>Admin Email</label>

    </div>
      <div class="user-box">
        <input name="password" type="password" required >
        <label>Admin Password</label>
      </div>

      <a href="#" type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="login" class="btn btn-success" style="width:100px; height:50px">
      </a>
    </form>
  </div>


{{--
<div class="container" style="max-width: 500px;min-width:300px; min-height:300px; margin-top:100px">
    <div class="wrapper" >
        <div class="title"><span>Admin Login Form</span></div>
        <br>
        <form action="adminlogin" method="POST">
            @csrf
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{  Session::get('fail')}}</div>
        @elseif(Session::has('sucess'))
        <div class="alert alert-danger">{{  Session::get('sucess')}}</div>
        @endif

        <div class="row">
          <i class="fas fa-user"></i>
          <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
          <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        </div>
        <div class="dropdown-divider"></div>


        <div class="row">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="Password" required >
          <span class="text-danger">@error('password') {{ $message }} @enderror</span>
        </div>
        <div class="dropdown-divider"></div>

        <div class="pass"><a href="#">Forgot password?</a></div>

        <div class="dropdown-divider"></div>

        <div class="row button">
          <input type="submit" value="Login">
          <div class="dropdown-divider"></div>
        </div>


      </form>
    </div>
  </div> --}}

@endsection
