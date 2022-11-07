@extends('grades.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('grade/' .$grades->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$grades->id}}" id="id" />
        <label>English</label></br>
        <input type="text" name="english" id="english" value="{{$grades->english}}" class="form-control"></br>
        <label>Math</label></br>
        <input type="text" name="math" id="math" value="{{$grades->math}}" class="form-control"></br>
        <label>Thai</label></br>
        <input type="text" name="thai" id="thai" value="{{$grades->thai}}" class="form-control"></br>
        <label>Science</label></br>
        <input type="text" name="science" id="science" value="{{$grades->science}}" class="form-control"></br>
        <label>Computer</label></br>
        <input type="text" name="computer" id="computer" value="{{$grades->computer}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop