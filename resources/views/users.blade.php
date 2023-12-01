<h1>This users page</h1>
<br>
{{-- <h3>User:  {{ $users }}</h3>
<h3>City:  {{ !empty($citys) ? $citys : 'No City' }}</h3> --}}

@foreach ($user as $id => $value)
    <h3>{{ $id}} - {{ $value['name']}} | {{ $value['phone']}} |{{ $value['city']}} |
        <a href="{{ route('view_user', $id)}}">Show</a>
    </h3>
@endforeach
