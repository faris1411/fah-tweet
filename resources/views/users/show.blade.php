@extends('layouts.app')
@section('content')
<div class="w-25 position-absolute top-50 start-50 translate-middle">
    <img src="{{ $user->image }}" class="card-img-top" alt="Foto profil">
    <div class="card-body border">
      <p class="card-text">{{ $user->name }}</p>
    </div>
    <div class="mt-3 d-flex justify-content-end">
        <a class="btn btn-primary" href="/posts/{{ $user->id }}/edit" role="button">Ubah</a>
        <a class="btn btn-danger ms-1" href="/posts/{{ $user->id }}/delete" role="button">Hapus</a>
    </div>  
</div>
@endsection