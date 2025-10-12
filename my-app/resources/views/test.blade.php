@foreach ($users as $user)
    <p>
        {{ $user->name }}
    </p>
@endforeach
@php
var_dump($users);
@endphp
