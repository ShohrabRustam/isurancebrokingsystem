@extends("layouts.master")
@section('title')
Registration
@endsection
@section('section')

{{-- @if($a==0)
    alert("Email or Password is wrong");
@endif --}}

{{--
@php
    echo $data;
@endphp --}}
{{-- {{ $data }} --}}

@include('style');
<div class="login-box">
    <h2>Registration</h2>
    <form action="registration" method="POST">
        @csrf
      <div class="user-box">
        <input name="name" type="text"  value="{{ old('name') }}" required >
        <label>name</label>

    </div>
      <div class="user-box">
        <input name="email" type="email"  value="{{ old('email') }}" required>
        <label>email</label>
      </div>

      <div class="user-box">
        <input name="password" type="password"   required >
        <label>password</label>
      </div>

      <div class="user-box">
        <input name="confirm_password" type="password"  required>
        <label>confirm_password</label>
      </div>
      <a href="#"><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the   Terms &amp; Conditions</label></a>

      <a href="#" type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="Signup" class="btn btn-success" style="width:100px; height:50px">
      </a>

    </form>
  </div>

{{-- <div class="container" style="max-width: 500px;min-width:300px; min-height:300px; margin-top: 60px;">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="registration" method="POST">
            @csrf

        @if(Session::has('fail'))

        <div class="alert alert-danger">{{  Session::get('fail')}}</div>
        @endif

        <div class="row">
            <i class="fas fa-user"></i>
            <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" required >
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
          </div>


        <div class="row">
          <i class="fas fa-user"></i>
          <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
          <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        </div>

        <div class="row">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="Password"  required >
          <span class="text-danger">@error('password') {{ $message }}    @enderror</span>
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <input name="confirm_password" type="password" placeholder="Confirm Password" required>
            <span class="text-danger">@error('confirm_password') {{ $message }}    @enderror</span>
          </div>
          <br>
          <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
        </div>

        <div class="row button">
          <input type="submit" value="Signup">
        </div>

      </form>
    </div>
  </div> --}}
@endsection
