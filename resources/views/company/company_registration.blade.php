@extends('Admin.master')
@section('title')
Company Registration
@endsection

@section('section')


<div class="container" style="max-width: 500px;min-width:300px; min-height:300px; margin-top:100px">
    <div class="wrapper" >
        <div class="title"><span>Company Registration Form</span></div>
        <br>
        <form action="companyregistration" method="POST">
            @csrf
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{  Session::get('fail')}}</div>
        @elseif(Session::has('sucess'))
        <div class="alert alert-danger">{{  Session::get('sucess')}}</div>
        @endif

        <div class="row">
          <i class="fas fa-user"></i>
          <input name="register_number" type="number" placeholder="Register Number" required min=0>
          <span class="text-danger">@error('register_number') {{ $message }} @enderror</span>
        </div>
        <div class="dropdown-divider"></div>

        <div class="dropdown-divider"></div>

        {{-- <div class="pass"><a href="#">Forgot password?</a></div> --}}
        <div class="row">
            <i class="fas fa-user"></i>
            <input name="name" type="text" placeholder="Company Name" required>
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
          </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-divider"></div>

        <div class="row">
            <i class="fas fa-user"></i>
            <input name="logo" type="text" placeholder="link for logo" required>
            <span class="text-danger">@error('logo') {{ $message }} @enderror</span>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-divider"></div>

        <div class="row">
            <i class="fas fa-user"></i>
            <label for="about">About Company :</label>
            <textarea name="about" rows="4" cols="50" placeholder="About Company" >
            </textarea>
            <span class="text-danger">@error('about') {{ $message }} @enderror</span>
        </div>
        <div class="dropdown-divider"></div>

        <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
        </div>
        <div class="dropdown-divider"></div>

        <div class="row button">
          <input type="submit" value="Registration">
          <div class="dropdown-divider"></div>
        </div>


      </form>
    </div>
  </div>

@endsection
