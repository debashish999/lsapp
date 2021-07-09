@extends('layouts.app')


@include('pages.nav')

@section('content')

<h1>posts</h1>

@if(count($posts) > 0)
    @foreach($posts as $post)
    <div class='well'>
    <div class="row">
    <div class="col-md-4 col-sm-4">
    <img style="width:80%" src="/storage/cover_images/{{ $post->cover_image}}">
     </div>
     <div class="col-md-8 col-sm-8">

    <h3><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h3>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    </div>
    </div>
    </div>
    @endforeach
    <div class=paginate>

    {{ $posts->links() }}
    </div>

    @else
        <p>no posts found</p>

@endif
@endsection

<style>
.container{
    width:60%;
}
.paginate{
    margin-top:5%;
}
.w-5{
    display:none;
}

</style>