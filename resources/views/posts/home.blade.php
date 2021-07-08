@extends('layouts.app')

@section('Title','Home page')

@section('sidebar')
@parent


@endsection


@section('content')

    <h1>Hello {{ $name }}</h1>

    <p>This is laravel</p>

@endsection