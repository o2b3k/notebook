@extends('layouts.base')

@section('content')
<!-- Jumbotron Header -->
 <header class="jumbotron hero-spacer">
     <h1>Welcome to Notebook APP!</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
     <p><a href="{{route('notebooks.index')}}" class="btn btn-primary btn-large">Goto notes!</a>
     </p>
 </header>

@endsection
