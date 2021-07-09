@extends('layouts.app')


@include('pages.nav')

@section('content')

<h1>posts</h1>

@if(count($posts) > 0)
    @foreach($posts as $post)
    <div class='well'>

    <h3><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h3>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    </div>
    @endforeach
    {{ $posts->links() }}

    @else
        <p>no posts found</p>


@endif
@endsection

<style>
.container{
    width:60%;
}

</style>