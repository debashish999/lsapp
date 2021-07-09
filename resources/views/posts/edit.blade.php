@extends('layouts.app')
@section('content')

@include('pages.nav')

<a href='/posts' class='btn btn-default'>GoBack</a>

<h1>Edit Post</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title, ['class' => 'form-control','placeholder' => 'title' ])}}
    <span style="color: red;">@error('title'){{ $message }} @enderror</span><br>
    {{Form::label('body','Body')}}
    {{Form::textarea('body',$post->body,['class' => 'form-control','placeholder' => 'Body Text' ])}}
    <span style="color: red;">@error('body'){{ $message }} @enderror</span>



</div>
<div class ="form-group">
{{Form::file('cover_image',['onchange' =>'loadFile(event)'])}}
<hr>

    <img id="preview">

    </div>

{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    

{!! Form::close() !!}




@endsection

<script>
loadFile =function(event){
    let output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);

}



</script>
<style>
.container{
    width:60%;
}

#preview{
    width:20%;
    
}

</style>