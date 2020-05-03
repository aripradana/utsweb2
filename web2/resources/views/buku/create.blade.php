@extends('layout.main')

@section('judul', 'Form Tambah Data Buku')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Form Tambah Data Buku</h1>


        <form method="POST" action="/buku">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Buku</label>
            <input type="text" id="kode" class="form-control" placeholder="Masukkan Kode Buku" name="kode" value="{{old('kode')}}" required>

        </div>
        <div class="form-group">
            <label for="nama">Nama Buku</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Buku" value="{{old('nama')}}">
        </div>
        <div class="form-group">
            <label for="harga">Harga Buku</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Buku" value="{{old('harga')}}">
        </div>

        <button type="submit" class="btn btn-primary">Tambahkan</button>
        <a href="/buku" class="card-link">Kembali</a>
        </form>
        
      </div>
    </div>
  </div>
@endsection
