@extends('layout.main')

@section('judul', 'Form Ubah Data Buku')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Form Ubah Data Buku</h1>


        @foreach ( $buku as $p )
        <form method="POST" action="/buku">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Buku</label>
            <input type="text" id="kode" class="form-control" placeholder="Masukkan Kode Buku" name="kode" value="{{ $p->kode )}}" >

        </div>
        <div class="form-group">
            <label for="nama">Nama Buku</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Buku" value="{{ $p->nama }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga Buku</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Buku" value="{{ $p->harga )}}">
        </div>

        <button type="submit" class="btn btn-primary" value="edit">Ubah Data</button>
        <a href="/buku" class="card-link">Kembali</a>
        </form>
        @endforeach
      </div>
    </div>
  </div>
@endsection
