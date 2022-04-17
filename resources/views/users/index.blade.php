@extends('layouts.app')
@section('content')
<div class="w-25 position-absolute top-50 start-50 translate-middle">
    @foreach ($users as $user)
    <a href="/users/{{ $user->id }}" style="text-decoration: none;color:black">
        <div class="card-body shadow p-3 bg-body">
            <img class="me-3" width=50 src="{{ $user->image }}" alt="">{{ $user->name }}
        </div>
    </a>
    @endforeach
</div>
@endsection