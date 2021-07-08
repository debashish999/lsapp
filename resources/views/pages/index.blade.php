@extends('layouts.app')

@section('Title','Index page')

@include('pages.nav')

@section('content')

   
<div class="jumbotron">
        <h3>{{ $name }}</h3>
        <p class="lead">this is a laravel application</p>
        <span>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Login</a></p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Register</a></p></span>
      </div>
   

   

@endsection
<style>

h3,a{
    margin-left:30%;
}
.lead{
    margin-left:30%;
}
a{
    display:inline-block;
}




</style>






