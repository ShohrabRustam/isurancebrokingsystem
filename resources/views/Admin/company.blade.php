@extends('Admin.master')
@section('title')
Company
@endsection
@section('section')
<?php
// echo '<pre>';
//     var_dump($data);
//     die;
?>
<div class="container center">
<a href="companyregistration" class="btn btn-primary center" style="margin-bottom: 20px; margin-top:20px">Add Company</a>
<table class="table">
    {{-- <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Add Policy</th>
            <th>Edit Policy</th>
            <th>Delete</th>
        </tr>
    </thead> --}}
    <tbody>
        @foreach ($data as $item)
        <tr style="margin-bottom: 20px">
            <td scope="row"><img src="{{ $item['logo'] }}" class="img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|" alt="image" style="height: 30px; width:70px"></td>
            <td>{{ $item['register_number'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['about'] }}</td>
            <td><button class="btn btn-info">  View Policy</button></td>
            <td><button class="btn btn-info">  Add Policy</button></td>
            <td><button class="btn btn-primary">Edit Company</button></td>
            <td><button class="btn btn-danger">Delete Company</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
