@extends('layouts/app')
@section('content')
<form action="/users/create" method="POST" class="w-25 position-absolute top-50 start-50 translate-middle p-5 bg-light border border-1 border-secondary">
    @csrf
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Nama</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>
@endsection