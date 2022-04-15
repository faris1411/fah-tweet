@extends('layouts.app')
@section('content')
    <div class="bg-dark">
    <div class="w-50 position-absolute top-50 start-50 translate-middle">
        @foreach ($posts as $post)
        <a href="/posts/{{ $post->id }}" style="text-decoration: none;color:black">
            <div class="card-body shadow p-3 bg-body">
                {{ $post->content }}
            </div>
        </a>
        @endforeach
    </div>
    </div>
@endsection