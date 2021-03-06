@extends('SuperAdmin.master')

@section('title')
Admin Registration
@endsection
@section('section')
<div class="container" style="max-width: 500px;min-width:300px; min-height:300px;margin-top: 40px;">
    <div class="wrapper">
        <div class="title"><span>Admin Registration Form</span></div>
        <form action="adminregistration" method="POST">
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
            <i class="fas fa-user"></i>
            <input name="mobile" type="number" placeholder="Mobile Number" value="{{ old('mobile') }}" required min="6000000000" max="9999999999">
            <span class="text-danger">@error('mobile') {{ $message }} @enderror</span>
          </div>


        <div class="row">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="Password"  required >
          <span class="text-danger">@error('password') {{ $message }}    @enderror</span>
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <input name="confirm_password" type="password" placeholder="Confirm Password" required="required">
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
  </div>

@endsection
