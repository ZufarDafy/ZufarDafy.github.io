@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Produk Baru</h1>
  </div>

  <div class="col-lg-8">
  <form method="POST" action="/dashboard/produks">
    @csrf
    <div class="form-group">
      <label for="nama">Nama Produk</label>
      <input type="text" class="form-control" id="nama"  placeholder="nama" name="nama_produk">
    </div>
    <div class="form-group">
      <label for="game_id">ID Game</label>
      <input type="text" class="form-control" id="game_id"  placeholder="game_id" name="game_id">
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" id="harga"  placeholder="harga" name="harga">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection