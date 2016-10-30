@extends('layouts.base')

@section('content')

<h1>Edit Notebooks</h1>
<form action="/notebooks/{{$notebooks->id}}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}
  <div class="form-group">
    <label for="name">
      Notebooks name
    </label>
    <input class="form-control" type="text" name="name">
  </div>
    <input class="btn btn-primary" type="submit" value="Done">
@stop
