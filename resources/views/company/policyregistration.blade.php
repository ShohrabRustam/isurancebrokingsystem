@extends('Admin.master')
@section('title')
    Policy Registration
@endsection

@section('section')
    <div class="container" style="max-width: 500px;min-width:300px; min-height:300px; margin-top:100px">
        <div class="wrapper">
            <div class="title"><span>Policy Registration Form</span></div>
            <div class="dropdown-divider"></div>

            <table class="table table-light">
                <tbody>
                    <tr>
                        <td scope="row"><img src="{{ $companyid['logo'] }}" class="img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|" alt="image" style="height: 30px; width:70px"></td>
                        <td>{{ $companyid['name'] }}</td>

                    </tr>
                </tbody>
            </table>

            <br>
            <form action="policyregistration/{id}" method="POST">
                @csrf
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @elseif(Session::has('sucess'))
                    <div class="alert alert-danger">{{ Session::get('sucess') }}</div>
                @endif
                <input type="hidden"  name="companyid" value="{{ $companyid['id'] }}">

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

                <div class="row">
                    <select name="policytype"  placeholder="Select Policy" required>
                        <option value="">Select Insurance</option>
                        <option value="Health">Health</option>
                        <option value="Life">Life</option>
                        <option value="Bike">Bike</option>
                        <option value="Car">Car</option>
                    </select>

                </div>
                <div class="dropdown-divider"></div>

                <div class="row">
                    <i class="fas fa-user"></i>
                    <label for="about">Policy Desc :</label>
                    <textarea name="policydesc" rows="4" cols="50" placeholder="About Company">
                </textarea>
                    <span class="text-danger">
                        @error('policy_desc')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
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

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="claimprice" type="number" placeholder="Claim Price" required min=0>
                    <span class="text-danger">
                        @error('claim')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="dropdown-divider"></div>

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="timeperiod" type="number" placeholder="Time Period Months" required min="1">
                    <span class="text-danger">
                        @error('timeperiod')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="dropdown-divider"></div>

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
