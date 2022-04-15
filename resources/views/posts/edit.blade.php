@extends('layouts.app')
@section('content')
<form action="/posts/{{ $post->id }}/update" method="POST">
    @csrf
    <div class="mb-3 w-50 position-absolute top-50 start-50 translate-middle">
        <label for="exampleFormControlTextarea1" class="form-label fs-2">Ubah</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content">{{ $post->content }}</textarea>
        <input class="position-absolute end-0 mt-3 btn btn-primary" type="submit" value="Ubah">
    </div>
</form>
@endsection