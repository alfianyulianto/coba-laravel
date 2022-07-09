@extends('layout.main')

@section('title', 'About')
@section('container')
  <div class="container">
    <div class="row mt-3">
      <div class="col-10">
        <h1>Halo, {{ $nama }}</h1>
      </div>
    </div>
  </div>
@endsection
