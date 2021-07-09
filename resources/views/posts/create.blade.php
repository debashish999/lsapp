@extends('layouts.app')
@section('content')

@include('pages.nav')

<a href='/posts' class='btn btn-default'>GoBack</a>

<h1>create Post</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method' => 'POST','enctype' =>'multipart/form-data']) !!}
    @csrf
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class' => 'form-control','placeholder' => 'title' ])}}
    <!-- <span style="color: red;">@error('title'){{ $message }} @enderror</span><br> -->
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['class' => 'form-control','placeholder' => 'Body Text' ])}}
    <!-- <span style="color: red;">@error('body'){{ $message }} @enderror</span> -->


</div>
<div class ="form-group">
{{Form::file('cover_image')}}

    </div>
{{Form::submit('Submit',['class' => 'btn btn-primary'])}}


{!! Form::close() !!}




@endsection
<style>
.container{
    width:60%;
}

</style>