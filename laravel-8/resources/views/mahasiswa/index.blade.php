@extends('layout.main')
@section('title', 'Mahasiswa')
@section('container')
  <div class="container">
    <div class="row mt-3">
      <div class="col">
        <h1>Dafatar Mahasiswa</h1>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Email</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $m)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>
                  <a href="" class="badge bg-success">Edit</a>
                  <a href="" class="badge bg-danger">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
