@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Fullname : {{ $students->fullname }}</h5>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Gender : {{ $students->gender }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>