@extends('grade\layout')
@section('content')
<div class="card">
  <div class="card-header">Grade Page</div>
  <div class="card-body">
      
      <form action="{{ url('grade') }}" method="post">
        {!! csrf_field() !!}
        <label>English</label></br>
        <input type="text" name="english" id="english" class="form-control"></br>
        <label>Math</label></br>
        <input type="text" name="math" id="math" class="form-control"></br>
        <label>Thai</label></br>
        <input type="text" name="thai" id="thai" class="form-control"></br>
        <label>Science</label></br>
        <input type="text" name="science" id="science" class="form-control"></br>
        <label>Computer</label></br>
        <input type="text" name="computer" id="computer" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop