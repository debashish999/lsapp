

<h2>user is here</h2>

@include('inner')

@foreach($users as $user)

    <p>{{ $user }}</p>

    @endforeach

    @csrf
    <script>
    const data = @json($users);
    console.log(data);
    </script>