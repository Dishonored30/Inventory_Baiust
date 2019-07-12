@extends('prac.temp')

@section('title')
  {{ "Departments" }}
@endsection

@section('register')
  <link rel="stylesheet" type="text/css" href="{{ asset('/nasifcss/css/registration.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/nasifcss/css/login.css') }}">
  <div class="main-w3layouts wrapper">
    
    <span class="login100-form-logo">
     <img src="/nasifcss/images/logo.png">
    </span>
    
    <div class="container">
     
     <table class="table">
      <thead>
       <tr>
        <th >ID</th>
        <th >Name</th>
        <th >Number of Students</th>
        <th >Campus No</th>
        <th >Type of Department</th>
       </tr>
      </thead>

      <tbody>
        @foreach ($departments as $department)
        <tr>
          <td>{{ $department->id }}</td>
          <td>{{ $department->name }}</td>
          <td>{{ $department->number_of_students }}</td>
          <td>{{ $department->campus_no }}</td>
          <td>{{ $department->type_of_department }}</td>
        </tr>
        @endforeach
      </tbody>
     </table>
      
        <ul class="colorlib-bubbles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
    </div>
  </div>
@endsection
  