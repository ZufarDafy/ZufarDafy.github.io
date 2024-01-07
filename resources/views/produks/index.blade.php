@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk</h1>
  </div>

  <div class="table-responsive small">
    <a href="/dashboard/produks/create" class='btn btn-primary mb-3'>Tambah Produk Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Game</th>
          <th scope="col">Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produks as $produk)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $produk->game->nama }}</td>
          <td>{{ $produk->nama_produk }}</td>
          <td>{{ $produk->harga }}</td>
          <td>
            <a href="/dashboard/produks/{{ $produk->slug }}" class="btn btn-info">Lihat</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection