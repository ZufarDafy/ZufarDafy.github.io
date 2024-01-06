@extends('layouts.admin')
@section('container')
    <!-- Konten Utama -->
    <main class="content">
      <div class="judul">Game</div>

      <div class="atastabel">
        <img src="img/ML.png" alt="Mobile Legends">
        <div>{{ $game }}</div>
      </div>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>50 Diamonds</td>
            <td>Rp 20.000</td>
            <td>Hapus</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>100 Diamonds</td>
            <td>Rp 40.000</td>
            <td>Hapus</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>150 Diamonds</td>
            <td>Rp 50.000</td>
            <td>Hapus</td>
          </tr>
        </tbody>
      </table>
  </main>
@endsection