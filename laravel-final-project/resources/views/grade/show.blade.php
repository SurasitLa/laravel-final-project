@extends('grades.layout')
@section('content')
<div class="card">
  <div class="card-header">Grades Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">English : {{ $grades->english }}</h5>
        <p class="card-text">Math : {{ $grades->math }}</p>
        <p class="card-text">Thai : {{ $grades->thai }}</p>
        <p class="card-text">Science : {{ $grades->science }}</p>
        <p class="card-text">Computer : {{ $grades->computer }}</p>
  </div>
      
    </hr>
  
  </div>
</div>