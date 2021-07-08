@extends('layouts.app')



@section('content')
@include('pages.nav')
<p>count of users {{ count($users) }}<br>

    <ul>
    @foreach($users as $user)
      @if($user == 'deb')
        <p>{{$user}} cool one </p>
        @elseif($user == 'sam')
            <p>sam is here</p>
        @else
            <p>{{$user}} is unknown user</p>
        



      @endif
    

    @endforeach
    
    </ul>
   
    <p>this is contact us page</p>


   

@endsection