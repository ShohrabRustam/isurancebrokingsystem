@extends('Admin.master')
@section('title')
Company
@endsection
@section('section')
<h1>This is company page</h1>
<a href="companyregistration" class="btn btn-primary center" style="margin-left:50px; ">Add Company</a>
<table class="table">
    <thead>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">1</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td scope="row">1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
@endsection
