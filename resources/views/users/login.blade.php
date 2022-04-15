@extends('layouts/app')
@section('content')
<form class="w-25 position-absolute top-50 start-50 translate-middle p-5 bg-light border border-1 border-secondary">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Masuk</button>
  </form>
@endsection