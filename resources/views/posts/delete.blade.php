@extends('layouts.app')
@section('content')
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 25%;">
    <div class="card-body">
      <h5 class="card-title text-center">Anda yakin ingin menghapus:</h5>
      <p class="card-text text-center fs-4">{{ $post->content }}</p>
      <div class="d-flex justify-content-center">
        <form class="me-1" action="/posts/{{ $post->id }}/delete" method="POST">@csrf<button class="btn btn-outline-danger btn-sm" type="submit">Ya</button></form>
        <a href="/posts/{{ $post->id }}" class="ms-1 btn btn-outline-primary btn-sm">Tidak</a>
      </div>
    </div>
</div>
@endsection

