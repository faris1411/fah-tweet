@extends('layouts.app')
@section('content')
    <div class="w-25 position-absolute top-50 start-50 translate-middle">
        @foreach ($posts as $post)
        <a href="/posts/{{ $post->id }}">
            <div class="card-body shadow p-3 bg-body">
                {{ $post->content }}
            </div>
        </a>
        @endforeach
    </div>
@endsection