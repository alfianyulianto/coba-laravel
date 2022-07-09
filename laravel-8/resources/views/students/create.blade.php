@extends('layout.main')
@section('title', 'Form Tambah Data Mahasiswa')
@section('container')
  <div class="container">
    <div class="row mt-3">
      <div class="col-8">
        <h1>Form Tambah Mahasiswa</h1>
        <form action="/students" method="post">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
              value="{{ old('nama') }}">
            @error('nama')
              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror"" id="nim" name="nim"
              value="{{ old('nim') }}">
            @error('nim')
              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror"" id="email" name="email"
              value="{{ old('email') }}">
            @error('email')
              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror"" id="jurusan"
              name="jurusan" value="{{ old('jurusan') }}">
            @error('jurusan')
              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
@endsection
