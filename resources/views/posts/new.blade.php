@extends('layouts.app')
@section('content')
<form method="POST">
@csrf
<div class="mb-3 w-50 position-absolute top-50 start-50 translate-middle">
    <label for="exampleFormControlTextarea1" class="form-label fs-2">Post</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
    <input class="position-absolute end-0 mt-3 btn btn-primary" type="submit" value="Buat">
</div>
</form>
@endsection