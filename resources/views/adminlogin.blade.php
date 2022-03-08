@extends('Admin.master')
@section('title')
Admin Login
@endsection

@section('section')


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

        {{-- <div class="pass"><a href="#">Forgot password?</a></div> --}}

        <div class="dropdown-divider"></div>

        <div class="row button">
          <input type="submit" value="Login">
          <div class="dropdown-divider"></div>
        </div>


      </form>
    </div>
  </div>

@endsection
