@extends('layout.main')

@section('judul', 'Daftar Buku')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Daftar Buku</h1>

        <a href="/buku/create" class="btn btn-primary my-3">Tambah Data Buku</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Buku</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Haga Buku</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach( $buku as $tb )
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $tb->kode }}</td>
            <td>{{ $tb->nama }}</td>
            <td>{{ $tb->harga }}</td>
            <td>

            <a href="/buku/edit/{{ $tb->id }}" class="btn btn-primary my-2">Edit</a>
            <form action="" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn=danger">Delete</button>
            </form>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
            <a href="/" class="card-link">Beranda</a>
      </div>
    </div>
  </div>
@endsection
