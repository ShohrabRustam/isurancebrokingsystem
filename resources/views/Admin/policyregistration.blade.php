@extends('Admin.master')
@section('title')
    Policy Registration
@endsection

@section('section')
    <div class="container" style="max-width: 500px;min-width:300px; min-height:300px; margin-top:100px">
        <div class="wrapper">
            <div class="title"><span>Company Registration Form</span></div>
            <br>
            <form action="companyregistration" method="POST">
                @csrf
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @elseif(Session::has('sucess'))
                    <div class="alert alert-danger">{{ Session::get('sucess') }}</div>
                @endif

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="policyname" type="text" placeholder="Policy Name" required >
                    <span class="text-danger">
                        @error('policyname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>

                <div class="row">
                    <select name="type" id="cars" placeholder="Select Policy" required>
                        <option value="">Select Insurance</option>
                        <option value="Health">Health</option>
                        <option value="Life">Life</option>
                        <option value="Bike">Bike</option>
                        <option value="Car">Car</option>
                    </select>

                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>

                <div class="row">
                    <i class="fas fa-user"></i>
                    <label for="about">Policy Desc :</label>
                    <textarea name="policy_desc" rows="4" cols="50" placeholder="About Company">
                </textarea>
                    <span class="text-danger">
                        @error('policy_desc')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="policyprice" type="number" placeholder="Policy Price" required min=0>
                    <span class="text-danger">
                        @error('policyprice')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="claimprice" type="number" placeholder="Claim Price" required min=0>
                    <span class="text-danger">
                        @error('claim')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a
                            href="#">Terms &amp; Conditions</a></label>
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
