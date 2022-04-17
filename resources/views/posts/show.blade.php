@extends('layouts.app')
@section('content')
    <div class="w-50 position-absolute top-50 start-50 translate-middle">
        <div class="card-body shadow p-3 bg-body">
                {{ $post->content }}
        </div>
        <div class="position-fixed end-0 mt-2 d-flex">
        <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit" role="button">Ubah</a>
        <a class="btn btn-danger ms-1" href="/posts/{{ $post->id }}/delete" role="button">Hapus</a>
        </div>    
    </div>
@endsection