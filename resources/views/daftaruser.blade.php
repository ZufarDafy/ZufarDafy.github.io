@extends('layouts.admin')
@section('container')
    <!-- Konten Utama -->
    <main class="content">
      <div class="judul">Tabel Daftar Users</div>

      <div class="atastabel">
        <img src="img/users.png" alt="Users" style="width: 100px; height: 100px">
        <div>Users</div>
      </div>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Pengguna</th>
            <th scope="col">A-Coin</th>
            <th scope="col">Transaksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Muhammad</td>
            <td>Rp 20.000</td>
            <td>Lihat</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Zufar</td>
            <td>Rp 40.000</td>
            <td>Lihat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Dafy</td>
            <td>Rp 50.000</td>
            <td>Lihat</td>
          </tr>
        </tbody>
      </table>
  </main>
@endsection
        

