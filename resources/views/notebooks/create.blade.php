@extends('layouts.base')

@section('content')

<h1>Create Notebooks</h1>
<form action="/notebooks" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">
      Categories
    </label>
    <input class="form-control" type="text" name="name">
  </div>
    <input class="btn btn-primary" type="submit" value="Done">
@stop
